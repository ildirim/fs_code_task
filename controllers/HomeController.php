<?php
namespace controllers;

use core\SenderService;
use plugins\SendEmail;

class HomeController
{
	public function __construct($url)
	{
		return $this->$url();
	}

	public function index()
	{
		include 'views/index.php';
	}

	public function getForm()
	{
		$pluginName = 'plugins\\' . $_POST['plugin'];
		if(file_exists($pluginName . '.php'))
		{
			$plugin = new $pluginName();

			$plugin->generateForm();
		}
	}

	public function send()
	{
		$response = '';
		foreach ($_POST as $key => $value)
		{
			$response .= sprintf('Your %s: <b>%s</b> <br>', $key, $value);
		}

		$pluginName = 'plugins\\' . $_POST['plugin'];
		if(file_exists($pluginName . '.php'))
		{
			$plugin = new $pluginName();

			$response .= '<br>' . $plugin->send();
		}
		echo $response;
	}
}