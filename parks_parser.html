<?php
function formatNumber($newNumber) {
	return substr($newNumber, 0, 3).'-'.substr($newNumber, 3, 3).'-'.substr($newNumber, 6);
}

function parseContacts($filename)
{
    $contacts = array();
	$handle = fopen($filename, 'r');
	$contents = fread($handle, filesize($filename));
	$contactsString = trim($contents);
	$contactsArray = explode("\n", $contactsString);
	$newArray=[];
	fclose($handle);

	foreach($contactsArray as $value){
		$personInfoArray = explode("|", $value);
		$personInfoArray[1]=formatNumber($personInfoArray[1]);
		//next line is saying you are pushing info(associative array) into newArray.  
		$newArray[]=[
			'name' => $personInfoArray[0],
			'number' => $personInfoArray[1]
			];
	}

	// array literal notation is this [].



    // todo - read file and parse contacts

    return $newArray;
}



var_dump(parseContacts('contacts.txt'));
