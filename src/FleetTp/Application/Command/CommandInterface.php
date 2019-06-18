<?php


namespace App\FleetTp\Application\Command;


interface CommandInterface
{
	/**
	 * @return string
	 */
	public function commandHandler(): string;

}