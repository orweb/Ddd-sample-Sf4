<?php

namespace App\FleetTp\Infrastructure\Persistance;

use App\FleetTp\Domain\Entity\Fleet\Fleet;
use App\FleetTp\Domain\Repository\FleetRepositoryInterface;
use App\FleetTp\Domain\ValueObject\Fleet\FleetId;

class FleetRepository implements FleetRepositoryInterface
{

	public function find(FleetId $id)
	{
		if (!$id instanceof FleetId) {
			throw new \InvalidArgumentException(gettype($id));
		}
	}

	public function add(Fleet $fleet)
	{
		// TODO: Implement add() method.
	}

	/**
	 * @param $fleetId
	 * @return Fleet
	 */
	public function fetchById(string $fleetId): Fleet
	{
		// TODO: Implement fetchById() method.
	}

	/**
	 * @param $fleetName
	 * @return void
	 */
	public function findByName($fleetName)
	{
		// TODO: Implement findByName() method.
	}

	/**
	 * @param Fleet $fleet
	 */
	public function save(Fleet $fleet): void
	{
		// TODO: Implement save() method.
	}

	/**
	 * @return mixed
	 */
	public function findAll()
	{
		// TODO: Implement findAll() method.
	}
}