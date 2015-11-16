<?php

$names = ['Tina', 'Dana', 'Mike', 'Amy', 'Adam'];

$compare = ['Tina', 'Dean', 'Mel', 'Amy', 'Michael'];

// function search_a($person, $names){
// 	$result=array_search($person, $names);
// 	var_dump($result);
// if($result===false){
// 	echo "false\n";
// 	} else {
// 		echo "true\n";
// 	}

// }


function isInarray ($person, $array)
{
	if(array_search($person, $array)!==false){
		return true;
	} return false;
}

$result=isInarray('Tinas', $names);
var_dump($result);

$result=isInarray('Tina', $names);
var_dump($result);

$result=isInarray('Bob', $names);
var_dump($result);


$i=0;
foreach($names as $name){
	foreach($compare as $each){
		if($name===$each){
			$i++;
		}
	} 
	 
} 
echo $i.PHP_EOL;
	

