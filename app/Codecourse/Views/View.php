<?php 


namespace Codecourse\Views;
use Twig_Environment;
use Twig_Loader_Filesystem;

Class View
{
	public function __construct()
	{
		# code...
		$this->twig = new Twig_Environment(
				new Twig_Loader_Filesystem('views')
			);
	}

	public function render($view, array $data = [])
	{
		return $this->twig->render($view,$data);
	}
}