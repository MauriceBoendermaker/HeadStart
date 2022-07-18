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
if (isset($_POST['save_settings'])) {
	$db->setVanilla526PaginaInstellingen($_POST["id"], $_POST['title']);
	home();
}

if (isset($_POST['save_seo'])) {
	$db->setVanilla526Seo($_POST["id"], $_POST["seo_lang"], $_POST["seo_title"], $_POST["seo_author"], $_POST["seo_copy"], $_POST["seo_desc"], $_POST["seo_keywords"], $_POST["seo_url"], $_POST["seo_image"]);
	home();
}

if (isset($_POST['save_nav'])) {
	$db->setVanilla526Nav($_POST["NavItem1"], $_POST["NavItem2"], $_POST["NavItem3"], $_POST["NavItem4"], $_POST["NavItem5"]);
	home();
}

if (isset($_POST['save_header'])) {
	$db->setVanilla526Header($_POST["Headline"], $_POST["StrongSubHeadline"], $_POST["SubHeadline"], $_POST["HeaderCtaBtn"]);
	home();
}

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