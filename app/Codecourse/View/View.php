<?php 


namespace Codecourse\View;
namespace Twig_Environment;
namespace Twig_loader_Filesystem;

Class View
{

	protected $twig;

	public function __construc()
	{
		$this->twig = new Twig_Environment(
				new Twig_loader_Filesystem('views')

			);
	}

	public function load($view, array $data =[])
	{
		return $this->twig->render($view,$data);
	}
}