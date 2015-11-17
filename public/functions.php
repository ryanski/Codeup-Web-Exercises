<!-- inputHas($key): returns true or false based on whether the key is available.
inputGet($key): returns the value specified by the key, or null if the key is not set.
escape($input): returns the input as a safely escaped string. -->


<?php 
function inputHas($key)
{ 
	if(isset($_REQUEST[$key])) {

		return true;
	} else {
		return false;
	}
}

function inputGet($key)
{
	if (inputHas($key)) {
		return ($_REQUEST[$key]);
	}
	return null;
}

function escape($input)
{
	return htmlspecialchars(strip_tags($input));
}





?>