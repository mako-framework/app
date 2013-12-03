<?php

//---------------------------------------------
// Cache configuration
//---------------------------------------------

return 
[
	/**
	 * Default configuration to use.
	 */
	
	'default' => 'file',
	
	/**
	 * You can define as many cache configurations as you want.
	 *
	 * The supported cache types are: "apc", "database", "file", "memcache", "memcached", "memory", "redis", "wincache", "xcache", "zenddisk" and "zendmemory".
	 *
	 * type         : Cache type you want to use.
	 * identifier   : Cache identifier that should be unique to your application to avoid conflicts.
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
			'type'       => 'apc',
			'identifier' => MAKO_APPLICATION_ID,
		],

		'database' => 
		[
			'type'          => 'database',
			'identifier'    => MAKO_APPLICATION_ID,
			'configuration' => 'test',
			'table'         => 'mako_cache',
		],

		'file' => 
		[
			'type'       => 'file',
			'identifier' => MAKO_APPLICATION_ID,
			'path'       => MAKO_APPLICATION_PATH . '/storage/cache',
		],

		'memcache' => 
		[
			'type'          => 'memcache',
			'identifier'    => MAKO_APPLICATION_ID,
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
			'identifier'    => MAKO_APPLICATION_ID,
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
			'identifier'    => MAKO_APPLICATION_ID,
			'configuration' => 'cache',
		],

		'wincache' => 
		[
			'type'       => 'wincache',
			'identifier' => MAKO_APPLICATION_ID,
		],

		'xcache' => 
		[
			'type'       => 'xcache',
			'identifier' => MAKO_APPLICATION_ID,
			'username'   => 'xcache',
			'password'   => 'xcache',
		],

		'zenddisk' => 
		[
			'type'       => 'zenddisk',
			'identifier' => MAKO_APPLICATION_ID,
		],

		'zendmemory' => 
		[
			'type'       => 'zendmemory',
			'identifier' => MAKO_APPLICATION_ID,
		],
	],
];

/** -------------------- End of file --------------------**/