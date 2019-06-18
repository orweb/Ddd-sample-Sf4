<?php

namespace App\FleetTp\Domain\ValueObject\Vehicule;

use Ramsey\Uuid\Uuid;

class VehiculeId
{
	/**
	 * @var string
	 */
	private $id;

	/**
	 * VehiculeId constructor.
	 * @throws \Exception
	 * @return mixed
	 */
	private function __construct()
	{
		$this->id = Uuid::uuid4()->toString();
	}

	/**
	 * @return VehiculeId
	 * @throws \Exception
	 */
	public static function generate(): VehiculeId
	{
		return new self();
	}

	/**
	 * @param VehiculeId $vehiculeId
	 * @return bool
	 */
	public function equals(VehiculeId $vehiculeId)
	{
		return ($this->id === $vehiculeId->id);
	}

	/**
	 * @return string
	 */
	public function __toString()
	{
		return $this->id;
	}
}