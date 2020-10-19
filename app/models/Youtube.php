<?php

namespace App\Models;


/**
 *
 */
class Youtube
{

    public function view($url)
    {
        return 'app/views/' . $url . '.php';
    }
}
