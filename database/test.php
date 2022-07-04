<?php

namespace database;

// test
// ID INT
// Naam VARCHAR(50)
// Adres VARCHAR(50)

class Test
{
	private $id;
	private $naam;
	private $adres;

	public function __construct($id, $naam, $adres)
	{
		$this->id = $id;
		$this->naam = $naam;
		$this->adres = $adres;
	}

	public function getID()
	{
		return $this->id;
	}

	public function setID($id)
	{
		$this->id = $id;
	}

	public function getNaam()
	{
		return $this->naam;
	}

	public function setNaam($naam)
	{
		$this->naam = $naam;
	}

	public function getAdres()
	{
		return $this->adres;
	}

	public function setAdres($adres)
	{
		$this->adres = $adres;
	}
}