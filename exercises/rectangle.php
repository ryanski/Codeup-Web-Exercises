<?php
class Rectangle
{
	protected $height;
	protected $width;

	public function __construct($height, $width)
	{
		$this->setHeight($height);
		$this->setWidth($width);
	}

	public function getArea()
	//could be called area() since it's get area from the set height and width. so it's following the setter and getter theme.
	{
		return $this->height*$this->width;
	
	}

	private function perimeter()
	{
		return ($this->height*2)+($this->width*2);
	}

	private function setHeight($height)

	{
		return $this->height=(is_numeric($height)) ? $height : 0;
			  

	}

	public function setWidth($width)

	{
		return $this->width=(is_numeric($width)) ? $width : 0;
	}


}
