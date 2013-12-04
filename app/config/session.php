<?php

//---------------------------------------------
// Session configuration
//---------------------------------------------

return 
[
	/**
	 * Default configuration to use.
	 */
	
	'default' => 'native',

	/**
	 * Session name. 
	 * 
	 * Using a unique session name will prevent session collisions with other applications.
	 * Note that only alphanumeric characters can be used in the session name.
	 */

	'session_name' => 'mako_session',
	
	/**
	 * You can define as many session configurations as you want.
	 *
	 * The supported session types are: "database", "file", "native" and "redis".
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

		'native' => 
		[
			'type' => 'native',
		],

		'redis' => 
		[
			'type'          => 'redis',
			'configuration' => 'session',
		],
	],
];

/** -------------------- End of file --------------------**/