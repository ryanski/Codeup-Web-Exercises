<?php

require_once 'square.php';

$rectangle = new Rectangle(4, 5);
echo 'The area is: '.$rectangle->getArea().PHP_EOL;

$square = new Square(4);
echo 'The area is: '.$square->getArea().PHP_EOL;
echo 'The perimeter is: '.$square->perimeter().PHP_EOL;