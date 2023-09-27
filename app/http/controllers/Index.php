<?php

namespace app\http\controllers;

use mako\http\routing\Controller;
use mako\view\ViewFactory;

/**
 * Welcome controller.
 */
class Index extends Controller
{
	/**
	 * Welcome route.
	 */
	public function welcome(ViewFactory $view): string
	{
		return $view->render('welcome');
	}
}
