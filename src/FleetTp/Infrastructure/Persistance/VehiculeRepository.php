<?php

namespace App\FleetTp\Infrastructure\Persistance;

use App\FleetTp\Domain\Entity\Fleet\Fleet;
use App\FleetTp\Domain\Entity\Vehicule\Vehicule;
use App\FleetTp\Domain\Repository\VehiculeRepositoryInterface;

class VehiculeRepository implements VehiculeRepositoryInterface
{
	/**
	 * @param Vehicule $vehicule
	 * @param Fleet $fleet
	 * @return mixed
	 */
	public function add(Vehicule $vehicule, Fleet $fleet)
	{
		// TODO: Implement add() method.
	}

	public function get(Vehicule $vehicule)
	{
		// TODO: Implement get() method.
	}

	/**
	 * @param $licensePlate
	 * @return mixed
	 */
	public function findByLicensePlate($licensePlate)
	{
		// TODO: Implement findByLicensePlate() method.
	}

	/**
	 * @param $long
	 * @param $lat
	 * @param $alt
	 * @return mixed
	 */
	public function findByLocalisation($long, $lat, $alt)
	{
		// TODO: Implement findByLocalisation() method.
	}

	/**
	 * @param $fleetId
	 * @return mixed
	 */
	public function findbyFleetId($fleetId)
	{
		// TODO: Implement findbyFleetId() method.
	}
}