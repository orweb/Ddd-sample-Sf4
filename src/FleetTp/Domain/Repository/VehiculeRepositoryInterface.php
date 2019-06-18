<?php


namespace App\FleetTp\Domain\Repository;


use App\FleetTp\Domain\Entity\Fleet\Fleet;
use App\FleetTp\Domain\Entity\Vehicule\Vehicule;

interface VehiculeRepositoryInterface
{
	/**
	 * @param Vehicule $vehicule
	 * @param Fleet $fleet
	 * @return mixed
	 */
	public function add(Vehicule $vehicule, Fleet $fleet);

	public function get(Vehicule $vehicule);
	/**
	 * @param $licensePlate
	 * @return mixed
	 */
	public function findByLicensePlate($licensePlate);

	/**
	 * @param $long
	 * @param $lat
	 * @param $alt
	 * @return mixed
	 */
	public function findByLocalisation($long,$lat,$alt);

	/**
	 * @param $fleetId
	 * @return mixed
	 */
	public function findbyFleetId($fleetId);

}