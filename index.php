<?php 

require "app/bootstrap.php";

$capture = new \Codecourse\Capture\Capture ;
$view = new \Codecourse\Views\View ;

// $view 	 = new \Codecourse\Views\View ;

 $capture->load('invoice.php',[
		'number'=>8777
	]);


$capture->respond('invoice.pdf');
