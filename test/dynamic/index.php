<!DOCTYPE html>
<html>
<head>
	<style>
        table {
            width: 100%;
            border-collapse: collapse;
        }

        table, td, th {
            border: 1px solid black;
            padding: 5px;
        }

        th {text-align: left;}
	</style>
</head>
<body>

<?php
$theme = intval($_GET['theme']);

$con = mysqli_connect("localhost","root","","headstart");
if (!$con) {
	die('Could not connect: ' . mysqli_error($con));
}

mysqli_select_db($con,"headstart");
$sql="SELECT * FROM vanilla526 WHERE id = '".$theme."'";
$result = mysqli_query($con,$sql);

echo "<table>
<tr>
<th>Firstname</th>
<th>Lastname</th>
<th>Age</th>
</tr>";
while($row = mysqli_fetch_array($result)) {
	echo "<tr>";
	echo "<td>" . $row['title'] . "</td>";
	echo "<td>" . $row['seo_copy'] . "</td>";
	echo "<td>" . $row['seo_lang'] . "</td>";
	echo "</tr>";
}
echo "</table>";
mysqli_close($con);
?>
</body>
</html>