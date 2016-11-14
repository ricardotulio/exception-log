<?php

namespace PagarMe;

class Logger {

	public static $LOG_PATH = "/tmp/exception.log";
	
	public static function error($message) {
		$file = fopen(self::$LOG_PATH, "a+");
		fwrite($file, "ERRO: {$message}\n");
		fclose($file);
	}

}