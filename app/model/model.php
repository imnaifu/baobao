<?php
namespace app\model;

class model extendS \PDO
{
	public function __construct($db_name){

		$dsn = \core\library\config::load_config('database')['dsn'] . ";dbname=$db_name";
		$user_name = \core\library\config::load_config('database')['user_name'];
		$password = \core\library\config::load_config('database')['password'];

		try{
			parent::__construct($dsn, $user_name, $password);
		}catch(\PDOException $e){
			pre($e->getMessage());
		}

	}

}