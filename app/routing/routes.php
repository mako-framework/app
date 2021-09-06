<?php

use app\controllers\Index;

/** @var \mako\http\routing\Routes $routes */

$routes->get('/', [Index::class, 'welcome']);
