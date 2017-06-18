<?php
namespace core\driver\log;

class file
{
	public function __construct(){
		$log_con = \core\library\config::load_config('log');
		$this->log_path = $log_con['options']['log_path'];
	}

	public function start_daily_log(){
		
		if(is_dir($this->log_path)){

		}
		else{
			mkdir($this->log_path, '0777', true);
		}

		$date = date('Y-m-d H:i:s');
		$client_ip = $_SERVER['REMOTE_ADDR'];
		$client_url = $_SERVER['REQUEST_URI'];
		$message = $date . PHP_EOL . $client_ip . PHP_EOL . $client_url . PHP_EOL;

		$file_name = date('Y-m-d') . '.log';

		$fh = fopen($this->log_path . '/'. $file_name, 'a');
 		fwrite($fh, $message);
 		fclose($fh);
	}
	 
}