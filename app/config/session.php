<?php

return 
[
	/**
	 * ---------------------------------------------------------
	 * Confifuration
	 * ---------------------------------------------------------
	 * 
	 * The configuration to use.
	 */
	
	'configuration' => 'file',

	/**
	 * ---------------------------------------------------------
	 * Session name
	 * ---------------------------------------------------------
	 * 
	 * Using a unique session name will prevent session collisions with other applications.
	 * Note that only alphanumeric characters can be used in the session name.
	 */

	'session_name' => 'mako_session',

	/**
	 * ---------------------------------------------------------
	 * Cookie options
	 * ---------------------------------------------------------
	 */

	'cookie_options' => 
	[
		/**
		 * The path on the server in which the cookie will be available on.
		 * If set to '/', the cookie will be available within the entire domain. 
		 * If set to '/foo/', the cookie will only be available within the /foo/ directory and all sub-directories.
		 */

		'path' => '/',

		/**
		 * The domain that the cookie is available to.
		 * To make the cookie available on all subdomains of example.org (including example.org itself) then you'd set it to '.example.org'.
		 */

		'domain' => '',

		/**
		 * Indicates that the cookie should only be transmitted over a secure HTTPS connection from the client. When set to TRUE, 
		 * the cookie will only be set if a secure connection exists. On the server-side, it's on the programmer to send this kind of cookie 
		 * only on secure connection (e.g. with respect to $this->request->secure()).
		 */

		'secure' => false,

		/**
		 * When TRUE the cookie will be made accessible only through the HTTP protocol. 
		 * This means that the cookie won't be accessible by scripting languages, such as JavaScript. 
		 * It has been suggested that this setting can effectively help to reduce identity theft through XSS attacks 
		 * (although it is not supported by all browsers), but that claim is often disputed.
		 */
		
		'httponly' => false,
	],
	
	/**
	 * ---------------------------------------------------------
	 * Configurations
	 * ---------------------------------------------------------
	 * 
	 * You can define as many session configurations as you want.
	 *
	 * The supported session types are: "database", "file", "null" and "redis".
	 *
	 * type         : Session type you want to use.
	 * configuration: Database or redis configuration to use for sessions (only required when using "database" or "redis" sessions).
	 * path         : Save path for session files (only required when using "file" sessions).
	 * table        : Name of the database table (only required when using "database" sessions).
	 */
	
	'configurations' => 
	[
		'database' => 
		[
			'type'          => 'database',
			'configuration' => 'test',
			'table'         => 'mako_sessions',
		],

		'file' => 
		[
			'type' => 'file',
			'path' => MAKO_APPLICATION_PATH . '/storage/sessions',
		],

		'null' => 
		[
			'type' => 'null',
		],

		'redis' => 
		[
			'type'          => 'redis',
			'configuration' => 'session',
		],
	],
];