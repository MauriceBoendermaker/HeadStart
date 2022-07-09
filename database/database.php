<?php

namespace database;

require_once 'test.php';

class Database
{

	private $db;
	private $host;
	private $user;
	private $password;
	private $database;
	private $port;

	public function __construct($host, $user, $password, $database, $port)
	{
		$this->host = $host;
		$this->user = $user;
		$this->password = $password;
		$this->database = $database;
		$this->port = $port;
		$this->connect();
	}

	public function __destruct()
	{
		$this->close();
		$this->db = null;
	}

	public function connect()
	{
		$this->db = new \mysqli($this->host, $this->user, $this->password, $this->database, $this->port);
		if ($this->db->connect_errno) {
			echo "Failed to connect to MySQL: (" . $this->db->connect_errno . ") " . $this->db->connect_error;
		}
	}

	public function close()
	{
		$this->db->close();
	}

	// tests
	// ID INT
	// Naam VARCHAR(50)
	// Adres VARCHAR(50)
	public function getTests()
	{
		$this->connect();
		$result = $this->db->query("SELECT * FROM tests");
		$tests = array();
		while ($row = $result->fetch_assoc()) {
			$tests[] = new Test($row["ID"], $row["Naam"], $row["Adres"]);
		}
		return $tests;
	}

	public function getTestByID($id)
	{
		$this->connect();
		$result = $this->db->query("SELECT * FROM tests WHERE ID = $id");
		$row = $result->fetch_assoc();
		if (is_null($row)) return null;
		return new Test($row["ID"], $row["Naam"], $row["Adres"]);
	}

	public function setTest($id, $naam, $adres)
	{
		$this->connect();

		if (is_null($id)) {
			$result = $this->db->query("INSERT INTO tests (Naam, Adres) VALUES ('$naam', '$adres')");
		} else {
			$result = $this->db->query("UPDATE tests SET Naam = '$naam', Adres = '$adres' WHERE ID = $id");
		}
	}

	public function applyTest($test, $new = false)
	{
		$this->setTest($new ? null : $test->getID(), $test->getNaam(), $test->getAdres());
	}

	public function deleteTest($id)
	{
		$this->connect();
		$result = $this->db->query("DELETE FROM tests WHERE ID = $id");
	}
}