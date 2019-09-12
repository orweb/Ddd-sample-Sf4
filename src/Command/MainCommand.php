<?php


namespace App\Command;


use App\FleetTp\Application\Command\Fleet\CreateFleetCommand;
use App\FleetTp\Application\Command\Vehicule\AddVehiculeCommand;
use App\FleetTp\Application\CommandHandler\CommandHandler;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class MainCommand extends Command
{

// the name of the command (the part after "bin/console")
	protected static $defaultName = 'ddd:main';
	/**
	 * @var iterable
	 */
	private $commandHandlers;

	public function __construct(iterable $commandHandlers, ?string $name = null)
	{
		parent::__construct($name);
		$this->commandHandlers = $commandHandlers;
	}

	protected function configure()
	{
		$commandeHandler = new CommandHandler();

		$createFleet = new CreateFleetCommand('fleet1');
		$commandeHandler->execute($createFleet);
	}

	protected function execute(InputInterface $input, OutputInterface $output)
	{
	    //test1
		var_dump($this->commandHandlers);
	}

}