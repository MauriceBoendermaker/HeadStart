<?php

use vanilla526\database_vanilla526;

include_once '../../config.php';
include_once "../../include/head_customer.php";
include_once "database/database_vanilla526.php";

$db = new database_vanilla526($db_host, $db_user, $db_pass, $db_name, $db_port);
$templateDataAll = $db->getVanilla526();

if (isset($_POST['cancel'])) {
	home();
}

if (isset($_POST['save'])) {
	home();
}

function home()
{
	header('Location: ');
	exit();
}

foreach ($templateDataAll as $templateData) {
?>
<?php
}
?>