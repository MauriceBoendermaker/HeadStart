<?php

//$jsonData = file_get_contents("../../templates/vanilla526/vanilla526_config.json");
//$array1 = json_decode(json_encode((array)$jsonData), true);


$con=mysqli_connect("localhost","root","","headstart");
// Check connection
if (mysqli_connect_errno()){
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$sql="SELECT * FROM vanilla526";
$result=mysqli_query($con,$sql);

$list = array();
while($row=mysqli_fetch_array($result,MYSQLI_ASSOC)){
	$list[] = array (
//		'team' => $row['team'],
		'title' => $row['title'],
//		'filePath' => $row['filePath'],
//		'imagePath' => $row['imagePath'],
//		'desc' => $row['desc']
	);
}

mysqli_free_result($result);
mysqli_close($con);


echo json_encode($list);


?>
