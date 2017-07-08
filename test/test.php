<?php

//3
$n = 4000;
$a = '1A 2B 2C 2K 2G 5F 40G 100F 3000K 43A';
$ret = explode(' ',$a);
// print_r($ret);

$sets = array();
$total = 0;
foreach ($ret as $value){
	preg_match('/^([0-9]+)([A-Z])$/', $value, $match);
	// print_r($match);
	$seat = ord($match[2])-64;
	if (!isset($sets[$match[1]])){
		$sets[$match[1]] = array();
	}
	array_push($sets[$match[1]], $seat);		

}

foreach ($sets as $key => $value) {
	$length = sizeof($value);
	// echo $length . '<br>';
	sort($sets[$key]);
	// reset($sets[$key]);
	for($i=0; $i<$length+1; $i++){
		if($i == 0){
			//first occupied in row
			$sets[$key]['r'][] = $sets[$key][$i]-1;
		}elseif($i == $length){
			//last occupied in row
			$sets[$key]['r'][] = 11 - $sets[$key][$i-1];
		}else{
			//others
			$sets[$key]['r'][] = $sets[$key][$i] - $sets[$key][$i-1];
		}
	}

	$p = 0;
	foreach($sets[$key]['r'] as $val){
		if($val >= 3){
			$p += ($val-2);
		}
	}
	$sets[$key]['p'] = $p;
	$total += $p;
}
$occupied_rows = sizeof($sets);
$non_occupied_rows = $n - $occupied_rows;
$ret_val = $total + (11-2)*$non_occupied_rows;

// echo $total;
// print_r($sets);
// echo $ret_val;



//2
function find_whole_squares($a, $b){

	$start = ceil(sqrt($a));
	$end = floor(sqrt($b));
	return $end-$start+1;
}
echo find_whole_squares(1,12);




$arr = ('X','X','Y','X');
function find_longest_substr($arr){
	$tmp = array();
	foreach($arr as $val){
		$tmp[] = $val;
	}
}