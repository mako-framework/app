<?php

return
[
	/**
	 * ---------------------------------------------------------
	 * Clean URLs
	 * ---------------------------------------------------------
	 *
	 * Set to true to hide "index.php" from your urls.
	 */

	'clean_urls' => true,

	/**
	 * ---------------------------------------------------------
	 * Secret
	 * ---------------------------------------------------------
	 *
	 * The secret is used to provide cryptographic signing, and should be set to a unique, unpredictable value.
	 * You should NOT use the secret included with the framework in a production environment!
	 */

	'secret' => '2fd0af1675adbdfb53804f6ad541d6d1b76638e93cbfeec372f752b3951e09d5',

	/**
	 * ---------------------------------------------------------
	 * Timezone
	 * ---------------------------------------------------------
	 *
	 * Set the default timezone used by various PHP date functions.
	 */

	'timezone' => 'UTC',

	/**
	 * ---------------------------------------------------------
	 * Charset
	 * ---------------------------------------------------------
	 *
	 * Default character set used internally in the framework.
	 */

	'charset' => 'UTF-8',

	/**
	 * ---------------------------------------------------------
	 * Language
	 * ---------------------------------------------------------
	 *
	 * Default application language and locale.
	 */

	'default_language' => ['strings' => 'en_US', 'locale' => [LC_ALL => ['en_US.UTF-8', 'en_US.utf8', 'C'], LC_NUMERIC => 'C']],

	/**
	 * ---------------------------------------------------------
	 * Languages
	 * ---------------------------------------------------------
	 *
	 * If the first segment of the request path matches the language (array key)
	 * then the default language will be set to the mapped language (array value).
	 */

	'languages' =>
	[
		//'no' => ['strings' => 'nb_NO', 'locale' => [LC_ALL => ['nb_NO.UTF-8', 'nb_NO.utf8', 'C'], LC_NUMERIC => 'C']],
		//'fr' => ['strings' => 'fr_FR', 'locale' => [LC_ALL => ['fr_FR.UTF-8', 'fr_FR.utf8', 'C'], LC_NUMERIC => 'C']],
	],

	/**
	 * ---------------------------------------------------------
	 * Language cache
	 * ---------------------------------------------------------
	 *
	 * Enabling language caching can speed up applications with a lot of language files by
	 * reducing the number of files it has to load on every request.
	 *
	 * Use the default cache store by setting the config value to TRUE and choose a specific cache configuration
	 * by specifying its name (as specified in the cache configuration).
	 */

	'language_cache' => false,

	/**
	 * ---------------------------------------------------------
	 * Trusted proxies
	 * ---------------------------------------------------------
	 *
	 * If your application isn't behind a proxy you trust then you can (and should) leave this empty.
	 * If it is behind a proxy then you can help it return the correct client IP (using the X-Forwarded-For header)
	 * by listing your proxy IP address(es) here.
	 */

	'trusted_proxies' =>
	[

	],

	/**
	 * ---------------------------------------------------------
	 * Class aliases
	 * ---------------------------------------------------------
	 *
	 * The key is the alias and the value is the actual class.
	 */

	'class_aliases' =>
	[

	],

	/**
	 * ---------------------------------------------------------
	 * Commands
	 * ---------------------------------------------------------
	 *
	 * This is where you register your reactor commands.
	 * The array key is the command name and the array value
	 * is the command class.
	 */

	'commands' =>
	[
		'greeting' => 'app\console\commands\Greeting',
	],

	/**
	 * ---------------------------------------------------------
	 * Services
	 * ---------------------------------------------------------
	 *
	 * Services to register in the dependecy injection container.
	 * They will be registered in the order that they are defined.
	 *
	 * core: Services that are required for both the web an the command line interface
	 * web : Services that are only required for the web
	 * cli : Services that are only required for the command line interface
	 */

	'services' =>
	[
		'core' =>
		[
			'mako\application\services\RequestService',
			'mako\application\services\ResponseService',
			'mako\application\services\SignerService',
			'mako\application\services\RouteService',
			'mako\application\services\URLBuilderService',
			'mako\application\services\LoggerService',
			'mako\application\services\ViewFactoryService',
			'mako\application\services\SessionService',
			'mako\application\services\DatabaseService',
			'mako\application\services\RedisService',
			'mako\application\services\I18nService',
			'mako\application\services\HumanizerService',
			'mako\application\services\CacheService',
			'mako\application\services\CryptoService',
			'mako\application\services\ValidatorFactoryService',
			'mako\application\services\PaginationFactoryService',
			'mako\application\services\GatekeeperService',
			//'mako\application\services\EventService',
			//'mako\application\services\CommandBusService',
		],
		'web' =>
		[
			'mako\application\services\web\ErrorHandlerService',
		],
		'cli' =>
		[
			'mako\application\services\cli\InputService',
			'mako\application\services\cli\OutputService',
			'mako\application\services\cli\ErrorHandlerService',
		]
	],

	/**
	 * ---------------------------------------------------------
	 * Packages
	 * ---------------------------------------------------------
	 *
	 * Packages to boot during the application boot sequence.
	 * They will be booted in the order that they are defined.
	 *
	 * core: Packages that are required for both the web an the command line interface
	 * web : Packages that are only required for the web
	 * cli : Packages that are only required for the command line interface
	 */

	'packages' =>
	[
		'core' =>
		[

		],
		'web' =>
		[

		],
		'cli' =>
		[

		]
	],

	/**
	 * ---------------------------------------------------------
	 * Error handling
	 * ---------------------------------------------------------
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