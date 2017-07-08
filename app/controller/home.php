<?php
namespace app\controller;
class home
{
	function __construct(){
		// $db = new \app\model\model('home');//connect to database 'home' 
	}

	/* default function 'main'*/
	public function main(){
		$data = array();
		$data['value'] = 'Baobao'; 
		set_data('data', $data); //set data
		call_view('home/main.html'); //call template
	}
}