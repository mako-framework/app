<?php

$routes->group(['namespace' => 'app\controllers'], function($routes): void
{
	$routes->get('/', 'Index::welcome');
});
