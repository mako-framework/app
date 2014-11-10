<?php

namespace app\controllers;

use \mako\view\ViewFactory;

class Index extends \mako\http\routing\Controller
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