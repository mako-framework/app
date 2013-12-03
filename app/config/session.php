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
	 * The supported session types are: "Database", "File", "Native" and "Redis".
	 *
	 * type         : Session type you want to use (case-sensitive).
	 * configuration: Database or redis configuration to use for sessions (only required when using "Database" or "Redis" sessions).
	 * path         : Save path for session files (only required when using "File" sessions).
	 * table        : Name of the database table (only required when using "Database" sessions).
	 */
	
	'configurations' => 
	[
		'database' => 
		[
			'type'          => 'Database',
			'configuration' => 'test',
			'table'         => 'mako_sessions',
		],

		'file' => 
		[
			'type' => 'File',
			'path' => MAKO_APPLICATION_PATH . '/storage/sessions',
		],

		'native' => 
		[
			'type' => 'Native',
		],

		'redis' => 
		[
			'type'          => 'Redis',
			'configuration' => 'session',
		],
	],
];

/** -------------------- End of file --------------------**/