<?php

class MyLogger
{
	private function logWithTime()
	{
		echo "[" . date('Y-m-d H:i:s') . "] ";
	}
	
	private function log($message, $level)
	{
		echo strtoupper($level) . ": " . $message . PHP_EOL;
	}
	
	public function warning($message)
	{
		$this -> logWithTime();
		$this -> log($message, "warning");
	}
	
	public function error($message)
	{
		$this -> logWithTime();
		$this -> log($message, "error");
	}
	
	public function info($message)
	{
		$this -> log($message, "info");
	}
	
	public function debug($message)
	{
		$this -> log($message, "debug");
	}
}

$logs = new MyLogger();
$logs -> warning("Dit is een warning");
$logs -> error("Dit is een error");
$logs -> info("Dit is wat info");
$logs -> debug("Dit is een debug message");

?>