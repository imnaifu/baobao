<?php 
namespace core\library;
class route
{	
	public $controller;
	public $action;

	public function __construct(){

		$this->controller = config::load_config('route')['default_controller'];
		$this->action = config::load_config('route')['default_action'];
		$url = $_SERVER['REQUEST_URI'];

		if(isset($url) && $url!='/'){
			$url_array = explode('/', trim($url,'/')); 
			if(isset($url_array[0])){
				$this->controller = $url_array[0];
			}
			if(isset($url_array[1])){
				$this->action = $url_array[1];
			}
		}
	}
}