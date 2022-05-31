<?php

error_reporting(-1);
ini_set('display_errors', 'On');

include 'bootstrap.php';

use lightstone\models\Model as Model;
use lightstone\app\router\Router as Router;
use lightstone\app\router\URL as URL;
use lightstone\app\router\Route as Route;
use lightstone\app\controllers\Controller as Controller;
use lightstone\app\Leaft as Leaft;

Leaft::setTemplatePath(__DIR__.'/templates/');

//initializing current url
$url = new URL($_SERVER['REQUEST_URI']);

//initializing route
//Class1@not_found will be returned if router won`t find any routes
$router = new Router($routes, ['', '', 'lightstone\app\controllers\Controller@not_found']);

//getting current route
$route = $router->getRoute($url, $_SERVER['REQUEST_METHOD']);

//executing his action
$route->execute();

//echo '<br>Initialize..';