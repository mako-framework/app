<?php

use mako\http\routing\Routes;

/** @var \mako\http\routing\Routes $routes */

$routes->group(['namespace' => 'app\controllers'], function(Routes $routes): void
{
	$routes->get('/', 'Index::welcome');
});
