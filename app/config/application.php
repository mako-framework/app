<?php

//---------------------------------------------
// Application configuration
//---------------------------------------------

return 
[
	/**
	 * Set to true to hide "index.php" from your urls (this requires mod_rewrite).
	 */

	'clean_urls' => true,

	/**
	 * Secret used to provide cryptographic signing, and should be set to a unique, unpredictable value.
	 * You should NOT use the secret included with the framework in a production environment!
	 */
	
	'secret' => ',;wDE)Zj99V.#,o)5i2H7`])+g5If60-',

	/**
	 * Set the default timezone used by various PHP date functions.
	 *
	 * @see http://php.net/manual/en/timezones.php
	 */
	
	'timezone' => 'UTC',

	/**
	 * Default character set used internally in the framework.
	 */

	'charset' => 'UTF-8',

	/**
	 * Default language.
	 * 
	 * Default language pack loaded by the i18n class.
	 */

	'default_language' => 'en_US',

	/**
	 * Languages.
	 * 
	 * If the first segment of the route matches the language 
	 * then the corresponding language pack will be loaded.
	 */

	'languages' => 
	[
		//'no' => 'nb_NO',
		//'fr' => 'fr_FR',
	],
	
	/**
	 * Locale settings.
	 *
	 * locales   : Array of locales to try until success. You can also set the value to "NULL" to use the default locale.
	 * lc_numeric: Set to true to set LC_NUMERIC to the locale you specified.
	 */
	
	'locale' => 
	[
		'locales'    => ['en_US.UTF-8', 'en_US.utf8', 'C'],
		'lc_numeric' => false,
	],

	/**
	 * Enable the debug toolbar?
	 * Note that response cache using ETags might not work as expected when the debug toolbar is enabled.
	 */

	'debug_toolbar' => false, // It is recommended to set this value to false when you are in production.
	
	/**
	 * Error handler settings.
	 *
	 * log_errors    : Set to true if you want to log errors caught by the Mako errors handler.
	 * display_errors: Set to true to display errors caught by the mako error handlers.
	 */
	
	'error_handler' => 
	[
		'log_errors'     => true,
		'display_errors' => true, // It is recommended to set this value to false when you are in production.
	],

	/**
	 * Services to register in the dependecy injection container.
	 */

	'services' => 
	[
		'mako\core\services\ErrorHandlerService',
		'mako\core\services\RequestService',
		'mako\core\services\ResponseService',
		'mako\core\services\SignerService',
		'mako\core\services\RouteService',
		'mako\core\services\URLBuilderService',
		'mako\core\services\LoggerService',
		'mako\core\services\ViewFactoryService',
		'mako\core\services\SessionService',
		'mako\core\services\DatabaseService',
		'mako\core\services\RedisService',
		'mako\core\services\I18nService',
		'mako\core\services\HumanizerService',
		'mako\core\services\CacheService',
		'mako\core\services\CryptoService',
		'mako\core\services\ValidatorFactoryService',
		'mako\core\services\PaginationFactoryService',
		'mako\core\services\GatekeeperService',
	],
];

