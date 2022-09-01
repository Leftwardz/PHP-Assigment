<?php 

class DatabaseObject {

	static protected $database;
	static protected $table_name = 'products';
	static protected $table_colums = [];
	
	static public function set_database($connection) {
		static::$database = $connection;
	}

	static public function find_all() {
		$sql = 'SELECT * FROM ' . static::$table_name;
		$result = static::$database->query($sql);
		
		if (!$result) {
			exit('Error to query database');
		}

		$results_array = [];
		while ($results = $result->fetch_assoc()) {
			$results_array[] = static::fill_object($results);
		}

		return $results_array;
	}

	static protected function fill_object($query) {
		$object = new $query['type'];

		foreach ($query as $property => $value){
			if (property_exists($object, $property)) {
				$object->$property = $value;
			}
		}
		return $object;
	}


	public function create() {
		$sql = 'INSERT INTO ' . static::$table_name . '(';
		$sql .= implode(', ', static::$table_colums) . ') ';
		$sql .= "VALUES (" . static::sanitazed_values() . "')";

		// $result = static::$database->query($sql);
		echo $sql;
		echo $this->name;
		
		//return $result;
	}

	static protected function sanitazed_values() {
		$values = [];
		foreach (self::$table_colums as $property) {
			if (property_exists(self, $property)) {
				$values[] = self::$database->escape_string($this->$property);
			}
		return implode("', '", $values);
		}
	}
}

?>