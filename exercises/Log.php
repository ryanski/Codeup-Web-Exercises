<?php

class Log
{
	public $filename;
	public $handle;


	public function __construct($prefix='log') {
			$date=date('Y-m-d');
			$this->filename =$prefix."-$date.log";
	}
	public function logMessage($logLevel, $message)
	{

		$this->handle = fopen($this->filename, 'a');
		$content=fwrite($this->handle, PHP_EOL . date('h:i:s A'.PHP_EOL)." ".$logLevel." ".$message);
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

	public function __destruct()
	{
		fclose($this->handle);
		echo "echo ECHO ECHO";
	}

	// logInfo("This is an info message.");
	// logError("This is an error message.");
	// }

}