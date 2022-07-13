<?php

$db = new database\Database($db_host, $db_user, $db_pass, $db_name, $db_port);
include_once '../config.php';

$templateName = $_GET['template'];

foreach ($characters as $key => $value1) {
	echo $value1["theme"] . '<br>';
}

foreach ($templateDataAll as $templateData) {
?>
<body>
</body>
<?php
}
?>
</html>