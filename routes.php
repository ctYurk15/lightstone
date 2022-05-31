<?php

//creating routemap. here can be instances for Route class too
$routes = [

    [
        'pattern' => '/',
        'method' => 'GET',
        'action' => 'lightstone\app\controllers\Controller@home'
    ],
    [
        'pattern' => '/product/{id}',
        'method' => 'GET',
        'action' => 'lightstone\app\controllers\Controller@product'
    ],
    [
        'pattern' => '/product',
        'method' => 'POST',
        'action' => 'lightstone\app\controllers\Controller@add_product'
    ],
];