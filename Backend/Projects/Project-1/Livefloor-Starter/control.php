<?php
class control
{
	function __construct()
	{
		$url=$_SERVER['PATH_INFO'];
		switch($url)
		{
			case '/index':
			include_once('index.php');
			break;

			case '/about':
			include_once('about.php');
			break;

			case '/services':
			include_once('services.php');
			break;

			case '/contact':
			include_once('contact.php');
			break;

			case '/testimonial':
			include_once('testimonial.php');
			break;

			case '/menu':
			include_once('menu.php');
			break;

			case '/team':
			include_once('team.php');
			break;

			case '/login':
			include_once('login.php');
			break;

			case '/signup':
			include_once('signup.php');
			break;


		}
	}
}
$obj=new control;
?>