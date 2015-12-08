<?php
require_once "rectangle.php";

class Square extends Rectangle
{
	public function __construct($height)
	{
		parent::__construct($height, $height);
	
	}
	// i don't need this, since the rectangle.php file has these functions.
	
	public function area()
	{
		return ($this->height*$this->height);
	}
	public function perimeter()
	{
		return ($this->height*2)+($this->height*2);
	}
	


}