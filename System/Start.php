<?php
/*
* BantinganPHP v.1.2.7
* Fast Prototyping Framework
* Copyright Piapiastudio 2016
* Piapiastudio.web.id
* Use with your own risk
*/
require('Psr4AutoloaderClass.php');
// instantiate the loader
$loader = new System\Psr4AutoloaderClass;
// register the autoloader
$loader->register();

// the framework basic structure
$loader->addNamespace('Config', __DIR__ .'/../Config');
$loader->addNamespace('System', __DIR__ .'/../System');
$app = new System\Base();
// the framework models and controllers location
$loader->addNamespace('Models', __DIR__ .'/../'.str_replace("/","",MODEL_PATH));
$loader->addNamespace('Controllers', __DIR__ .'/../'.str_replace("/","",CONTROLLER_PATH));
// 3rd party plugins
$namespacedata = json_decode(BANTINGAN_NAMESPACES);
foreach ($namespacedata->namespaces as $namespaceitem) {    	
    $loader->addNamespace($namespaceitem[0], __DIR__ .'/../'.LIB_PATH.$namespaceitem[1].'/');    
}
$routeConfig = new System\RouteConfig();	// aura router configuration
if (defined("SESSION_DB"))
{
    if (SESSION_DB)
    {
        $session = new SQLSession\Session(); // session stored in mysql
    } else {
        session_start();
    }
} else {
    session_start();
}
$app->Start($routeConfig->RouterStart());   // starting app with route configuration
?>