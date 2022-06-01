<?php

namespace lightstone\app;

use lightstone\app\router\Router as Router;
use lightstone\app\router\URL as URL;
use lightstone\app\Leaft as Leaft;

class Initializer
{
    public static function start($routes = [], $debug_mode = false)
    {
        static::initFramework($debug_mode);
        static::initTemplateEngine();
        static::initRouter($routes);
    }

    protected static function initFramework($debug_mode = false)
    {
        if($debug_mode)
        {
            error_reporting(-1);
            ini_set('display_errors', 'On');
        }
    }


    protected static function initTemplateEngine()
    {
        Leaft::setTemplatePath(ROOT_DIR.'/templates/');
    }

    protected static function initRouter($routes = [])
    {
        $current_url = new URL($_SERVER['REQUEST_URI']);
        $router = new Router($routes, ['', '', 'lightstone\app\controllers\Controller@not_found']);
        $route = $router->getRoute($current_url, $_SERVER['REQUEST_METHOD']);
        $route->execute();
    }
}