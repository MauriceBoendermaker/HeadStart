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
<h1>Accordion Test</h1>
<h4><?php echo $templateData->getTitle(); ?></h4>
<p id="UUIDoutput"></p><!-- uuid -->
<p id="LANGoutput"></p><!-- Language -->
<p id="TITLEoutput"></p><!-- Title -->
<div id="answers"></div>

<!-- uuid -->
<script>
    var queryString = "<?php echo $configFile ?>"; // location.search.substring(1);
    var localFile = queryString;

    var obj, dbParam, xmlhttp, myObj, x, txt0 = "";
    dbParam = JSON.stringify(obj);
    xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {

        if (this.readyState == 4 && this.status == 200) {
            myObj = JSON.parse(this.responseText);
            txt0 += "<div style='border: 1px solid pink; background-color: rgba(100, 100, 100, 0.5); height: auto; width: 800px;'>";
            for (x in myObj) {
                txt0 += "<h2>Template ID: " + myObj[x].id + "</h2>";
            }
            txt0 += "</div>";
            document.getElementById("UUIDoutput").innerHTML = txt0;
        }
    };
    xmlhttp.open("GET", localFile, true);
    xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xmlhttp.send("x=" + dbParam);
</script>

<!-- Language -->
<script>
    var queryString = "<?php echo $configFile ?>"; // location.search.substring(1);
    var localFile = queryString;

    var obj, dbParam, xmlhttp, myObj, x, txt1 = "";
    dbParam = JSON.stringify(obj);
    xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {

        if (this.readyState == 4 && this.status == 200) {
            myObj = JSON.parse(this.responseText);
            txt1 += "<div style='border: 1px solid purple; background-color: rgba(100, 100, 100, 0.5); height: auto; width: 800px;'>";
            for (x in myObj) {
                txt1 += "<h2>Template Name: " + myObj[x].theme + "</h2>";
            }
            txt1 += "</div>";
            document.getElementById("LANGoutput").innerHTML = txt1;
        }
    };
    xmlhttp.open("GET", localFile, true);
    xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xmlhttp.send("x=" + dbParam);
</script>

<!-- Title -->
<script>
    var queryString = "<?php echo $configFile ?>"; // location.search.substring(1);
    var localFile = queryString;

    var obj, dbParam, xmlhttp, myObj, x, txt2 = "";
    dbParam = JSON.stringify(obj);
    xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {

        if (this.readyState == 4 && this.status == 200) {
            myObj = JSON.parse(this.responseText);
            txt2 += "<div style='border: 1px solid purple; background-color: rgba(100, 100, 100, 0.5); height: auto; width: 800px;'>";
            for (x in myObj) {
                txt2 += "<h2>Title: " + myObj[x].theme + "</h2>";
            }
            txt2 += "</div>";
            document.getElementById("TITLEoutput").innerHTML = txt2;
        }
    };
    xmlhttp.open("GET", localFile, true);
    xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xmlhttp.send("x=" + dbParam);
</script>
</body>
<?php
}
?>
</html>