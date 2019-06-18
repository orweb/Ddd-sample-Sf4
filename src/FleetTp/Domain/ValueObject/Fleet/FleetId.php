<?php

namespace App\FleetTp\Domain\ValueObject\Fleet;

use Ramsey\Uuid\Uuid;

class FleetId
{
	/**
	 * @var string
	 */
	private $id;

	/**
	 * FleetId Constructor
	 * @throws \Exception
	 * @return mixed
	 */
	public function __construct()
	{
		$this->id = Uuid::uuid4()->toString();
	}

	public static function generateFleetId(): FleetId
	{
		return new self();
	}

	public function id()
	{
		return $this->id;
	}

	public function __toString(): string
	{
		return $this->id;
	}
}