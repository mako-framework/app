<?php

namespace PHPSTORM_META {

	use mako\application\Application;
    use mako\bus\command\CommandBusInterface;
    use mako\bus\event\EventBusInterface;
    use mako\bus\query\QueryBusInterface;
    use mako\cache\CacheManager;
	use mako\cli\input\Input;
	use mako\cli\output\Output;
	use mako\config\Config;
	use mako\database\ConnectionManager as DatabaseConnectionManager;
	use mako\error\ErrorHandler;
	use mako\file\FileSystem;
	use mako\gatekeeper\authorization\Authorizer;
	use mako\gatekeeper\Gatekeeper;
	use mako\http\Request;
	use mako\http\Response;
	use mako\http\routing\Routes;
	use mako\http\routing\URLBuilder;
	use mako\i18n\I18n;
	use mako\logger\Logger;
	use mako\pagination\PaginationFactoryInterface;
	use mako\redis\ConnectionManager as RedisConnectionManager;
	use mako\security\crypto\CryptoManager;
	use mako\security\Signer;
	use mako\session\Session;
	use mako\syringe\Container;
	use mako\utility\Humanizer;
	use mako\validator\ValidatorFactory;
	use mako\view\ViewFactory;

	override(Container::get(0), map([
		''             => '@',
		'app'          => Application::class,
		'authorizer'   => Authorizer::class,
		'cache'        => CacheManager::class,
		'commandBus'   => CommandBusInterface::class,
		'config'       => Config::class,
		'crypto'       => CryptoManager::class,
		'database'     => DatabaseConnectionManager::class,
		'errorHandler' => ErrorHandler::class,
		'eventBus'     => EventBusInterface::class,
		'fileSystem'   => FileSystem::class,
		'gatekeeper'   => Gatekeeper::class,
		'humanizer'    => Humanizer::class,
		'i18n'         => I18n::class,
		'input'        => Input::class,
		'logger'       => Logger::class,
		'output'       => Output::class,
		'pagination'   => PaginationFactoryInterface::class,
		'queryBus'     => QueryBusInterface::class,
		'redis'        => RedisConnectionManager::class,
		'request'      => Request::class,
		'response'     => Response::class,
		'routes'       => Routes::class,
		'session'      => Session::class,
		'signer'       => Signer::class,
		'urlBuilder'   => URLBuilder::class,
		'validator'    => ValidatorFactory::class,
		'view'         => ViewFactory::class,
	]));

	override(Container::getFresh(0), map([
		''             => '@',
		'app'          => Application::class,
		'authorizer'   => Authorizer::class,
		'cache'        => CacheManager::class,
		'commandBus'   => CommandBusInterface::class,
		'config'       => Config::class,
		'crypto'       => CryptoManager::class,
		'database'     => DatabaseConnectionManager::class,
		'errorHandler' => ErrorHandler::class,
		'eventBus'     => EventBusInterface::class,
		'fileSystem'   => FileSystem::class,
		'gatekeeper'   => Gatekeeper::class,
		'humanizer'    => Humanizer::class,
		'i18n'         => I18n::class,
		'input'        => Input::class,
		'logger'       => Logger::class,
		'output'       => Output::class,
		'pagination'   => PaginationFactoryInterface::class,
		'queryBus'     => QueryBusInterface::class,
		'redis'        => RedisConnectionManager::class,
		'request'      => Request::class,
		'response'     => Response::class,
		'routes'       => Routes::class,
		'session'      => Session::class,
		'signer'       => Signer::class,
		'urlBuilder'   => URLBuilder::class,
		'validator'    => ValidatorFactory::class,
		'view'         => ViewFactory::class,
	]));
}
