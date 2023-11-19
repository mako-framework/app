<?php

namespace app\console\commands;

use mako\reactor\Command;

/**
 * Greeting command.
 */
class Greeting extends Command
{
	/**
	 * {@inheritDoc}
	 */
	protected string $command = 'greeting';

	/**
	 * {@inheritDoc}
	 */
	protected string $description = 'Greets the user.';

	/**
	 * Prints a greeting.
	 */
	public function execute(): void
	{
		$this->write('<blue>Hello, world!</blue>');
	}
}
