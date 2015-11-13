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

	'default' => 'file',

	/**
	 * ---------------------------------------------------------
	 * Configurations
	 * ---------------------------------------------------------
	 *
	 * You can define as many cache configurations as you want.
	 *
	 * The supported cache types are: "apc", "database", "file", "memcache", "memcached", "memory", "redis", "void", "wincache", "xcache", "zenddisk" and "zendmemory".
	 *
	 * type         : Cache type you want to use.
	 * prefix       : Cache prefix that should be unique to your application to avoid conflicts.
	 * path         : Cache path (only required when using "file" cache).
	 * compress_data: Compress stored items? (this requires zlib and is only available when using "memcache" or "memcached" cache).
	 * timeout      : Value in seconds which will be used for connecting to the daemon (only required when using "memcache" or "memcached" cache).
	 * servers      : Cache servers (you can use multiple servers and it is only required when using "memcache" or "memcached" cache).
	 * configuration: Configuration to use for caching (only required when using "database" or "redis" cache).
	 * table        : Name of the database table (only required when using "database" cache).
	 * username     : Cache username (only required when using "xcache" cache).
	 * password     : Cache password (only required when using "xcache" cache).
	 */

	'configurations' =>
	[
		'apc' =>
		[
			'type'   => 'apc',
			'prefix' => 'mako',
		],

		'database' =>
		[
			'type'          => 'database',
			'prefix'        => 'mako',
			'configuration' => 'test',
			'table'         => 'mako_cache',
		],

		'file' =>
		[
			'type'       => 'file',
			'prefix'     => 'mako',
			'path'       => MAKO_APPLICATION_PATH . '/storage/cache',
		],

		'memcache' =>
		[
			'type'          => 'memcache',
			'prefix'        => 'mako',
			'compress_data' => false,
			'timeout'       => 1,
			'servers'       =>
			[
				'server_1' =>
				[
					'server'                => 'localhost',
					'port'                  => '11211',
					'persistent_connection' => false,
					'weight'                => 1,
				],
			],
		],

		'memcached' =>
		[
			'type'          => 'memcached',
			'prefix'        => 'mako',
			'compress_data' => false,
			'timeout'       => 1,
			'servers'       =>
			[
				'server_1' =>
				[
					'server' => 'localhost',
					'port'   => '11211',
					'weight' => 1,
				],
			],
		],

		'memory' =>
		[
			'type' => 'memory',
		],

		'redis' =>
		[
			'type'          => 'redis',
			'prefix'        => 'mako',
			'configuration' => 'cache',
		],


		'void' =>
		[
			'type' => 'void',
		],

		'wincache' =>
		[
			'type'       => 'wincache',
			'prefix'     => 'mako',
		],

		'xcache' =>
		[
			'type'       => 'xcache',
			'prefix'     => 'mako',
			'username'   => 'xcache',
			'password'   => 'xcache',
		],

		'zenddisk' =>
		[
			'type'       => 'zenddisk',
			'prefix'     => 'mako',
		],

		'zendmemory' =>
		[
			'type'       => 'zendmemory',
			'prefix'     => 'mako',
		],
	],
];