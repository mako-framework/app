<?php

namespace app\controllers;

use \mako\http\Request;
use \mako\http\Response;
use \mako\view\ViewFactory;

class Index extends \mako\http\routing\Controller
{
	/**
	 * View factory instance.
	 * 
	 * @var \mako\view\ViewFactory
	 */
	
	protected $viewFactory;

	/**
	 * Constructor.
	 * 
	 * @access  public
	 * @param   \mako\http\Request      $request      Request instance
	 * @param   \mako\http\Response     $response     Response instance
	 * @param   \mako\view\ViewFactory  $viewFactory  View factory instance
	 */

	public function __construct(Request $request, Response $response, ViewFactory $viewFactory)
	{
		parent::__construct($request, $response);

		$this->viewFactory = $viewFactory;
	}

	/**
	 * Welcome route.
	 * 
	 * @access  public
	 */

	public function welcome()
	{
		return $this->viewFactory->create('welcome');
	}
}
