<?php

/**
 * ANANAS
 */
$router->get('/', function() {
	$controller = new App\Controllers\HomeController();
	$controller->home();
});
$router->get('', function() {
	$controller = new App\Controllers\HomeController();
	$controller->home();
});
$router->post('/post', function() {
	$controller = new App\Controllers\HomeController();
	$controller->postHome();
});
$router->post('/post', function() {
	$controller = new App\Controllers\HomeController();
	$controller->postHome();
});

$router->get('/download', function() {
	$controller = new App\Controllers\HomeController();
	$controller->download();
});
