<?php

return
[
	/*
	 * ---------------------------------------------------------
	 * Identifier
	 * ---------------------------------------------------------
	 *
	 * The supported identifier types are "email" and "username".
	 */
	'identifier' => 'email',

	/*
	 * ---------------------------------------------------------
	 * Auth key name
	 * ---------------------------------------------------------
	 *
	 * Name of the session variable and cookie that holds the authentication key.
	 * Using a unique key name name will prevent session collisions with other applications.
	 */
	'auth_key' => 'gatekeeper_auth_key',

	/*
	 * ---------------------------------------------------------
	 * User model
	 * ---------------------------------------------------------
	 */
	'user_model' => mako\gatekeeper\entities\user\User::class,

	/*
	 * ---------------------------------------------------------
	 * Group model
	 * ---------------------------------------------------------
	 */
	'group_model' => mako\gatekeeper\entities\group\Group::class,

	/*
	 * ---------------------------------------------------------
	 * Policies
	 * ---------------------------------------------------------
	 *
	 * The array key is the entity class name and the
	 * value is the corresponding policy class name.
	 */
	'policies' =>
	[

	],

	/*
	 * ---------------------------------------------------------
	 * Brute force throttling
	 * ---------------------------------------------------------
	 */
	'throttling' =>
	[
		/*
		 * Set to TRUE to enable brute force throttling.
		 */
		'enabled' => true,

		/*
		 * Maximum number of attempts before the account gets temporarily locked.
		 */
		'max_attemps' => 5,

		/*
		 * Number of seconds for which the account gets locked after reaching the maximum number of login attempts.
		 */
		'lock_time' => 300,
	],

	/*
	 * ---------------------------------------------------------
	 * Cookie options
	 * ---------------------------------------------------------
	 */
	'cookie_options' =>
	[
		/*
		 * The path on the server in which the cookie will be available on.
		 * If set to '/', the cookie will be available within the entire domain.
		 * If set to '/foo/', the cookie will only be available within the /foo/ directory and all sub-directories.
		 */
		'path' => '/',

		/*
		 * The domain that the cookie is available to.
		 * To make the cookie available on all subdomains of example.org (including example.org itself) then you'd set it to '.example.org'.
		 */
		'domain' => '',

		/*
		 * Indicates that the cookie should only be transmitted over a secure HTTPS connection from the client. When set to TRUE,
		 * the cookie will only be set if a secure connection exists. On the server-side, it's on the programmer to send this kind of cookie
		 * only on secure connection (e.g. with respect to $this->request->secure()).
		 */
		'secure' => false,

		/*
		 * When TRUE the cookie will be made accessible only through the HTTP protocol.
		 * This means that the cookie won't be accessible by scripting languages, such as JavaScript.
		 * It has been suggested that this setting can effectively help to reduce identity theft through XSS attacks
		 * (although it is not supported by all browsers), but that claim is often disputed.
		 */
		'httponly' => true,

		/*
		 * The supported values are 'Lax', 'Strict' and 'None'.
		 *
		 * @see https://developer.mozilla.org/en-US/docs/Web/HTTP/Headers/Set-Cookie/SameSite
		 */
		'samesite' => 'Lax',
	],
];
