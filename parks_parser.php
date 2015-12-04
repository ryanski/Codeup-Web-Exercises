<?php


function parseParks($filename)
{

	$handle = fopen($filename, 'r');
	$contents = fread($handle, filesize($filename));
	$contents = trim($contents);
	fclose($handle);
// splitting string into an array of lines.
	
	$contents_lines = explode(PHP_EOL, $contents);
	array_shift($contents_lines);
	

	// print_r($contents_lines);
	
	$parksArray = [];
	foreach($contents_lines as $value){
		$infoArray = explode('","', $value);
		// $infoArray[0] = substr_replace($info_array[0], '', 0,1), start)
		// $infoArray[6] = substr_replace($info_array[6], replacement, start) 
		//next line is saying you are pushing info(associative array) into newArray.  
		$parksArray[]=[
			'name' => htmlspecialchars(substr($infoArray[0],1)),
			'location' => $infoArray[2],
			'date_established' => $infoArray[3],
			'area' => $infoArray[4],
			'recreation_visitors' => $infoArray[5],
			'description' => substr($infoArray[6],0,-1)
			];
	}

	// array literal notation is this [].



    // todo - read file and parse contacts

    return $parksArray;
}

$parksArray = parseParks('parks.csv');

// var_dump(parseParks('parks.csv'));
