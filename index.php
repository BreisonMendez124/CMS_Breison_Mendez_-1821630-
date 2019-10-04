
<?php


session_start();
$controller = isset($_GET['controller']) ? $_GET['controller'] : 'index';
$method = isset($_GET['method']) ? $_GET['method'] : 'index';


spl_autoload_register(function($class){
    if(file_exists("controllers/{$class}.php")){
        require_once "controllers/{$class}.php";
    }else if(file_exists("models/{$class}.php")){
        require_once "models/{$class}.php";
    }else{
        die('The file no exists.');
    }
});

$controller = "{$controller}Controller";
$controller = new $controller();

call_user_func([$controller, $method]);





/**
 * Maneras de concatenar variables.
 */
//$controller .= "Controller";
//$controller = $controller . "Controller";
//var_dump("{$controller}Controller");



