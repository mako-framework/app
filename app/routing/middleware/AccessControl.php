<?php

namespace app\routing\middleware;

use mako\http\routing\middleware\AccessControl as AbstractAccessControl;

/**
 * Access control middleware.
 */
class AccessControl extends AbstractAccessControl
{
	protected $allowCredentials = true;

	protected $allowAllDomains = true;

	protected $allowedHeaders = ['Content-Type'];

	protected $allowedMethods = ['OPTIONS', 'HEAD', 'GET', 'POST', 'PUT', 'PATCH', 'DELETE'];
}
