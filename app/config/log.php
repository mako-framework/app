<?php

//---------------------------------------------
// Logging configuration
//---------------------------------------------

return 
[
	/**
	 * Default configuration to use.
	 */

	'default' => 'file',
	
	/**
	 * You can define as many logging configurations as you want.
	 *
	 * The supported log types are: file", "firephp", "syslog" and "toolbar".
	 *
	 * Growl and Prowl logging requires the official Growl and Prowl packages.
	 *
	 * type         : Log type you want to use.
	 * path         : Location where you want to write the logs (only required when using "file" logs).
	 * identifier   : Application identifier (only required when using "syslog" logs).
	 * facility     : Specify what type of program is logging the message (only required when using "syslog" logs).
	 */
	
	'configurations' => 
	[
		'file' => 
		[
			'type'  => 'file',
			'path'  => MAKO_APPLICATION_PATH . '/storage/logs',
		],
		
		'firephp' => 
		[
			'type' => 'firephp',
		],

		'syslog' => 
		[
			'type'       => 'syslog',
			'identifier' => 'Mako Framework',
			'facility'   => LOG_USER,
		],
		
		'toolbar' => 
		[
			'type' => 'toolbar',
		],
	],
];

/** -------------------- End of file --------------------**/