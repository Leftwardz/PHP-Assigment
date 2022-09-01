<?php 

class Dvd extends Product {

	static protected $table_colums = ['sku', 'name', 'price', 'type', 'size'];
	public $size;

	public function attr(){
		$attribute = "Size: {$this->size}";
		return $attribute;
	}
	
}
?>