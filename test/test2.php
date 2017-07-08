<?php

/*
* - naifu
* recursively retrieve file path
* @param string $dir: path root dir
* @return: array of dir and files
* key->dir_name or file_name
* value = array (dir)
* value = 1 (file) 	
*/
function recursive_get_path($dir){

	$arr = array();
	if (is_dir($dir)){
		$ls = scandir($dir);
	}
	if (isset($ls)){
		foreach ($ls as $val){
			if ($val == '.' || $val == '..'){continue;}
			else{
				$new_dir = $dir.'/'.$val;
				$arr[$val] = recursive_get_path($new_dir);
			}
		}
		return $arr;
	}
	else{return 1;}
}

$dir = 'D:\xunlei';
$r = recursive_get_path($dir);
print_r($r);


/*
*	-naifu
*	return content of file
*	@param string $file
*	@param int $start_line
*	@param int $end_line
*	if $start_line=0, $end_line=5 return the first 5 lines
* 	if $start_line=10, $end_line=0 return the last 10 lines
*/
function read_big_file($file, $start_line, $end_line){
	if (is_file($file)){
		$fh = fopen($file,'r');


	}else{
		throw new Exception("File not exist");
	}
}

// 
$fp = @fopen($file, "r");
$pos = -2;
while (fgetc($fp) != "\n") {
    fseek($fp, $pos, SEEK_END);
    $pos = $pos - 1;
}
$lastline = fgets($fp);


// 
$i = 0;
$now = '';
while ($i >= 0) {
if ($i>10) {
break;
} //by www.jbxue.com
fseek($file_handle, 0, SEEK_CUR);
$now = fgetc($file_handle);//可以自己写个判断false表示文件到头
if ($now == "\r") {
echo '找到断点';
}
echo $now;
$i++;
}
fclose($file_handle);