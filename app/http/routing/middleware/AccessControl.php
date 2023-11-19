<?php

namespace app\http\routing\middleware;

use mako\http\routing\middleware\AccessControl as AbstractAccessControl;

/**
 * Access control middleware.
 */
class AccessControl extends AbstractAccessControl
{
	protected bool $allowCredentials = true;

	protected bool $allowAllDomains = true;

	protected array $allowedHeaders = ['Content-Type'];

	protected array $allowedMethods = ['OPTIONS', 'HEAD', 'GET', 'POST', 'PUT', 'PATCH', 'DELETE'];
}
