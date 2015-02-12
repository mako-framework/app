<?php

namespace app\console\commands;

use mako\reactor\Command;

/**
 * Greeting command.
 */

class Greeting extends Command
{
	/**
	 * Command information.
	 *
	 * @var array
	 */

	protected $commandInformation =
	[
		'description' => 'Greets the user.'
	];

	/**
	 * Prints a greeting.
	 *
	 * @access  public
	 */

	public function execute()
	{
		$this->write('<blue>Hello, world!</blue>');
	}
}