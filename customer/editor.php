<?php

include_once '../config.php';

$templateName = $_GET['template'];

$templatePath = "../templates/" . $templateName;

include_once $templatePath . '/database/database_'. $templateName . '.php';
include_once "../include/head_customer.php";

$db = new \vanilla526\database_vanilla526($db_host, $db_user, $db_pass, $db_name, $db_port);
//$templateGetFunction = "get" . ucfirst($templateName);
$templateDataAll = $db->getVanilla526();

$configFile = $templateName . "_config.json";



$jsonData = file_get_contents("../templates/vanilla526/vanilla526_config.json");

$array1 = json_decode(json_encode((array)$jsonData), true);


$characters = json_decode($jsonData, 1);

//foreach ($characters as $key => $value1) {
//	echo $value1["theme"] . '<br>';
//}


foreach ($templateDataAll as $templateData) {

	// retrieve all data from database and put it in an array
	// and then use the array to create the html
	$array = array();

	foreach ($templateData as $key => $value) {
		$array[$key] = $value;
	}

//	$array["theme"] = $characters[$array["theme"]];

	//var_dump($array);

	// create the html
//	$html = file_get_contents($templatePath . "/" . $templateName . ".html");

	// replace the placeholders with the data
//	$html = str_replace("{%{%}%}", $array["theme"], $html);

	// output the html
//	echo $html;




//	$someCounted = count($array1);
//	for($i = 0; $i < $someCounted; $i++){
//		$teeest = $array1[$i];
//	}

?>
<body>
</body>
<?php
}
?>
</html>