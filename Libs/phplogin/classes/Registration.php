<?php

/**
 * Handles the user registration
 * @author Panique
 * @link http://www.php-login.net
 * @link https://github.com/panique/php-login-advanced/
 * @license http://opensource.org/licenses/MIT MIT License
 */
namespace PHPLogin\classes;

class Registration
{
    /**
     * @var object $db_connection The database connection
     */
    private $db_connection            = null;
    /**
     * @var bool success state of registration
     */
    public  $registration_successful  = false;
    /**
     * @var bool success state of verification
     */
    public  $verification_successful  = false;
    /**
     * @var array collection of error messages
     */
    public  $errors                   = array();
    /**
     * @var array collection of success / neutral messages
     */
    public  $messages                 = array();

    public $user_id = null;

    public $dataModel;

    /**
     * the function "__construct()" automatically starts whenever an object of this class is created,
     * you know, when you do "$login = Login();"
     */
    public function __construct()
    {
        //session_start();        
        // if we have such a POST request, call the registerNewUser() method
        if (isset($_POST["register"])) {            
            $this->registerNewUser($_POST['compcode'],$_POST['user_name'], $_POST['user_name'], $_POST['user_password_new'], $_POST['user_password_repeat'], $_POST["captcha"]);
        // if we have such a GET request, call the verifyNewUser() method
        } else if (isset($_GET["id"]) && isset($_GET["verification_code"])) {
            $this->verifyNewUser($_GET["id"], $_GET["verification_code"]);
        }
    }

    /**
     * handles the entire registration process. checks all error possibilities, and creates a new user in the database if
     * everything is fine
     */
    private function registerNewUser($compcode, $user_name, $user_email, $user_password, $user_password_repeat, $captcha)
    {        
        // we just remove extra space on username and email
        $user_name  = trim($user_name);
        $user_email = trim($user_email);

        // check provided data validity
        // TODO: check for "return true" case early, so put this first
        if (strtolower($captcha) != strtolower($_SESSION['captcha'])) {
            $this->errors[] = MESSAGE_CAPTCHA_WRONG." -> ".$_SESSION['captcha']." <> ".$captcha;
        } elseif (empty($user_name)) {
            $this->errors[] = MESSAGE_USERNAME_EMPTY;
        } elseif (empty($user_password) || empty($user_password_repeat)) {
            $this->errors[] = MESSAGE_PASSWORD_EMPTY;
        } elseif ($user_password !== $user_password_repeat) {
            $this->errors[] = MESSAGE_PASSWORD_BAD_CONFIRM;
        } elseif (strlen($user_password) < 6) {
            $this->errors[] = MESSAGE_PASSWORD_TOO_SHORT;
        } elseif (strlen($user_name) > 64 || strlen($user_name) < 2) {
            $this->errors[] = MESSAGE_USERNAME_BAD_LENGTH;
        //} elseif (!preg_match('/^[a-z\d]{2,64}$/i', $user_name)) {
        //    $this->errors[] = MESSAGE_USERNAME_INVALID;
        } elseif (empty($user_email)) {
            $this->errors[] = MESSAGE_EMAIL_EMPTY;
        } elseif (strlen($user_email) > 64) {
            $this->errors[] = MESSAGE_EMAIL_TOO_LONG;
        } elseif (!filter_var($user_email, FILTER_VALIDATE_EMAIL)) {
            $this->errors[] = MESSAGE_EMAIL_INVALID;

        // finally if all the above checks are ok
        } else { 
            // check if username or email already exists           
            //$dataModel = new \System\BaseModel("users");
            $result = $this->dataModel->findall("users","compcode=? and (user_name=? or user_email=?)",[$comp_code,$user_name,$user_email]);

            // if username or/and email find in the database
            // TODO: this is really awful!
            if (count($result) > 0) {
                for ($i = 0; $i < count($result); $i++) {
                    $this->errors[] = ($result[$i]['user_name'] == $user_name) ? MESSAGE_USERNAME_EXISTS : MESSAGE_EMAIL_ALREADY_EXISTS;
                }
            } else {
                // check if we have a constant HASH_COST_FACTOR defined (in config/hashing.php),
                // if so: put the value into $hash_cost_factor, if not, make $hash_cost_factor = null
                $hash_cost_factor = (defined('HASH_COST_FACTOR') ? HASH_COST_FACTOR : null);

                // crypt the user's password with the PHP 5.5's password_hash() function, results in a 60 character hash string
                // the PASSWORD_DEFAULT constant is defined by the PHP 5.5, or if you are using PHP 5.3/5.4, by the password hashing
                // compatibility library. the third parameter looks a little bit shitty, but that's how those PHP 5.5 functions
                // want the parameter: as an array with, currently only used with 'cost' => XX.
                $user_password_hash = password_hash($user_password, PASSWORD_DEFAULT, array('cost' => $hash_cost_factor));
                // generate random hash for email verification (40 char string)
                $user_activation_hash = sha1(uniqid(mt_rand(), true));

                // write new users data into database                
                $newdata = $this->dataModel->create("users");
                $newdata->compcode = $compcode;
                $newdata->user_name = $user_name;
                $newdata->user_password_hash = $user_password_hash;
                $newdata->user_email = $user_email;
                $newdata->user_activation_hash = $user_activation_hash;
                $newdata->user_registration_ip = $_SERVER['REMOTE_ADDR'];
                $newdata->user_registration_datetime = date("Y-m-d H:i:s");
                $user_id = $this->dataModel->save($newdata);

                // id of new user
                //$user_id = $this->db_connection->lastInsertId();
                $this->user_id = $user_id;

                if (isset($user_id)) {
                    if (EMAIL_VERIFICATION)
                    {
                        // send a verification email
                        if ($this->sendVerificationEmail($compcode, $user_id, $user_email, $user_activation_hash)) {
                            // when mail has been send successfully
                            $this->messages[] = MESSAGE_VERIFICATION_MAIL_SENT;
                            $this->registration_successful = true;
                        } else {
                            // delete this users account immediately, as we could not send a verification email
                            $newdata = $this->dataModel->find("users","id=?",[$user_id]);
                            $this->dataModel->trash($newdata);

                            $this->errors[] = MESSAGE_VERIFICATION_MAIL_ERROR;
                        }
                    }                   
                } else {
                    $this->errors[] = MESSAGE_REGISTRATION_FAILED;
                }
            }
        }
    }

    /*
     * sends an email to the provided email address
     * @return boolean gives back true if mail has been sent, gives back false if no mail could been sent
     */
    public function sendVerificationEmail($compcode, $user_id, $user_email, $user_activation_hash)
    {
        //$mail = new \PHPMailer;
        $mail = new \PHPMailer\PHPMailer();

        // please look into the config/config.php for much more info on how to use this!
        // use SMTP or use mail()
        if (EMAIL_USE_SMTP) {
            // Set mailer to use SMTP
            $mail->IsSMTP();
            //useful for debugging, shows full SMTP errors
            //$mail->SMTPDebug = 1; // debugging: 1 = errors and messages, 2 = messages only
            // Enable SMTP authentication
            $mail->SMTPAuth = EMAIL_SMTP_AUTH;
            // Enable encryption, usually SSL/TLS
            if (defined(EMAIL_SMTP_ENCRYPTION)) {
                $mail->SMTPSecure = EMAIL_SMTP_ENCRYPTION;
            }
            // Specify host server
            $mail->Host = EMAIL_SMTP_HOST;
            $mail->Username = EMAIL_SMTP_USERNAME;
            $mail->Password = EMAIL_SMTP_PASSWORD;
            $mail->Port = EMAIL_SMTP_PORT;
        } else {
            $mail->IsMail();
        }

        $mail->From = EMAIL_VERIFICATION_FROM;
        $mail->FromName = EMAIL_VERIFICATION_FROM_NAME;
        $mail->AddAddress($user_email);
        $mail->Subject = EMAIL_VERIFICATION_SUBJECT;

        $link = EMAIL_VERIFICATION_URL.'/'.$compcode.'?id='.urlencode($user_id).'&verification_code='.urlencode($user_activation_hash);

        // the link to your register.php, please set this value in config/email_verification.php
        $emailBody = "Terima kasih telah melakukan pendaftaran di ".SITE_TITLE." ".ucfirst($compcode).",<br>";
        $mail->Body = $emailBody.EMAIL_VERIFICATION_CONTENT.' <br><a href="'.$link.'">'.$link.'</a>';
        $mail->IsHTML(true);

        if(!$mail->Send()) {
            $this->errors[] = MESSAGE_VERIFICATION_MAIL_NOT_SENT . $mail->ErrorInfo;
            return false;
        } else {
            return true;
        }
    }

    /**
     * checks the id/verification code combination and set the user's activation status to true (=1) in the database
     */
    public function verifyNewUser($user_id, $user_activation_hash)
    {
        // try to update user with specified information
        //$dataModel = new \System\BaseModel("users");
        $datauser = $this->dataModel->find("users","id=? and user_activation_hash=?", [$user_id, $user_activation_hash]);

        if (isset($datauser->id))
        {
            $datauser->user_active = 1;
            $this->dataModel->save($datauser);
            $this->verification_successful = true;
            $this->messages[] = MESSAGE_REGISTRATION_ACTIVATION_SUCCESSFUL;
        } else {
            $this->errors[] = MESSAGE_REGISTRATION_ACTIVATION_NOT_SUCCESSFUL;
        }
    }
}
