<?php

return
[
	/**
	 * ---------------------------------------------------------
	 * Default
	 * ---------------------------------------------------------
	 *
	 * Default configuration to use.
	 */

	'default' => 'localhost',

	/**
	 * ---------------------------------------------------------
	 * Configurations
	 * ---------------------------------------------------------
	 *
	 * You can define as many Redis configurations as you want.
	 *
	 * host    : IP address or hostname of the Redis server.
	 * port    : Port of the Redis server.
	 * password: (optional) Password of the Redis server.
	 * database: (optional) Database index to use for the connection.
	 */

	'configurations' =>
	[
		'localhost' =>
		[
			'host'     => 'localhost',
			'port'     => 6379,
			'password' => '',
			'database' => 0,
		],

		'cache' =>
		[
			'host'     => 'localhost',
			'port'     => 6379,
			'password' => '',
			'database' => 1,
		],

		'session' =>
		[
			'host'     => 'localhost',
			'port'     => 6379,
			'password' => '',
			'database' => 2,
		],
	]
];