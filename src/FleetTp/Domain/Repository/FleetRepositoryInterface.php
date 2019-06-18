<?php


namespace App\FleetTp\Domain\Repository;


use App\FleetTp\Domain\Entity\Fleet\Fleet;
use App\FleetTp\Domain\ValueObject\Fleet\FleetId;

interface FleetRepositoryInterface
{
	/**
	 * @param FleetId $id
	 * @return mixed
	 */
	public function find(FleetId $id);

	/**
	 * @param Fleet $fleet
	 * @return mixed
	 */
	public function add(Fleet $fleet);

	/**
	 * @param $fleetId
	 * @return Fleet
	 */
	public function fetchById(string $fleetId): Fleet;

	/**
	 * @param $fleetName
	 * @return Fleet
	 */
	public function findByName($fleetName);

	/**
	 * @param Fleet $fleet
	 */
	public function save(Fleet $fleet): void;

	/**
	 * @return mixed
	 */
	public function findAll();
}