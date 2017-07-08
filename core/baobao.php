<?php

namespace core;
class baobao
{	
	/**
	* for each controller as $class, db_name, class_name and file name must be the same;
	*
	*
	**/

	//register class in avoid of repeating load
	static public $registered_class = array();
	// static public $registered_config = array();

	static public function run(){
		self::set_reporting();
		self::remove_magicquotes();
		self::unregister_globals();

		$log = new library\log();
		$log->start_daily_log();

		$route = new library\route();
		$controller = $route->controller;
		$action = $route->action;

		$controller_file = ROOT . "/app/controller/$controller.php";
		$controller_class = "\\app\\controller\\$controller";

		if (is_file($controller_file)){
			// $db = new \core\library\model($controller);//database
			require_once($controller_file);
			$controller_obj = new $controller_class();//class
			$controller_obj->$action();//action
		}
		else{
			throw new \Exception("Class file not found - $controller");
		}
	}

	static public function load($class){
		//auto load func
		if (isset($registered_class[$class])){
			return true;
		}
		else{
			//find file accordingly
			$file = str_replace('/', '\\', $class);
			$file = ROOT .'\\' .$file . '.php';
	        if (file_exists($file)) {
				require_once($file);
				self::$registered_class[$class] = 1;
			}
			else {
				return false;
	        }
		}
	}

	static protected function set_reporting() {
		if (DEBUG == true) {
		    error_reporting(E_ALL);
		    ini_set('display_errors','On');
		} else {
		    error_reporting(E_ALL);
		    ini_set('display_errors','Off');
		    ini_set('log_errors', 'On');
		    ini_set('error_log', ROOT.'/log/error/error.log');
		}
	}

	/* Remove magic quotes*/
	static protected function strip_slashes($value) {
	    $value = is_array($value) ? array_map('strip_slashes', $value) : stripslashes($value);
	    return $value;
	}

	static protected function remove_magicquotes() {
		if (get_magic_quotes_gpc()) {
		    $_GET = isset($_GET) ? $this->strip_slashes($_GET) : '';
		    $_POST = isset($_POST) ? $this->strip_slashes($_POST) : '';
		    $_COOKIE = isset($_COOKIE) ? $this->strip_slashes($_COOKIE) : '';
		    $_SESSION = isset($_SESSION) ? $this->strip_slashes($_SESSION) : '';
		}
	}

    // 检测自定义全局变量并移除。因为 register_globals 已经弃用，如果
    // 已经弃用的 register_globals 指令被设置为 on，那么局部变量也将
    // 在脚本的全局作用域中可用。 例如， $_POST['foo'] 也将以 $foo 的
    // 形式存在，这样写是不好的实现，会影响代码中的其他变量。 相关信息，
    // 参考: http://php.net/manual/zh/faq.using.php#faq.register-globals
    static protected function unregister_globals()
    {
        if (ini_get('register_globals')) {
            $array = array('_SESSION', '_POST', '_GET', '_COOKIE', '_REQUEST', '_SERVER', '_ENV', '_FILES');
            foreach ($array as $value) {
                foreach ($GLOBALS[$value] as $key => $var) {
                    if ($var === $GLOBALS[$key]) {
                        unset($GLOBALS[$key]);
                    }
                }
            }
        }
    }



}//end class
