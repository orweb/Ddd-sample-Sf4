<?php


namespace App\FleetTp\Application\CommandHandler\Vehicule;


use App\FleetTp\Application\Command\CommandInterface;
use App\FleetTp\Application\CommandHandler\CommandHandlerInterface;
use App\FleetTp\Domain\Entity\Fleet\Fleet;
use App\FleetTp\Domain\Entity\Vehicule\Vehicule;
use App\FleetTp\Domain\Repository\VehiculeRepositoryInterface;

class AddVehiculeCommandHandler implements CommandHandlerInterface
{
	/**
	 * @var VehiculeRepositoryInterface
	 */
	private $vehiculeRepository;

	/**
	 * @var Fleet
	 */
	private $fleetRepository;

	/**
	 * AddVehiculeCommandHandler constructor.
	 * @param VehiculeRepositoryInterface $vehiculeRepository
	 * @param Fleet $fleetRepository
	 */
	public function __construct(VehiculeRepositoryInterface	$vehiculeRepository, Fleet $fleetRepository)
	{
		$this->vehiculeRepository = $vehiculeRepository;
		$this->fleetRepository = $fleetRepository;
	}

	public function execute(CommandInterface $command)
	{
		$vehiculeExist = $this->vehiculeRepository->findByLicensePlate($command->licensePlate());
		$localisationExist = $this->vehiculeRepository->findByLocalisation($command->long(), $command->lat(),$command->alt());

		if(null == $vehiculeExist)
		{
			//TODO
			throw new \Exception();
		}

		if($localisationExist){
			//TODO
			throw new \Exception();
		}

		$fleet = $this->vehiculeRepository->get($command->fleetId());

		$vehicule = new Vehicule(
				$command->licensePlate(),
				$command->description(),
				$command->long(),
				$command->lat(),
				$command->alt(),
				$command->fleetId()
		);

		$this->vehiculeRepository->add($vehicule, $fleet);
		$vehicule->add($vehicule);

		return $vehicule;
	}
}