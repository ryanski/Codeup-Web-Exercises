 <?php
// Output should include:
// - total number of employees
// - total number of units sold
// - avg units sold per employee
// - Then output should share employee production, ordered from highest to lowest # of units
// * Units   |     Full Name       |   Employee Number
// * 5             Bob Boberson        2

function changeData ($filename){
 $employeeInfoArray = array();
	$handle = fopen($filename, 'r');
	$contents = fread($handle, filesize($filename));
	$contentsString = trim($contents);
	$contentsArray = explode("\n", $contentsString);
	fclose($handle);
	// print_r($contentsArray);
	for ($i=0; $i<6; $i++){
	$firstItems[]=array_shift($contentsArray);
	}
	
	

	foreach($contentsArray as $index => $value){
		$valueArray = explode(', ', $value);
		unset($contentsArray[$index]);
		$contentsArray[$index]['Units'] = $valueArray[3];
		$contentsArray[$index]['Full Name'] = $valueArray[1].' '. $valueArray[2];
		$contentsArray[$index]['Employee Number'] = $valueArray[0];
	}
	// print_r($contentsArray);
	echo 'Total number of employees is '.count($contentsArray).PHP_EOL;

	$stuff=0;
	foreach($contentsArray as $index => $value){
		$stuff=$stuff + $value['Units'];
	}

	echo 'Total number of units sold is '.$stuff.PHP_EOL;

	echo 'Average units sold per employee is '.$stuff/count($contentsArray).PHP_EOL; 

	arsort($contentsArray);
	// var_dump($contentsArray);
	print_r($contentsArray);

	// $unitss=0;
	// foreach($contentsArray as $index => $value){
	// 	$units=$units +$value[]
	// }

	// contentsArray['Columns'] = Units'.'|'.'Full Name'. '|'.'Employee Number';
	// contentsArray['Units'] = 
	echo "====================================================================" . PHP_EOL;
	echo "Units     |Full Name                               |Employee Number" . PHP_EOL;
	echo "====================================================================" . PHP_EOL;

	foreach ($contentsArray as $item) {
	echo spacing(10, $item['Units']). '|'. spacing(40, $item['Full Name']). '|'. spacing(10, $item['Employee Number']).PHP_EOL;
}
}

function spacing ($totalCharacters, $stringValue) {
	$lengthOfString = strlen($stringValue);
	$numberOfSpaces=$totalCharacters - $lengthOfString;
	$stringValueWithSpaces = $stringValue;
	for($i=0; $i<$numberOfSpaces; $i++){
		$stringValueWithSpaces.=" ";
	}
	return $stringValueWithSpaces;
}

//printf function does spacing/formatting quicker than this.
//jonathan used usort function.


changeData('employeeInfo.txt');


