<?php

namespace lightstone\app\controllers;

class Controller
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