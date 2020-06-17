<?php

/* php login class based on phplogin, check comments below */

/**
 * A simple PHP Login Script / ADVANCED VERSION
 * For more versions (one-file, minimal, framework-like) visit http://www.php-login.net
 *
 * @author Panique
 * @link http://www.php-login.net
 * @link https://github.com/panique/php-login-advanced/
 * @license http://opensource.org/licenses/MIT MIT License
 */

/**
 For mvc.php framework
 by susilonurcahyo@gmail.com
*/

$phploginbasepath = "phplogin";

// check for minimum PHP version
if (version_compare(PHP_VERSION, '5.3.0', '<')) {
    exit('Sorry, this script does not run on a PHP version smaller than 5.3.7 !');
} else if (version_compare(PHP_VERSION, '5.5.0', '<')) {
    // if you are using PHP 5.3 or PHP 5.4 you have to include the password_api_compatibility_library.php
    // (this library adds the PHP 5.5 password hashing functions to older versions of PHP)
    require_once($phploginbasepath.'/libraries/password_compatibility_library.php');
}
// include the config
require_once($phploginbasepath.'/config/config.php');

// include the to-be-used language, english by default. feel free to translate your project and include something else
//require_once($phploginbasepath.'/translations/en.php');

// include the PHPMailer library
require_once($phploginbasepath.'/libraries/PHPMailer.php');

// load the login class
require_once($phploginbasepath.'/classes/Login.php');

// create a login object. when this object is created, it will do all login/logout stuff automatically
// so this single line handles the entire login process.
//$login = new Login();

/*
// ... ask if we are logged in here:
if ($login->isUserLoggedIn() == true) {
    // the user is logged in. you can do whatever you want here.
    // for demonstration purposes, we simply show the "you are logged in" view.
    //include("views/logged_in.php");   
    echo "why"; 
} else {
    // the user is not logged in. you can do whatever you want here.
    // for demonstration purposes, we simply show the "you are not logged in" view.
    //include("views/not_logged_in.php");
    //header($_SERVER["SERVER_PROTOCOL"] . " 404 Not found");   
    //header("Location: http://localhost/merryutama/home/error/Not Authorized");			
    header("Location: http://localhost/merryutama/home/error/Not Authorized");			
    die();
}
*/
//echo dirname(__FILE__).'/authorization/Authorization.php';
//die();
require_once(dirname(__FILE__).'/authorization/authorization.php');