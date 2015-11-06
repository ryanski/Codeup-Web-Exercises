<?php
function validate($a, $b) 
{
	if (is_numeric($a) && is_numeric($b)) {
        return true;
    } else {
        return "Error: Both need to be numbers.";
    }

}


function add($a, $b)
{	
	$isValid=validate($a,$b);
	if($isValid === true)
	{	
		return $a + $b;
	} else {
		return $isValid;
	}
   
		
}

function subtract($a, $b)
{
    $isValid=validate($a,$b);
	if($isValid === true)
	{	
		return $a - $b;
	} else {
		return $isValid;
	}
   
}

function multiply($a, $b)
{
	  $isValid=validate($a,$b);
	if($isValid === true)
	{	
		return $a * $b;
	} else {
		return $isValid;
	}
}

function divide($a, $b)
{
      $isValid=validate($a,$b);
    if($b==0){
    	return "Error: We can't divide by zero.";
    }
	if($isValid === true)
	{	
		return $a / $b;
	} else {
		return $isValid;
	}
}

function modulus($a, $b)
{
	$isValid=validate($a,$b);
    if($b==0){
    	return "Error: We can't modulus by zero.";
    }
	if($isValid === true)
	{	
		return $a % $b;
	} else {
		return $isValid;
	}
}

function multbyadd($a, $b)
 {	
	$sum=0;
	for($i=0; $i<$b; $i++){
		$sum=$sum+$a;
		
	 } return $sum;
	
	
// above works. or i=1; i<=b.
 

}
echo add("a",7).PHP_EOL;
echo subtract("a",7).PHP_EOL;
echo multiply("a",7).PHP_EOL;
echo multiply(2,7).PHP_EOL;
echo divide(2,0).PHP_EOL;
echo divide(2,7).PHP_EOL;
echo modulus(2,7).PHP_EOL;
echo multbyadd(2,7).PHP_EOL;

