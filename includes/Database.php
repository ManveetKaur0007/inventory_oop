<?php

/*
 * Database Class
 */

class Database {
	/**
	 * @var PDO
	 */
	public $connection;

	/**
	 * Database constructor.
	 * Creates a connection to the database using
	 * PDO methods and stores it in an instance variable
	 */
	public function __construct() {
		$this->connection = new PDO("mysql:host=" . DB_HOST . ";dbname=" . DB_NAME, DB_USER, DB_PASSWORD);
	}

	/**
	 * Executes the provided SQL statement
	 * @param $sql
	 * @return bool|PDOStatement
	 */
	public function sqlQuery($sql) {
		$dbc = $this->connection;
		$result = $dbc->query($sql);

		return $result;
	}

	/**
	 * Execute the provided SQL statement and retrieves results into array of assoc. arrays
	 * @param $sql
	 * @return array|bool
	 */
	public function fetchArray($sql) {
		$result = $this->sqlQuery($sql);
		$numberOfRows = $result->rowCount();
		if($numberOfRows == 0) {
			return false;
		} else {
			$resultArray = $result->fetchAll(PDO::FETCH_ASSOC);

			return $resultArray;
		}
	}

	/**
	 * Execute the provided SQL statement and retrieve results into assoc. array
	 * @param $sql
	 * @return bool|mixed
	 */
	public function fetchRecord($sql) {
		$result = $this->sqlQuery($sql);
		$numberOfRows = $result->rowCount();
		if($numberOfRows == 0) {
			return false;
		} else {
			$resultRow = $result->fetch(PDO::FETCH_ASSOC);

			return $resultRow;
		}
	}


} //End of Database Class

$dbc = new Database();
?>