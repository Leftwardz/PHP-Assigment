<?php 

class Furniture extends Product {

	public $height;
	public $width;
	public $length;

	public function attr(){
		$attribute = "Dimension: {$this->height}x{$this->width}x{$this->length}";
		return $attribute;
	}
}

?>