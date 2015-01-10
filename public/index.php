<?php

use mako\application\Web;

/**
 * Include the application init file.
 */

include dirname(__DIR__) . '/app/init.php';

/**
 * Start and run the application.
 */

Web::start(MAKO_APPLICATION_PATH)->run();