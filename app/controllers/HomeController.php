<?php

namespace App\Controllers;

use \App\Models\Views;

/**
 *
 */
class HomeController
{
	private $view;

	public function __construct()
	{
		$this->view = new Views();
	}

	public function home()
	{
		require_once $this->view->view('home');
	}

	public function postHome()
	{
		$pass = $_POST['url'];
		$pass = strip_tags(trim($pass));
		$pass = str_replace(array("\r", "\n"), array(" ", " "), $pass);
		$pass = str_replace(array("\n","\r",PHP_EOL),'',$pass);
		$pass = htmlspecialchars($pass);

		header("Location: /download");
	}

	public function download()
	{
		require_once $this->view->view('download');
	}
}
