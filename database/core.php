<?php

namespace database;

include_once '../../config.php';
include_once '../../database/database.php';

$db = new Database($db_host, $db_user, $db_pass, $db_name, $db_port);
$templateData = $db->getTests();

?>