<?php

use app\controllers\Index;

/** @var \mako\http\routing\Routes     $routes    */
/** @var \mako\application\Application $app       */
/** @var \mako\syringe\Container       $container */
$routes->get('/', [Index::class, 'welcome']);
