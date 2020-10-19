<?php
session_start();

// ------------------------------ TEMP
// ini_set('display_errors',1);
// ------------------------------


require 'env.php';

$router = new App\Models\Router\Router($_GET['url']);

require 'route.php';

$router->run();