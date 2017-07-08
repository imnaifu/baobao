<?php
namespace core\library;
class baobao_log
{
	public function __construct(){

		$log_con = \core\library\config::load_config('log'); //get log type from config file
		$log_type = $log_con['log_type'];
		$log_class = "\\core\\driver\\log\\$log_type";
		$this->log_class = new $log_class; //init log class

	}

	public function start_daily_log(){	
		$this->log_class->start_daily_log();
	}
}