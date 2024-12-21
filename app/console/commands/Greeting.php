<?php

namespace app\console\commands;

use mako\reactor\attributes\CommandDescription;
use mako\reactor\attributes\CommandName;
use mako\reactor\Command;

/**
 * Greeting command.
 */
#[CommandName('greeting')]
#[CommandDescription('Greets the user.')]
class Greeting extends Command
{
	/**
	 * Prints a greeting.
	 */
	public function execute(): void
	{
		$this->write('<blue>Hello, world!</blue>');
	}
}
