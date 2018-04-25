<?php
require 'config.php';
require 'util/Auth.php';
//require 'config/database.php';
//require 'config/constants.php';
//use an autoloader
//Also spl_autoload_register

function __autoload($class)
{
    require LIBS.$class.".php";
}

/*require 'libs/Bootstrap.php';
require 'libs/Controller.php';
require 'libs/View.php';
require 'libs/Model.php';
//library

require 'libs/Database.php';
require 'libs/Session.php';
require 'libs/Hash.php';*/
//load the Bootstrap!
$bootstrap=new Bootstrap();
//optional path settings
//$bootstrap->setControllerPath();
//$bootstrap->setModelPath();
//$bootstrap->setDefaultFile();
////$bootstrap->setErrorFile();
$bootstrap->init();
?>

