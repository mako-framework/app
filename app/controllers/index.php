<?php

namespace app\controllers;

use \mako\view\View;

class Index extends \mako\http\routing\Controller
{
	public function welcome()
	{
		return new View('welcome');
	}
}