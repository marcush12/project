<?php
session_start();//first of all!

require( __DIR__ . "/../vendor/autoload.php");//__DIR__ current directory
$whoops = new \Whoops\Run;
$whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
$whoops->register();

$router = new AltoRouter();
