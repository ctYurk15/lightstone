<?php

namespace lightstone\app\controllers;

use lightstone\app\Leaft;

class Controller
{
    public function home()
    {
        $leaft = new Leaft();
        $leaft->set('RESOURCES_PATH', ROOT_DIR.'/resources/');
        echo $leaft->content('main');
    }

    public function not_found()
    {
        echo '404';
    }
}