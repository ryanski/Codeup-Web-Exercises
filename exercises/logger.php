<?php

function logMessage($logLevel, $message)
{
	

	$date=date('Y-m-d');
	$filename = "$date.log";
	$handle = fopen($filename, 'a');
	$content=fwrite($handle, PHP_EOL . date('h:i:s A'.PHP_EOL)." ".$logLevel." ".$message);
		
	fclose($handle);
	return $content.PHP_EOL;
}

function logInfo($message)
{
	logMessage("[INFO]", $message);
}

function logError($message)
{
	logMessage("[ERROR]", $message);
}

logInfo("This is an info message.");
logError("This is an error message.");