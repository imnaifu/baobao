<?php

/* Entrance */


// define('DS', DIRECTORY_SEPARATOR);
define('ROOT', dirname(dirname(__FILE__)));
define('PUBLIC', dirname(__FILE__));
define('DEBUG', true);

//for composer autoload
include_once(ROOT.'/vendor/autoload.php');

if (DEBUG){
	$whoops = new \Whoops\Run;
	$whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
	$whoops->register();
	ini_set('display_error', 'On');
}
else{
	ini_set('display_error', 'Off');
}

require_once(ROOT.'/core/functions.php');
require_once(ROOT.'/core/baobao.php');

//register a function which is called when the class can not found
spl_autoload_register("\\core\\baobao::load");


//run the framework
\core\baobao::run();



