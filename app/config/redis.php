<?php

return
[
	/*
	 * ---------------------------------------------------------
	 * Default
	 * ---------------------------------------------------------
	 *
	 * Default configuration to use.
	 */
	'default' => 'localhost',

	/*
	 * ---------------------------------------------------------
	 * Configurations
	 * ---------------------------------------------------------
	 *
	 * You can define as many Redis configurations as you want.
	 *
	 * host              : IP address or hostname of the Redis server.
	 * port              : Port of the Redis server.
	 * username          : (optional - default null) Redis username.
	 * password          : (optional - default null) Redis password.
	 * database          : (optional - default 0) Database index to use for the connection.
	 * persistent        : (optional - default false) Set to true to make the connection persistent.
	 * timeout           : (optional - default 60) Read/write operations timeout in seconds.
	 * connection_timeout: (optional - default 5) Connection timeout in seconds.
	 * tcp_nodelay       : (optional - default true) Disable Nagle's algorithm for reduced latency.
	 * resp              : (optional - default 2) RESP version.
	 */
	'configurations' =>
	[
		'localhost' =>
		[
			'host'       => 'localhost',
			'port'       => 6379,
			'persistent' => false,
			'timeout'    => 60,
			'password'   => '',
			'database'   => 0,
		],

		'cache' =>
		[
			'host'       => 'localhost',
			'port'       => 6379,
			'persistent' => false,
			'timeout'    => 60,
			'password'   => '',
			'database'   => 1,
		],

		'session' =>
		[
			'host'       => 'localhost',
			'port'       => 6379,
			'persistent' => false,
			'timeout'    => 60,
			'password'   => '',
			'database'   => 2,
		],
	],
];
