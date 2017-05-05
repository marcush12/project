<?php
include(__DIR__ . "/../bootstrap/start.php");
//use Dotenv\Dotenv as Dotenv;
//Dotenv::load(__DIR__ . "/../");//couldnt find solution so i hardcoded above
$dotenv = new Dotenv\Dotenv(__DIR__ . "/../");
$dotenv->load();
include(__DIR__ . "/../bootstrap/db.php");
include(__DIR__ . "/../routes.php");

$match = $router->match();

list($controller, $method) = explode("@", $match['target']);
if(is_callable(array($controller, $method))){
  $object = new $controller();
  call_user_func_array(array($object, $method), array($match['params']));
} else {
  echo "Cannot find $controller->$method";
  exit();
}
