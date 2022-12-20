<?php

use app\routing\middleware\AccessControl;
use mako\http\routing\middleware\ContentSecurityPolicy;
use mako\http\routing\middleware\SecurityHeaders;
use mako\validator\input\http\routing\middleware\InputValidation;

/** @var \mako\http\routing\Dispatcher $dispatcher */

//$dispatcher->registerMiddleware(AccessControl::class, priority: 1);
//$dispatcher->registerMiddleware(ContentSecurityPolicy::class);
//$dispatcher->registerMiddleware(SecurityHeaders::class);
//$dispatcher->registerMiddleware(InputValidation::class);

//$dispatcher->setMiddlewareAsGlobal([AccessControl::class]);
