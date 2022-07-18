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

if (isset($_POST['save_footer'])) {
	$db->setVanilla526Footer($_POST["CompanyName"]);
	home();
}

if (isset($_POST['save_carousel'])) {
	$db->setVanilla526Carousel($_POST["CarouselImg1"], $_POST["CarouselText1"], $_POST["CarouselSub1"], $_POST["CarouselImg2"], $_POST["CarouselText2"], $_POST["CarouselSub2"], $_POST["CarouselImg3"], $_POST["CarouselText3"], $_POST["CarouselSub3"], $_POST["CarouselImg4"], $_POST["CarouselText4"], $_POST["CarouselSub4"], $_POST["CarouselImg5"], $_POST["CarouselText5"], $_POST["CarouselSub5"], $_POST["CarouselImg6"], $_POST["CarouselText6"], $_POST["CarouselSub6"], $_POST["CarouselImg7"], $_POST["CarouselText7"], $_POST["CarouselSub7"], $_POST["CarouselImg8"], $_POST["CarouselText8"], $_POST["CarouselSub8"]);
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