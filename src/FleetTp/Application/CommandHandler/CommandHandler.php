<?php


namespace App\FleetTp\Application\CommandHandler;

use App\FleetTp\Application\Command\CommandInterface;

class CommandHandler implements CommandHandlerInterface
{
	/**
	 * @param CommandInterface $command
	 * @return mixed
	 */
	public function execute(CommandInterface $command)
	{
		$classeName = $command->commandHandler();
		$commandHandler = new $classeName;

		//todo tag => define service passer par le container
		return $commandHandler->execute($command);
	}
}