<?php
//list of useful functions

//print
function pre($value, $name='DEBUG'){
	if(is_bool($value)){
		var_dump($value);
		echo $name;
	}
	elseif(is_null($value)){
		var_dump(NULL);
		echo $name;
	}
	else{
		echo "<pre style='position:relative;z-index:1000;padding:10px;border-radius:5px;backgroud:#F5F5F5;border:1px solid #aaa;
		font-size:14px;line-height:18px;opacity:0.9;'>" .print_r($name,true).' - '.print_r($value,true)."</pre>";
	}
}

// call template using twig
function call_view($file){
	global $twig_data;

	$file_path = ROOT."/app/view/$file";
	if(!is_file($file_path)){
		throw new Exception("view file can not find - $file_path");
	}
	else{
		// require_once($file_path);
		$loader = new \Twig_Loader_Filesystem(ROOT . '/app/view');
		$twig = new \Twig_Environment($loader, array( 
   	 		'cache' => ROOT . '/tmp/view_cache',
   	 		'debug' => DEBUG
		));
		$template = $twig->load($file);
		$template->display($twig_data);
	}
}

//set template data to twig
function set_data($name, $data){
	global $twig_data;
	$twig_data = array();
	$twig_data[$name] = $data;	
}