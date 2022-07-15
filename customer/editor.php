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
?>
<body>
</body>
<?php
}
?>
</html>