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
	'default' => 'file',

	/*
	 * ---------------------------------------------------------
	 * Configurations
	 * ---------------------------------------------------------
	 *
	 * You can define as many cache configurations as you want.
	 *
	 * The supported cache types are: "apcu", "database", "file", "memcache", "memcached", "memory", "null", "redis" and wincache".
	 *
	 * type         : Cache type you want to use.
	 * prefix       : Cache prefix that should be unique to your application to avoid conflicts.
	 * path         : Cache path (only required when using "file" cache).
	 * compress_data: Compress stored items? (this requires zlib and is only available when using "memcache" or "memcached" cache).
	 * timeout      : Value in seconds which will be used for connecting to the daemon (only required when using "memcache" or "memcached" cache).
	 * servers      : Cache servers (you can use multiple servers and it is only required when using "memcache" or "memcached" cache).
	 * configuration: Configuration to use for caching (only required when using "database" or "redis" cache).
	 * table        : Name of the database table (only required when using "database" cache).
	 */
	'configurations' =>
	[
		'apcu' =>
		[
			'type'   => 'apcu',
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
			'type'   => 'file',
			'prefix' => 'mako',
			'path'   => MAKO_APPLICATION_PATH . '/storage/cache',
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

		'null' =>
		[
			'type' => 'null',
		],

		'redis' =>
		[
			'type'          => 'redis',
			'prefix'        => 'mako',
			'configuration' => 'cache',
		],

		'wincache' =>
		[
			'type'   => 'wincache',
			'prefix' => 'mako',
		],
	],
];
