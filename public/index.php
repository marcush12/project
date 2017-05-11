<?php
$controller = null;
$method = null;

include(__DIR__ . "/../bootstrap/start.php");
//use Dotenv\Dotenv as Dotenv;
//Dotenv::load(__DIR__ . "/../");//couldnt find solution so i hardcoded above
$dotenv = new Dotenv\Dotenv(__DIR__ . "/../");
$dotenv->load();
include(__DIR__ . "/../bootstrap/db.php");
include(__DIR__ . "/../routes.php");

$match = $router->match();
//dd($match);
//dd:die and dump, a better var_dump
if(is_string($match['target']))
    list($controller, $method) = explode("@", $match['target']);
if(($controller != null) && (is_callable(array($controller, $method)))) {
    $object = new $controller();
    call_user_func_array(array($object, $method), array($match['params']));
}else if ($match && is_callable($match['target'])) {
    call_user_func_array($match['target'], $match['params']);
} else {
  echo "Cannot find $controller->$method";
  exit();
}
