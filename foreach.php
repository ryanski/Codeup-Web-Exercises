<?php
$things = array('Sgt. Pepper', 
				"11", 
				null, 
				array(1,2,3), 
				3.14, 
				"12 + 7", 
				false, 
				(string) 11);

foreach($things as $thing){
	if(is_integer($thing)) {
		echo 'it is a integer'.PHP_EOL;
	} else if(is_float($thing)){
		echo 'it is a float'.PHP_EOL;
	} else if(is_bool($thing)){
		echo 'it is a boolean'.PHP_EOL;
	} else if(is_array($thing)){
		echo 'it is a array'.PHP_EOL;
	} else if(is_null($thing)){
		echo 'it is a null'.PHP_EOL;
	} else if(is_string($thing)){
		echo 'it is a string'.PHP_EOL;
	}
}
echo ' '.PHP_EOL;
foreach($things as $thing2){
	if(is_scalar($thing2)){
		echo "$thing";
		echo gettype($thing2).PHP_EOL;
	}
}
echo ' '.PHP_EOL;
foreach($things as $thing3){
	if(is_array($thing3)){
		echo "Array (\n";
		foreach($thing3 as $stuff){
			echo " $stuff\n";
		}
	}else {
		echo $thing3 . PHP_EOL;
	}
}
	
	