<?php

namespace app\controllers;

use \mako\http\routing\Controller;
use \mako\view\ViewFactory;

class Index extends Controller
{
	/**
	 * Welcome route.
	 * 
	 * @access  public
	 */

	public function welcome(ViewFactory $view)
	{
		return $view->create('welcome');
	}
}