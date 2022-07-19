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

if (isset($_POST['save_elements'])) {
	$db->setVanilla526PaginaElementen($_POST["P2BoxTitle1"], $_POST["P2BoxText1"], $_POST["P2BoxTitle2"], $_POST["P2BoxText2"], $_POST["P2BoxTitle3"], $_POST["P2BoxText3"], $_POST["P2BoxTitle4"], $_POST["P2BoxText4"], $_POST["TabImg1"], $_POST["TabText1"], $_POST["TabImg2"], $_POST["TabText2"], $_POST["TabImg3"], $_POST["TabText3"], $_POST["TabImg4"], $_POST["TabText4"], $_POST["TabItem1"], $_POST["TabItem2"], $_POST["TabItem3"], $_POST["TabItem4"], $_POST["P2Header"], $_POST["P2HeaderText"], $_POST["P2HeaderListItem1"], $_POST["P2HeaderListItem2"], $_POST["P2HeaderListItem3"], $_POST["P2HeaderListItem4"], $_POST["P2HeaderCtaBtn"]);
	home();
}

if (isset($_POST['save_typo'])) {
	$db->setVanilla526Typo();
	home();
}

if (isset($_POST['save_style'])) {
	$db->setVanilla526Style();
	home();
}


function home()
{
	header('Location: editor.php');
	exit();
}

foreach ($templateDataAll as $templateData) {
?>
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-4">
					<div class="accordion accordion-flush" id="accordionFlushExample">
						<div class="accordion-item">
							<form action="" method="post">
								<input type="hidden" name="id" value="<?php echo $templateData->getID(); ?>">
								<h2 class="accordion-header" id="flush-heading1">
									<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse1" aria-expanded="false" aria-controls="flush-collapse1">
										Pagina instellingen
									</button>
								</h2>
								<div id="flush-collapse1" class="accordion-collapse collapse" aria-labelledby="flush-heading1" data-bs-parent="#accordionFlushExample">
									<div class="accordion-body">
										<div class="mb-3">
											<label for="PaginaTitel" class="form-label">Pagina titel</label>
											<input type="text" class="form-control" id="PaginaTitel" name="title" aria-describedby="PaginaTitelHelp" value="<?php echo $templateData->getTitle(); ?>" placeholder="<?php echo $templateData->getTitle(); ?>">
											<div id="PaginaTitelHelp" class="form-text">Pagina titel</div>
										</div>
										<button type="submit" name="save_settings" class="btn btn-success">Bewaren</button>
										<button type="submit" name="cancel" class="btn btn-primary">Annuleren</button>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
				<div class="col-md-8">col-sm-4</div>
			</div>
		</div>
<?php
}
?>