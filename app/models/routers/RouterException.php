<?php

namespace App\Models\Router;

require 'app/models/Views.php';


/**
 *
 */
class RouterException
{
    public function __construct($error)
    {
        $view = new \App\Models\Views();

        require $view->view('errors/404');
    }
}
