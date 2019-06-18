<?php


namespace App\FleetTp\Application\CommandHandler;

use App\FleetTp\Application\Command\CommandInterface;

interface CommandHandlerInterface
{
	/**
	 * @param $command
	 * @return mixed
	 */
	public function execute(CommandInterface $command);
}