<?php

define('DS', DIRECTORY_SEPARATOR);
define('ROOT', dirname(__FILE__));

//loda conf and halpers
require_once(ROOT.DS.'config'.DS.'config.php');
require_once(ROOT.DS.'app'.DS.'lib'.DS.'helpers'.DS.'functions.php');

//autoload classes
function autoloader($className)
{
    if(file_exists(ROOT.DS.'core'.DS.$className.'.php'))
    {
         require_once(ROOT.DS.'core'.DS.$className.'.php');
    }elseif(file_exists(ROOT.DS.'app'.DS.'controllers'.DS.$className.'.php'))
    {
        require_once(ROOT.DS.'app'.DS.'controllers'.DS.$className.'.php');
    }elseif(file_exists(ROOT.DS.'app'.DS.'models'.DS.$className.'.php'))
    {
        require_once(ROOT.DS.'app'.DS.'models'.DS.$className.'.php');
    }
}

spl_autoload_register('autoloader');

session_start();


$url = isset($_SERVER['PATH_INFO'])? explode('/', ltrim($_SERVER['PATH_INFO'], '/')) : [];



//Routh  the  request
Router::route($url);
