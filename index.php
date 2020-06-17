<?php
/*		
    This is the bootstap for the entire application
*/
    // check for minimum PHP version
if (version_compare(PHP_VERSION, '5.4.0', '<')) {
    exit('Sorry, this script does not run on a PHP version smaller than 5.4.0 !');
} else {    
    require_once('System/Start.php');
}
?>