<?php

namespace App\FleetTp\Application\CommandHandler\Fleet;

use App\FleetTp\Application\Command\CommandInterface;
use App\FleetTp\Application\CommandHandler\CommandHandlerInterface;
use App\FleetTp\Domain\Entity\Fleet\Fleet;
use App\FleetTp\Domain\Repository\FleetRepositoryInterface;

class CreateFleetCommandHandler implements CommandHandlerInterface
{
	/**
	 * @var
	 */
	private $fleetRepository;

	public function __construct(FleetRepositoryInterface $fleetRepository)
	{
		$this->fleetRepository = $fleetRepository;
	}

	/**
	 * @param $command
	 * @return mixed
	 */
	public function execute(CommandInterface $command): Fleet
	{
		$fleet = new Fleet($command->fleetName());

		$this->fleetRepository->add($fleet);

		return $fleet;
	}


}