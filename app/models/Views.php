<?php

namespace App\Models;


/**
 *
 */
class Views
{

    public function view($url)
    {
        return 'app/views/' . $url . '.php';
    }

    public function img($url)
    {
        return '/public/images/' . $url;
    }

    public function css($url)
    {
        return '/public/css/' . $url;
    }

    public function js($url)
    {
        return '/public/js/' . $url;
    }
}
