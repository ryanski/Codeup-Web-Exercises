<?php

class Log
{
	public $filename='';


	public function logMessage($logLevel, $message)
	{

		$date=date('Y-m-d');
		$this->filename = "$date.log";
		$handle = fopen($this->filename, 'a');
		$content=fwrite($handle, PHP_EOL . date('h:i:s A'.PHP_EOL)." ".$logLevel." ".$message);
			
		fclose($handle);
		return $content.PHP_EOL;
	}

	public function logInfo($message)
	{
		$this->logMessage("[INFO]", $message);
	}

	public function logError($message)
	{
		$this->logMessage("[ERROR]", $message);
	}

	// logInfo("This is an info message.");
	// logError("This is an error message.");
	// }

}