<?php

$jsonData = file_get_contents("../../templates/vanilla526/vanilla526_config.json");

$tmpArray = array(array("one",array(1,2,3)),array("two",array(4,5,6)),array("three",array(7,8,9)));

$testData = json_decode($jsonData);

include_once '../../config.php';
include_once "../../templates/vanilla526/database/database_vanilla526.php";
$db = new \vanilla526\database_vanilla526($db_host, $db_user, $db_pass, $db_name, $db_port);
$templateDataAll = $db->getVanilla526();

$array1 = json_decode(json_encode((array)$jsonData), true);

//var_dump($testData);

$s=array('a','b','c','d','e','f');
//$s_to_json=json_encode((array)$testData);

//var_dump($testData);

$characters = json_decode($jsonData, 1);


//$i = 0;
//foreach ($array1 as $somekey=>$someval) {
//	echo $array1[$i];
//	$i++;
//}


$someCounted = count($array1);
for($i = 0; $i < $someCounted; $i++){
	echo $array1[$i];
}


foreach ($templateDataAll as $templateData) {

	// dynamically create the html for the page based on the template config file
	$array = array();

	foreach ($templateData as $key => $value) {
		$array[$key] = $value;
	}

}
?>
