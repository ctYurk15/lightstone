<?php

error_reporting(-1);
ini_set('display_errors', 'On');

include 'bootstrap.php';

use lightstone\models\Model as Model;
use lightstone\app\router\Router as Router;
use lightstone\app\router\URL as URL;
use lightstone\app\router\Route as Route;

//Model::hello();

//creating routemap. here can be instances for Route class too
$routes = [

    [
        'pattern' => '/',
        'method' => 'GET',
        'action' => 'Class1@home'
    ],
    [
        'pattern' => '/product/{id}',
        'method' => 'GET',
        'action' => 'Class1@product'
    ],
    [
        'pattern' => '/product',
        'method' => 'POST',
        'action' => 'Class1@add_product'
    ],
];

//some kind of controller
class Class1
{
    public function home()
    {
        echo 'home<hr>';
    }

    public function product($id)
    {
        echo 'Product '.$id.'<hr>';
    }

    public function not_found()
    {
        echo '404<hr>';
    }
}

//initializing current url
$url = new URL($_SERVER['REQUEST_URI']);

//initializing route
//Class1@not_found will be returned if router won`t find any routes
$router = new Router($routes, ['', '', 'Class1@not_found']);

//getting current route
$route = $router->getRoute($url, $_SERVER['REQUEST_METHOD']);

//executing his action
$route->execute();

//echo '<br>Initialize..';