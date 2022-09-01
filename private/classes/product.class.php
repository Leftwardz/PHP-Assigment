<?php 

class Product extends DatabaseObject {

	static protected $table_name = 'products';
	public $id;	
	public $sku;
	public $name;
	public $price;
	public $type;
	
	public function __construct($args=[]) {
		foreach ($args as $property => $value) {
			if (property_exists($this, $property)) {
				$this->$property = $value;
			}
		}
	}

}

?>