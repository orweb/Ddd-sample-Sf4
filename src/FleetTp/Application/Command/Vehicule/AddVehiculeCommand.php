<?php

namespace App\FleetTp\Application\Command\Vehicule;

use App\FleetTp\Application\Command\CommandInterface;
use App\FleetTp\Application\CommandHandler\Vehicule\AddVehiculeCommandHandler;

class AddVehiculeCommand implements CommandInterface
{
	/**
	 * @var
	 */
	private $licensePlate;

	/**
	 * @var
	 */
	private $description;

	/**
	 * @var
	 */
	private $lat;

	/**
	 * @var
	 */
	private $long;

	/**
	 * @var
	 */
	private $alt;

	/**
	 * @var string
	 */
	private $fleet;

	/**
	 * AddVehiculeCommand constructor.
	 * @param $licensePlate
	 * @param $description
	 * @param $long
	 * @param $lat
	 * @param $alt
	 * @param $fleet
	 */
	public function __construct(string $licensePlate, string $description, string $fleet, string $long, string $lat, string $alt = null)
	{
		$this->licensePlate = $licensePlate;
		$this->description = $description;
		$this->long = $long;
		$this->lat = $lat;
		$this->alt = $alt;
		$this->fleet = $fleet;
	}
//TODO check if fleet in construct
	/**
	 * @return mixed
	 */
	public function licensePlate(): string
	{
		return $this->licensePlate;
	}

	/**
	 * @return mixed
	 */
	public function description(): string
	{
		return $this->description;
	}

	/**
	 * @return mixed
	 */
	public function long(): string
	{
		return $this->long;
	}

	/**
	 * @return mixed
	 */
	public function lat(): string
	{
		return $this->lat;
	}

	/**
	 * @return mixed
	 */
	public function alt(): string
	{
		return $this->alt;
	}

	/**
	 * @return string
	 */
	public function fleet(): string
	{
		return $this->fleet;
	}

////	TODO ==> factory
//	/**
//	 * @param $licensePlate
//	 * @param $description
//	 * @param $long
//	 * @param $lat
//	 * @param null $alt
//	 * @return Vehicule
//	 */
//	public function addVehicule($licensePlate, $description, $long, $lat, $alt = null) {
//		$vehicule = new Vehicule($licensePlate, $description, $long, $lat, $alt);
//		return $vehicule;
//	}

	/**
	 * @return string
	 */
	public function commandHandler(): string
	{
		return AddVehiculeCommandHandler::class;
	}
}