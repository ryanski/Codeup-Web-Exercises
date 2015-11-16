<?php

$names = ['Tina', 'Dana', 'Mike', 'Amy', 'Adam'];

$compare = ['Tina', 'Dean', 'Mel', 'Amy', 'Michael'];

// function isInarray ($person, $array)
// {
// 	if(array_search($person, $array)!==false){
// 		return true;
// 	} return false;
// }

// $result=isInarray('Tinas', $names);
// var_dump($result);

// $result=isInarray('Tina', $names);
// var_dump($result);

// $result=isInarray('Bob', $names);
// var_dump($result);


// $i=0;
// foreach($names as $name){
// 	foreach($compare as $each){
// 		if($name===$each){
// 			$i++;
// 		}
// 	} 
	 
// } 
// echo $i.PHP_EOL;

// print_r($names);

// array_push($names, 'Masha', 'Jessie', 'Cristina');

// print_r($names);

// array_pop($names);

// print_r($names);

// array_shift($names);

// print_r($names);

// array_unshift($names, 'Thalia', 'Chris', 'Randie');

// print_r($names);

print_r($names);

print_r($compare);



function combine_arrays($array1, $array2)
{
	$new_array= [];
foreach($array1 as $index => $name){
		if(array_search($name, $array2) !==false)
		{
			array_push($new_array, $name);
			
		}
		// else array_push($new_array, $name, $array2);
	
	} 
return $new_array;

}

print_r(combine_arrays($names, $compare));
	 

	
 // Array
 // (
 //     [0] => Tina
 //     [1] => Dana
 //     [2] => Dean
 //     [3] => Mike
 //     [4] => Mel
 //     [5] => Amy
 //     [6] => Adam
 //     [7] => Michael
 // )