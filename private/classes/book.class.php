<?php 

class Book extends Product {

	public $weigth;

	public function attr(){
		$attribute = "Weigth: {$this->weigth}Kg";
		return $attribute;

	}
}

?>