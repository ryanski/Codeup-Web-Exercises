<?php

// Converts array into list n1, n2, ..., and n3
 function humanizedList($array, $sort=false) {
 	 // TODO: Convert the string into an array
 	if($sort)
 		{
 			sort($array);
 		}
   	$popped_a = array_pop($array);

   	// [] means push onto array like array_push($array, $popped_a);
	$array[] = 'and ' . $popped_a;
    // Humanize that list
	$physicistsString=implode(', ', $array);
	return $physicistsString;

 }

$physicistsString = 'Gordon Freeman, Samantha Carter, Sheldon Cooper, Quinn Mallory, Bruce Banner, Tony Stark';

$physicistsArray = explode(', ', $physicistsString);


$famousFakephysicists = humanizedList($physicistsArray, true);

// Output sentence
echo "Some of the most famous fictional theoretical physicists are {$famousFakephysicists}.\n";


