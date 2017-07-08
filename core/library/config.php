<?php
namespace core\library;
class config
{
	static public $config = array();
	static public function load_config($file_name){
		//autoload all config files in /config/
		if (isset(self::$config[$file_name])){

		}
		else{
			self::$config[$file_name] = require_once(ROOT . "/config/$file_name.con");
		}
		return self::$config[$file_name];
	}
}