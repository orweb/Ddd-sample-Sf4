<?php


namespace App\FleetTp\Domain\Entity\Vehicule;

use App\FleetTp\Domain\Entity\Fleet\Fleet;

class Vehicule
{
	/**
	 * @var $licensePlate
	 *
	 */
	private $licensePlate;

	/**
	 * @var string
	 */
	private $description;

	/**
	 * @var float
	 */
	private $lat;

	/**
	 * @var float
	 */
	private $long;

	/**
	 * @var float;
	 */
	private $alt;

	/**
	 * @var array
	 */
	private $fleets;

	/**
	 * @var string
	 */
	private $fleetId;

	/**
	 * Vehicule constructor.
	 * @param string $licensePlate
	 * @param string $description
	 * @param string $lat
	 * @param string $long
	 * @param string $alt
	 * @param string $fleetId
	 */
	public function __construct(string $licensePlate, string $description, string $lat, string $long, string $alt, string $fleetId)
	{
		$this->licensePlate = $licensePlate;
		$this->description = $description;
		$this->lat = $lat;
		$this->long = $long;
		$this->alt = $alt;
		$this->fleetId = $fleetId;
	}

	/**
	 * @return mixed
	 */
	public function licensePlate()
	{
		return $this->licensePlate;
	}

	/**
	 * @return string
	 */
	public function description(): string
	{
		return $this->description;
	}

	/**
	 * @return float
	 */
	public function lat(): float
	{
		return $this->lat;
	}

	/**
	 * @return float
	 */
	public function long(): float
	{
		return $this->long;
	}

	/**
	 * @return float
	 */
	public function alt(): float
	{
		return $this->alt;
	}

	/**
	 * @return array
	 */
	public function fleets(): array
	{
		return $this->fleets;
	}

	/**
	 * @param Fleet $fleet
	 */
	public function addFleet(Fleet $fleet){

		$this->fleets[] = $fleet;
	}
}