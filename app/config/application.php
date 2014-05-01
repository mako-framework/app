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
	 * Default language pack loaded by the i18n class.
	 */

	'default_language' => 'en_US',

	/**
	 * If the first segment of the request path matches the language (array key) 
	 * then the default language will be set to the mapped language (array value).
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
	 * If your application isn't behind a proxy you trust then you can (and should) leave this empty.
	 * If it is behind a proxy then you can help it return the correct client IP (using the X-Forwarded-For header) 
	 * by listing you proxy IP address(es) here.
	 */

	'trusted_proxies' => 
	[
		
	],

	/**
	 * Class aliases. 
	 * 
	 * The key is the alias and the value is the actual class.
	 */

	'class_aliases' => 
	[
		
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
];