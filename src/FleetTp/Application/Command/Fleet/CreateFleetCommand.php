<?php

namespace App\FleetTp\Application\Command\Fleet;

use App\FleetTp\Application\Command\CommandInterface;
use App\FleetTp\Application\CommandHandler\Fleet\CreateFleetCommandHandler;

class CreateFleetCommand implements CommandInterface
{
	/**
	 * @var string
	 */
	private $fleetName;

	/**
	 * CreateFleetCommand constructor.
	 * @param string $fleetName
	 */
	public function __construct(string $fleetName)
	{
		$this->fleetName = $fleetName;
	}

	/**
	 * @return string
	 */
	public function fleetName(): string
	{
		return $this->fleetName;
	}

	/**
	 * @return string
	 */
	public function commandHandler(): string
	{
		return CreateFleetCommandHandler::class;
	}

}