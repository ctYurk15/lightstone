<?php

namespace lightstone\app\controllers;

use lightstone\app\Leaft;

class Controller
{
    public function home()
    {
        $leaft = new Leaft();
        echo $leaft->content('main');
    }

    public function not_found()
    {
        echo '404';
    }
}