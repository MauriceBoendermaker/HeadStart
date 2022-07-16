<?php

include_once '../../config.php';

//$templateName = $_GET['template'];

//$templatePath = "../../templates/" . $templateName;

//include_once $templatePath . '/database/database_'. $templateName . '.php';
//include_once "../../include/head_customer.php";

//$db = new \vanilla526\database_vanilla526($db_host, $db_user, $db_pass, $db_name, $db_port);
//$templateGetFunction = "get" . ucfirst($templateName);
//$templateDataAll = $db->getVanilla526();

//$array = array('a', 'b', 'c', 'd', 'e', 'f');
//$current_array_val = 'c';
////so I want to run a code to get the next value in the array and
//$next_array_val = 'd';
////And also another code to get the previous value which will be
//$prev_array_val = 'b';
//
//
//$index = array_search($current_array_val, $array);
//if($index !== false && $index > 0 ) $prev = $array[$index-1];
//if($index !== false && $index < count($array)-1) $next = $array[$index+1];
//
//var_dump($next);

//for loop to continue until the end of the array

$array = array('a', 'b', 'c', 'd', 'e', 'f');

foreach ($array as $key => $value) {
//	$current= current($array); // 'a'
//	$nextVal = next($array); // 'b'
	echo $nextVal = next($array) . '<br/>'; // 'c'
}

//foreach ($array as $key => $value) {
//	echo $value . '<br>';
//}