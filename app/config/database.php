<?php

//---------------------------------------------
// Database configuration
//---------------------------------------------

return 
[
	/**
	 * Default configuration to use.
	 */
	
	'default' => 'test',
	
	/**
	 * You can define as many database configurations as you want.
	 *
	 * dsn        : PDO data source name
	 * username   : (optional) Username of the database server
	 * password   : (optional) Password of the database server
	 * persistent : (optional) Set to true to make the connection persistent
	 * log_queries: (optional) Enable query logging?
	 * queries    : (optional) Queries that will be executed right after a connection has been made
	 */
	
	'configurations' => 
	[
		'test' => 
		[
			'dsn'         => 'mysql:dbname=test;host=localhost;port=3306',
			'username'    => 'username',
			'password'    => 'password',
			'persistent'  => false,
			'log_queries' => false,
			'queries'     => 
			[
				"SET NAMES UTF8",
			],
		],

		'sqlite' => 
		[
			'dsn'         => 'sqlite:' . MAKO_APPLICATION_PATH . '/storage/database/test.sqlite',
			'log_queries' => false,
			'queries'     => 
			[
				"PRAGMA encoding = 'UTF-8'",
			],
		],	
	],
];

/** -------------------- End of file --------------------**/