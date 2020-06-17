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

// load the login class
require_once($phploginbasepath.'/classes/Login.php');