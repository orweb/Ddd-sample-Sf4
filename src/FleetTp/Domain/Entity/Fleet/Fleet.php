<?php

namespace App\FleetTp\Domain\Entity\Fleet;

use App\FleetTp\Domain\Entity\Vehicule\Vehicule;
use App\FleetTp\Domain\ValueObject\Fleet\FleetId;

class Fleet
{
	/**
	 * @var FleetId
	 */
	private $id;

	/**
	 * @return FleetId
	 */
	public function getId(): FleetId
	{
		return $this->id;
	}

	/**
	 * @var string
	 */
	private $fleetName;

	/**
	 * @var array
	 */
	private $vehicules;

	/**
	 * Fleet constructor.
	 * @param string $fleetName
	 */
	public function __construct(string $fleetName)
	{
		//Attention a ne pas faire dans construct methode ==>create()
		$this->id = $this->id ?: FleetId::generateFleetId();
		$this->fleetName = $fleetName;
	}

	/**
	 * Build new Fleet instance
	 *
	 * @param string $name
	 * @return Fleet
	 */
	public static function build(string $name)
	{
		return new self($name);
	}

	/**
	 * @return array
	 */
	public function vehicules()
	{
		return $this->vehicules();
	}

	/**
	 * @param Vehicule $vehicule
	 */
	public function addVehicule(Vehicule $vehicule)
	{
		$this->vehicules[] = $vehicule;
	}

}