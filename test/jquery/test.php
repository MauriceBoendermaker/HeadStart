<?php

$jsonData = file_get_contents("../../templates/vanilla526/vanilla526_config.json");

$tmpArray = array(array("one",array(1,2,3)),array("two",array(4,5,6)),array("three",array(7,8,9)));

$testData = json_decode($jsonData);

//var_dump($testData);

$s=array('a','b','c','d','e','f');
//$s_to_json=json_encode((array)$testData);

//var_dump($testData);

$characters = json_decode($jsonData, 1);


foreach ((array)$jsonData["id"] as $value) {
//	echo $value[0];
	foreach((array)$value["id"] as $key1) {
		echo $key1;
	}
}


?>
