<?php
require( __DIR__ . "/../vendor/autoload.php");//__DIR__ current directory
session_start();
$whoops = new \Whoops\Run;
$whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
$whoops->register();

$router = new AltoRouter();
