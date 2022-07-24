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
	$db->setVanilla526Nav($_POST["id"], $_POST["NavItem1"], $_POST["NavItem2"], $_POST["NavItem3"], $_POST["NavItem4"], $_POST["NavItem5"]);
	home();
}

if (isset($_POST['save_header'])) {
	$db->setVanilla526Header($_POST["id"], $_POST["Headline"], $_POST["StrongSubHeadline"], $_POST["SubHeadline"], $_POST["HeaderCtaBtn"]);
	home();
}

if (isset($_POST['save_footer'])) {
	$db->setVanilla526Footer($_POST["id"], $_POST["CompanyName"]);
	home();
}

if (isset($_POST['save_carousel'])) {
	$db->setVanilla526Carousel($_POST["id"], $_POST["CarouselImg1"], $_POST["CarouselText1"], $_POST["CarouselSub1"], $_POST["CarouselImg2"], $_POST["CarouselText2"], $_POST["CarouselSub2"], $_POST["CarouselImg3"], $_POST["CarouselText3"], $_POST["CarouselSub3"], $_POST["CarouselImg4"], $_POST["CarouselText4"], $_POST["CarouselSub4"], $_POST["CarouselImg5"], $_POST["CarouselText5"], $_POST["CarouselSub5"], $_POST["CarouselImg6"], $_POST["CarouselText6"], $_POST["CarouselSub6"], $_POST["CarouselImg7"], $_POST["CarouselText7"], $_POST["CarouselSub7"], $_POST["CarouselImg8"], $_POST["CarouselText8"], $_POST["CarouselSub8"]);
	home();
}

if (isset($_POST['save_elements'])) {
	$db->setVanilla526PaginaElementen($_POST["id"], $_POST["P2BoxTitle1"], $_POST["P2BoxText1"], $_POST["P2BoxTitle2"], $_POST["P2BoxText2"], $_POST["P2BoxTitle3"], $_POST["P2BoxText3"], $_POST["P2BoxTitle4"], $_POST["P2BoxText4"], $_POST["TabImg1"], $_POST["TabText1"], $_POST["TabImg2"], $_POST["TabText2"], $_POST["TabImg3"], $_POST["TabText3"], $_POST["TabImg4"], $_POST["TabText4"], $_POST["TabItem1"], $_POST["TabItem2"], $_POST["TabItem3"], $_POST["TabItem4"], $_POST["P2Header"], $_POST["P2HeaderText"], $_POST["P2HeaderListItem1"], $_POST["P2HeaderListItem2"], $_POST["P2HeaderListItem3"], $_POST["P2HeaderListItem4"], $_POST["P2HeaderCtaBtn"]);
	home();
}

if (isset($_POST['save_typo'])) {
	$db->setVanilla526Typo($_POST["id"]);
	home();
}

if (isset($_POST['save_style'])) {
	$db->setVanilla526Style($_POST["id"]);
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
						<div class="accordion-item">
							<form action="" method="post">
								<input type="hidden" name="id" value="<?php echo $templateData->getID(); ?>">
								<h2 class="accordion-header" id="flush-heading2">
									<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse2" aria-expanded="false" aria-controls="flush-collapse2">
										SEO
									</button>
								</h2>
								<div id="flush-collapse2" class="accordion-collapse collapse" aria-labelledby="flush-heading2" data-bs-parent="#accordionFlushExample">
									<div class="accordion-body">
										<div class="mb-3">
											<label for="SeoTaal" class="form-label">Taal</label>
											<select class="form-select" aria-label="Default select example" disabled>
												<option value="<?php $templateData->getSeoLang(); ?>" selected><?php if ($templateData->getSeoLang() === "en") { echo "English"; } ?></option>
												<option value="nl">Nederlands</option>
											</select>
											<input type="hidden" name="seo_lang" value="<?php echo $templateData->getSeoLang(); ?>">
											<div id="SeoTaalHelp" class="form-text">*Ondersteuning voor meer talen worden op een later moment toegevoegd.</div>
										</div>
										<div class="mb-3">
											<label for="SeoTitel" class="form-label">Titel</label>
											<input type="text" class="form-control" id="SeoTitel" name="seo_title" aria-describedby="SeoTitelHelp" value="<?php echo $templateData->getSeoTitle(); ?>" placeholder="<?php echo $templateData->getSeoTitle(); ?>">
											<div id="SeoTitelHelp" class="form-text">SEO titel</div>
										</div>
										<div class="mb-3">
											<label for="SeoAuteur" class="form-label">Auteur</label>
											<input type="text" class="form-control" id="SeoAuteur" name="seo_author" aria-describedby="SeoAuteurHelp" value="<?php echo $templateData->getSeoAuthor(); ?>" placeholder="<?php echo $templateData->getSeoAuthor(); ?>">
											<div id="SeoAuteurHelp" class="form-text">Auteur van de website</div>
										</div>
										<div class="mb-3">
											<label for="SeoCopy" class="form-label">Copyright</label>
											<input type="text" class="form-control" id="SeoCopy" name="seo_copy" aria-describedby="SeoCopyHelp" value="<?php echo $templateData->getSeoCopy(); ?>" placeholder="<?php echo $templateData->getSeoCopy(); ?>">
											<div id="SeoCopyHelp" class="form-text">SEO copyright</div>
										</div>
										<div class="mb-3">
											<label for="SeoDesc" class="form-label">Beschrijving</label>
											<input type="text" class="form-control" id="SeoDesc" name="seo_desc" aria-describedby="SeoDescHelp" value="<?php echo $templateData->getSeoDesc(); ?>" placeholder="<?php echo $templateData->getSeoDesc(); ?>">
											<div id="SeoDescHelp" class="form-text">SEO website beschrijving</div>
										</div>
										<div class="mb-3">
											<label for="SeoKeywords" class="form-label">Keywords</label>
											<input type="text" class="form-control" id="SeoKeywords" name="seo_keywords" aria-describedby="SeoKeywordsHelp" value="<?php echo $templateData->getSeoKeywords(); ?>" placeholder="<?php echo $templateData->getSeoKeywords(); ?>">
											<div id="SeoKeywordsHelp" class="form-text">*Scheid woorden met komma's</div>
										</div>
										<div class="mb-3">
											<label for="SeoUrl" class="form-label">URL</label>
											<input type="text" class="form-control" id="SeoUrl" name="seo_url" aria-describedby="SeoUrlHelp" value="<?php echo $templateData->getSeoUrl(); ?>" placeholder="<?php echo $templateData->getSeoUrl(); ?>">
											<div id="SeoUrlHelp" class="form-text">Website URL</div>
										</div>
										<div class="mb-3">
											<label for="SeoImage" class="form-label">Afbeelding</label>
											<input type="file" class="form-control" id="inputGroupFile02" name="seo_image">
											<div id="SeoUrlHelp" class="form-text">SEO afbeelding</div>
										</div>
										<button type="submit" name="save_seo" class="btn btn-success">Bewaren</button>
										<button type="submit" name="cancel" class="btn btn-primary">Annuleren</button>
									</div>
								</div>
							</form>
						</div>
						<div class="accordion-item">
							<form action="" method="post">
								<input type="hidden" name="id" value="<?php echo $templateData->getID(); ?>">
								<h2 class="accordion-header" id="flush-heading3">
									<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse3" aria-expanded="false" aria-controls="flush-collapse3">
										Navigatie
									</button>
								</h2>
								<div id="flush-collapse3" class="accordion-collapse collapse" aria-labelledby="flush-heading3" data-bs-parent="#accordionFlushExample">
									<div class="accordion-body">
										<div class="mb-3">
											<label for="NavItem1" class="form-label">Pagina 1</label>
											<input type="text" class="form-control" id="NavItem1" name="NavItem1" aria-describedby="NavItem1Help" value="<?php echo $templateData->getNavItem1(); ?>" placeholder="<?php echo $templateData->getNavItem1(); ?>">
											<div id="NavItem1Help" class="form-text">Pagina titel 1</div>
										</div>
										<div class="mb-3">
											<label for="NavItem2" class="form-label">Pagina 2</label>
											<input type="text" class="form-control" id="NavItem2" name="NavItem2" aria-describedby="NavItem2Help" value="<?php echo $templateData->getNavItem2(); ?>" placeholder="<?php echo $templateData->getNavItem2(); ?>">
											<div id="NavItem2Help" class="form-text">Pagina titel 2</div>
										</div>
										<div class="mb-3">
											<label for="NavItem3" class="form-label">Pagina 3</label>
											<input type="text" class="form-control" id="NavItem3" name="NavItem3" aria-describedby="NavItem3Help" value="<?php echo $templateData->getNavItem3(); ?>" placeholder="<?php echo $templateData->getNavItem3(); ?>">
											<div id="NavItem3Help" class="form-text">Pagina titel 3</div>
										</div>
										<div class="mb-3">
											<label for="NavItem4" class="form-label">Pagina 4</label>
											<input type="text" class="form-control" id="NavItem4" name="NavItem4" aria-describedby="NavItem4Help" value="<?php echo $templateData->getNavItem4(); ?>" placeholder="<?php echo $templateData->getNavItem4(); ?>">
											<div id="NavItem4Help" class="form-text">Pagina titel 4</div>
										</div>
										<div class="mb-3">
											<label for="NavItem5" class="form-label">Pagina 5</label>
											<input type="text" class="form-control" id="NavItem5" name="NavItem5" aria-describedby="NavItem5Help" value="<?php echo $templateData->getNavItem5(); ?>" placeholder="<?php echo $templateData->getNavItem5(); ?>">
											<div id="NavItem5Help" class="form-text">Pagina titel 5</div>
										</div>
										<button type="submit" name="save_nav" class="btn btn-success">Bewaren</button>
										<button type="submit" name="cancel" class="btn btn-primary">Annuleren</button>
									</div>
								</div>
							</form>
						</div>
						<div class="accordion-item">
							<form action="" method="post">
								<input type="hidden" name="id" value="<?php echo $templateData->getID(); ?>">
								<h2 class="accordion-header" id="flush-heading4">
									<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse4" aria-expanded="false" aria-controls="flush-collapse4">
										Header
									</button>
								</h2>
								<div id="flush-collapse4" class="accordion-collapse collapse" aria-labelledby="flush-heading4" data-bs-parent="#accordionFlushExample">
									<div class="accordion-body">
										<div class="mb-3">
											<label for="Headline" class="form-label">Koptekst</label>
											<div id="HeadlineHelp" class="form-text">Koptekst voor de eerste pagina</div>
										</div>
										<div class="mb-3">
											<label for="StrongSubHeadline" class="form-label">Vetgedrukte subtekst</label>
											<div id="StrongSubHeadlineHelp" class="form-text">Vetgedrukte subtekst voor de eerste pagina</div>
										</div>
										<div class="mb-3">
											<label for="SubHeadline" class="form-label">Subtekst</label>
											<div id="SubHeadlineHelp" class="form-text">Subtekst voor de eerste pagina</div>
										</div>
										<div class="mb-3">
											<label for="HeaderCtaBtn" class="form-label">Call-to-action knop</label>
											<input type="text" class="form-control" id="HeaderCtaBtn" name="HeaderCtaBtn" aria-describedby="HeaderCtaBtnHelp" value="<?php echo $templateData->getHeaderCtaBtn(); ?>" placeholder="<?php echo $templateData->getHeaderCtaBtn(); ?>">
											<div id="HeaderCtaBtnHelp" class="form-text">Call-to-action knop</div>
										</div>
										<button type="submit" name="save_header" class="btn btn-success">Bewaren</button>
										<button type="submit" name="cancel" class="btn btn-primary">Annuleren</button>
									</div>
								</div>
							</form>
						</div>
						<div class="accordion-item">
							<form action="" method="post">
								<input type="hidden" name="id" value="<?php echo $templateData->getID(); ?>">
								<h2 class="accordion-header" id="flush-heading5">
									<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse5" aria-expanded="false" aria-controls="flush-collapse5">
										Footer
									</button>
								</h2>
								<div id="flush-collapse5" class="accordion-collapse collapse" aria-labelledby="flush-heading5" data-bs-parent="#accordionFlushExample">
									<div class="accordion-body">
										<div class="mb-3">
											<label for="CompanyName" class="form-label">Bedrijfsnaam</label>
											<input type="text" class="form-control" id="CompanyName" name="CompanyName" aria-describedby="CompanyNameHelp" value="<?php echo $templateData->getCompanyName(); ?>" placeholder="<?php echo $templateData->getCompanyName(); ?>">
											<div id="CompanyNameHelp" class="form-text">Naam in de footer</div>
										</div>
										<button type="submit" name="save_footer" class="btn btn-success">Bewaren</button>
										<button type="submit" name="cancel" class="btn btn-primary">Annuleren</button>
									</div>
								</div>
							</form>
						</div>
						<div class="accordion-item">
							<form action="" method="post">
								<input type="hidden" name="id" value="<?php echo $templateData->getID(); ?>">
								<h2 class="accordion-header" id="flush-heading6">
									<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse6" aria-expanded="false" aria-controls="flush-collapse6">
										Slider
									</button>
								</h2>
								<div id="flush-collapse6" class="accordion-collapse collapse" aria-labelledby="flush-heading6" data-bs-parent="#accordionFlushExample">
									<div class="accordion-body">
										<div class="mb-3">
											<label for="CarouselImg1" class="form-label">Slide 1 (afbeelding)</label>
											<input type="text" class="form-control" id="CarouselImg1" name="CarouselImg1" aria-describedby="CarouselImg1Help" value="<?php echo $templateData->getCarouselImg1(); ?>" placeholder="<?php echo $templateData->getCarouselImg1(); ?>">
											<div id="CarouselImg1Help" class="form-text">Afbeelding</div>
										</div>
										<div class="mb-3">
											<label for="CarouselText1" class="form-label">Slide 1 (Tekst)</label>
											<input type="text" class="form-control" id="CarouselText1" name="CarouselText1" aria-describedby="CarouselText1Help" value="<?php echo $templateData->getCarouselText1(); ?>" placeholder="<?php echo $templateData->getCarouselText1(); ?>">
											<div id="CarouselText1Help" class="form-text">Tekst</div>
										</div>
										<div class="mb-3">
											<label for="CarouselSub1" class="form-label">Slide 1 (Subtekst)</label>
											<input type="text" class="form-control" id="CarouselSub1" name="CarouselSub1" aria-describedby="CarouselSub1Help" value="<?php echo $templateData->getCarouselSub1(); ?>" placeholder="<?php echo $templateData->getCarouselSub1(); ?>">
											<div id="CarouselSub1Help" class="form-text">Tekst</div>
										</div>
										<div class="mb-3">
											<label for="CarouselImg2" class="form-label">Slide 2 (afbeelding)</label>
											<input type="text" class="form-control" id="CarouselImg2" name="CarouselImg2" aria-describedby="CarouselImg2Help" value="<?php echo $templateData->getCarouselImg2(); ?>" placeholder="<?php echo $templateData->getCarouselImg2(); ?>">
											<div id="CarouselImg2Help" class="form-text">Afbeelding</div>
										</div>
										<div class="mb-3">
											<label for="CarouselText2" class="form-label">Slide 2 (Tekst)</label>
											<input type="text" class="form-control" id="CarouselText2" name="CarouselText2" aria-describedby="CarouselText2Help" value="<?php echo $templateData->getCarouselText2(); ?>" placeholder="<?php echo $templateData->getCarouselText2(); ?>">
											<div id="CarouselText2Help" class="form-text">Tekst</div>
										</div>
										<div class="mb-3">
											<label for="CarouselSub2" class="form-label">Slide 2 (Subtekst)</label>
											<input type="text" class="form-control" id="CarouselSub2" name="CarouselSub2" aria-describedby="CarouselSub2Help" value="<?php echo $templateData->getCarouselSub2(); ?>" placeholder="<?php echo $templateData->getCarouselSub2(); ?>">
											<div id="CarouselSub2Help" class="form-text">Tekst</div>
										</div>
										<div class="mb-3">
											<label for="CarouselImg3" class="form-label">Slide 3 (afbeelding)</label>
											<input type="text" class="form-control" id="CarouselImg3" name="CarouselImg3" aria-describedby="CarouselImg3Help" value="<?php echo $templateData->getCarouselImg3(); ?>" placeholder="<?php echo $templateData->getCarouselImg3(); ?>">
											<div id="CarouselImg3Help" class="form-text">Afbeelding</div>
										</div>
										<div class="mb-3">
											<label for="CarouselText3" class="form-label">Slide 3 (Tekst)</label>
											<input type="text" class="form-control" id="CarouselText3" name="CarouselText3" aria-describedby="CarouselText3Help" value="<?php echo $templateData->getCarouselText3(); ?>" placeholder="<?php echo $templateData->getCarouselText3(); ?>">
											<div id="CarouselText3Help" class="form-text">Tekst</div>
										</div>
										<div class="mb-3">
											<label for="CarouselSub3" class="form-label">Slide 3 (Subtekst)</label>
											<input type="text" class="form-control" id="CarouselSub3" name="CarouselSub3" aria-describedby="CarouselSub3Help" value="<?php echo $templateData->getCarouselSub3(); ?>" placeholder="<?php echo $templateData->getCarouselSub3(); ?>">
											<div id="CarouselSub3Help" class="form-text">Tekst</div>
										</div>
										<div class="mb-3">
											<label for="CarouselImg4" class="form-label">Slide 4 (afbeelding)</label>
											<input type="text" class="form-control" id="CarouselImg4" name="CarouselImg4" aria-describedby="CarouselImg4Help" value="<?php echo $templateData->getCarouselImg4(); ?>" placeholder="<?php echo $templateData->getCarouselImg4(); ?>">
											<div id="CarouselImg4Help" class="form-text">Afbeelding</div>
										</div>
										<div class="mb-3">
											<label for="CarouselText4" class="form-label">Slide 4 (Tekst)</label>
											<input type="text" class="form-control" id="CarouselText4" name="CarouselText4" aria-describedby="CarouselText4Help" value="<?php echo $templateData->getCarouselText4(); ?>" placeholder="<?php echo $templateData->getCarouselText4(); ?>">
											<div id="CarouselText4Help" class="form-text">Tekst</div>
										</div>
										<div class="mb-3">
											<label for="CarouselSub4" class="form-label">Slide 4 (Subtekst)</label>
											<input type="text" class="form-control" id="CarouselSub4" name="CarouselSub4" aria-describedby="CarouselSub4Help" value="<?php echo $templateData->getCarouselSub4(); ?>" placeholder="<?php echo $templateData->getCarouselSub4(); ?>">
											<div id="CarouselSub4Help" class="form-text">Tekst</div>
										</div>
										<div class="mb-3">
											<label for="CarouselImg5" class="form-label">Slide 5 (afbeelding)</label>
											<input type="text" class="form-control" id="CarouselImg5" name="CarouselImg5" aria-describedby="CarouselImg5Help" value="<?php echo $templateData->getCarouselImg4(); ?>" placeholder="<?php echo $templateData->getCarouselImg4(); ?>">
											<div id="CarouselImg5Help" class="form-text">Afbeelding</div>
										</div>
										<div class="mb-3">
											<label for="CarouselText5" class="form-label">Slide 5 (Tekst)</label>
											<input type="text" class="form-control" id="CarouselText5" name="CarouselText5" aria-describedby="CarouselText5Help" value="<?php echo $templateData->getCarouselText5(); ?>" placeholder="<?php echo $templateData->getCarouselText5(); ?>">
											<div id="CarouselText5Help" class="form-text">Tekst</div>
										</div>
										<div class="mb-3">
											<label for="CarouselSub5" class="form-label">Slide 5 (Subtekst)</label>
											<input type="text" class="form-control" id="CarouselSub5" name="CarouselSub5" aria-describedby="CarouselSub5Help" value="<?php echo $templateData->getCarouselSub5(); ?>" placeholder="<?php echo $templateData->getCarouselSub5(); ?>">
											<div id="CarouselSub5Help" class="form-text">Tekst</div>
										</div>
										<div class="mb-3">
											<label for="CarouselImg6" class="form-label">Slide 6 (afbeelding)</label>
											<input type="text" class="form-control" id="CarouselImg6" name="CarouselImg6" aria-describedby="CarouselImg6Help" value="<?php echo $templateData->getCarouselImg6(); ?>" placeholder="<?php echo $templateData->getCarouselImg6(); ?>">
											<div id="CarouselImg6Help" class="form-text">Afbeelding</div>
										</div>
										<div class="mb-3">
											<label for="CarouselText6" class="form-label">Slide 6 (Tekst)</label>
											<input type="text" class="form-control" id="CarouselText6" name="CarouselText6" aria-describedby="CarouselText6Help" value="<?php echo $templateData->getCarouselText6(); ?>" placeholder="<?php echo $templateData->getCarouselText6(); ?>">
											<div id="CarouselText6Help" class="form-text">Tekst</div>
										</div>
										<div class="mb-3">
											<label for="CarouselSub6" class="form-label">Slide 6 (Subtekst)</label>
											<input type="text" class="form-control" id="CarouselSub6" name="CarouselSub6" aria-describedby="CarouselSub6Help" value="<?php echo $templateData->getCarouselSub6(); ?>" placeholder="<?php echo $templateData->getCarouselSub6(); ?>">
											<div id="CarouselSub6Help" class="form-text">Tekst</div>
										</div>
										<div class="mb-3">
											<label for="CarouselImg7" class="form-label">Slide 7 (afbeelding)</label>
											<input type="text" class="form-control" id="CarouselImg7" name="CarouselImg7" aria-describedby="CarouselImg7Help" value="<?php echo $templateData->getCarouselImg7(); ?>" placeholder="<?php echo $templateData->getCarouselImg7(); ?>">
											<div id="CarouselImg7Help" class="form-text">Afbeelding</div>
										</div>
										<div class="mb-3">
											<label for="CarouselText7" class="form-label">Slide 7 (Tekst)</label>
											<input type="text" class="form-control" id="CarouselText7" name="CarouselText7" aria-describedby="CarouselText7Help" value="<?php echo $templateData->getCarouselText7(); ?>" placeholder="<?php echo $templateData->getCarouselText7(); ?>">
											<div id="CarouselText7Help" class="form-text">Tekst</div>
										</div>
										<div class="mb-3">
											<label for="CarouselSub7" class="form-label">Slide 7 (Subtekst)</label>
											<input type="text" class="form-control" id="CarouselSub7" name="CarouselSub7" aria-describedby="CarouselSub7Help" value="<?php echo $templateData->getCarouselSub7(); ?>" placeholder="<?php echo $templateData->getCarouselSub7(); ?>">
											<div id="CarouselSub7Help" class="form-text">Tekst</div>
										</div>
										<div class="mb-3">
											<label for="CarouselImg8" class="form-label">Slide 8 (afbeelding)</label>
											<input type="text" class="form-control" id="CarouselImg8" name="CarouselImg8" aria-describedby="CarouselImg8Help" value="<?php echo $templateData->getCarouselImg8(); ?>" placeholder="<?php echo $templateData->getCarouselImg8(); ?>">
											<div id="CarouselImg8Help" class="form-text">Afbeelding</div>
										</div>
										<div class="mb-3">
											<label for="CarouselText8" class="form-label">Slide 8 (Tekst)</label>
											<input type="text" class="form-control" id="CarouselText8" name="CarouselText8" aria-describedby="CarouselText8Help" value="<?php echo $templateData->getCarouselText8(); ?>" placeholder="<?php echo $templateData->getCarouselText8(); ?>">
											<div id="CarouselText8Help" class="form-text">Tekst</div>
										</div>
										<div class="mb-3">
											<label for="CarouselSub8" class="form-label">Slide 8 (Subtekst)</label>
											<input type="text" class="form-control" id="CarouselSub8" name="CarouselSub8" aria-describedby="CarouselSub8Help" value="<?php echo $templateData->getCarouselSub8(); ?>" placeholder="<?php echo $templateData->getCarouselSub8(); ?>">
											<div id="CarouselSub8Help" class="form-text">Tekst</div>
										</div>
										<button type="submit" name="save_carousel" class="btn btn-success">Bewaren</button>
										<button type="submit" name="cancel" class="btn btn-primary">Annuleren</button>
									</div>
								</div>
							</form>
						</div>
						<div class="accordion-item">
							<form action="" method="post">
								<input type="hidden" name="id" value="<?php echo $templateData->getID(); ?>">
								<h2 class="accordion-header" id="flush-heading7">
									<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse7" aria-expanded="false" aria-controls="flush-collapse7">
										Pagina elementen
									</button>
								</h2>
								<div id="flush-collapse7" class="accordion-collapse collapse" aria-labelledby="flush-heading7" data-bs-parent="#accordionFlushExample">
									<div class="accordion-body">
										<div class="mb-3">
											<label for="P2Header" class="form-label">Pagina 2 Koptekst</label>
											<input type="text" class="form-control" id="P2Header" name="P2Header" aria-describedby="P2HeaderHelp" value="<?php echo $templateData->getP2Header(); ?>" placeholder="<?php echo $templateData->getP2Header(); ?>">
											<div id="P2HeaderHelp" class="form-text">Koptekst</div>
										</div>
										<div class="mb-3">
											<label for="P2HeaderText" class="form-label">Pagina 2 Subtekst</label>
											<input type="text" class="form-control" id="P2HeaderText" name="P2HeaderText" aria-describedby="P2HeaderTextHelp" value="<?php echo $templateData->getP2HeaderText(); ?>" placeholder="<?php echo $templateData->getP2HeaderText(); ?>">
											<div id="P2HeaderTextHelp" class="form-text">Subtekst</div>
										</div>
										<div class="mb-3">
											<label for="P2HeaderListItem1" class="form-label">Punt 1</label>
											<input type="text" class="form-control" id="P2HeaderListItem1" name="P2HeaderListItem1" aria-describedby="P2HeaderListItem1Help" value="<?php echo $templateData->getP2HeaderListItem1(); ?>" placeholder="<?php echo $templateData->getP2HeaderListItem1(); ?>">
											<div id="P2HeaderListItem1Help" class="form-text">Lijstitem 1</div>
										</div>
										<div class="mb-3">
											<label for="P2HeaderListItem2" class="form-label">Punt 2</label>
											<input type="text" class="form-control" id="P2HeaderListItem2" name="P2HeaderListItem2" aria-describedby="P2HeaderListItem2Help" value="<?php echo $templateData->getP2HeaderListItem2(); ?>" placeholder="<?php echo $templateData->getP2HeaderListItem2(); ?>">
											<div id="P2HeaderListItem2Help" class="form-text">Lijstitem 2</div>
										</div>
										<div class="mb-3">
											<label for="P2HeaderListItem3" class="form-label">Punt 3</label>
											<input type="text" class="form-control" id="P2HeaderListItem3" name="P2HeaderListItem3" aria-describedby="P2HeaderListItem3Help" value="<?php echo $templateData->getP2HeaderListItem3(); ?>" placeholder="<?php echo $templateData->getP2HeaderListItem3(); ?>">
											<div id="P2HeaderListItem3Help" class="form-text">Lijstitem 3</div>
										</div>
										<div class="mb-3">
											<label for="P2HeaderListItem4" class="form-label">Punt 4</label>
											<input type="text" class="form-control" id="P2HeaderListItem4" name="P2HeaderListItem4" aria-describedby="P2HeaderListItem4Help" value="<?php echo $templateData->getP2HeaderListItem4(); ?>" placeholder="<?php echo $templateData->getP2HeaderListItem4(); ?>">
											<div id="P2HeaderListItem4Help" class="form-text">Lijstitem 4</div>
										</div>
										<div class="mb-3">
											<label for="P2HeaderCtaBtn" class="form-label">Call-to-action knop</label>
											<input type="text" class="form-control" id="P2HeaderCtaBtn" name="P2HeaderCtaBtn" aria-describedby="P2HeaderCtaBtnHelp" value="<?php echo $templateData->getP2HeaderCtaBtn(); ?>" placeholder="<?php echo $templateData->getP2HeaderCtaBtn(); ?>">
											<div id="P2HeaderCtaBtnHelp" class="form-text">Call-to-action knop</div>
										</div>
										<div class="mb-3">
											<label for="P2BoxTitle1" class="form-label">Box 1 - Titel</label>
											<input type="text" class="form-control" id="P2BoxTitle1" name="P2BoxTitle1" aria-describedby="P2BoxTitle1Help" value="<?php echo $templateData->getP2BoxTitle1(); ?>" placeholder="<?php echo $templateData->getP2BoxTitle1(); ?>">
											<div id="P2BoxTitle1Help" class="form-text">Box 1 - Titel</div>
										</div>
										<div class="mb-3">
											<label for="P2BoxText1" class="form-label">Box 1 - Tekst</label>
											<input type="text" class="form-control" id="P2BoxText1" name="P2BoxText1" aria-describedby="P2BoxText1Help" value="<?php echo $templateData->getP2BoxText1(); ?>" placeholder="<?php echo $templateData->getP2BoxText1(); ?>">
											<div id="P2BoxText1Help" class="form-text">Box 1 - Tekst</div>
										</div>
										<div class="mb-3">
											<label for="P2BoxTitle2" class="form-label">Box 2 - Titel</label>
											<input type="text" class="form-control" id="P2BoxTitle2" name="P2BoxTitle2" aria-describedby="P2BoxTitle2Help" value="<?php echo $templateData->getP2BoxTitle2(); ?>" placeholder="<?php echo $templateData->getP2BoxTitle2(); ?>">
											<div id="P2BoxTitle2Help" class="form-text">Box 2 - Titel</div>
										</div>
										<div class="mb-3">
											<label for="P2BoxText2" class="form-label">Box 2 - Tekst</label>
											<input type="text" class="form-control" id="P2BoxText2" name="P2BoxText2" aria-describedby="P2BoxText2Help" value="<?php echo $templateData->getP2BoxText2(); ?>" placeholder="<?php echo $templateData->getP2BoxText2(); ?>">
											<div id="P2BoxText2Help" class="form-text">Box 2 - Tekst</div>
										</div>
										<div class="mb-3">
											<label for="P2BoxTitle3" class="form-label">Box 3 - Titel</label>
											<input type="text" class="form-control" id="P2BoxTitle3" name="P2BoxTitle3" aria-describedby="P2BoxTitle3Help" value="<?php echo $templateData->getP2BoxTitle3(); ?>" placeholder="<?php echo $templateData->getP2BoxTitle3(); ?>">
											<div id="P2BoxTitle3Help" class="form-text">Box 3 - Titel</div>
										</div>
										<div class="mb-3">
											<label for="P2BoxText3" class="form-label">Box 3 - Tekst</label>
											<input type="text" class="form-control" id="P2BoxText3" name="P2BoxText3" aria-describedby="P2BoxText3Help" value="<?php echo $templateData->getP2BoxText3(); ?>" placeholder="<?php echo $templateData->getP2BoxText3(); ?>">
											<div id="P2BoxText3Help" class="form-text">Box 3 - Tekst</div>
										</div>
										<div class="mb-3">
											<label for="P2BoxTitle4" class="form-label">Box 4 - Titel</label>
											<input type="text" class="form-control" id="P2BoxTitle4" name="P2BoxTitle4" aria-describedby="P2BoxTitle4Help" value="<?php echo $templateData->getP2BoxTitle4(); ?>" placeholder="<?php echo $templateData->getP2BoxTitle4(); ?>">
											<div id="P2BoxTitle4Help" class="form-text">Box 4 - Titel</div>
										</div>
										<div class="mb-3">
											<label for="P2BoxText4" class="form-label">Box 4 - Tekst</label>
											<input type="text" class="form-control" id="P2BoxText4" name="P2BoxText4" aria-describedby="P2BoxText4Help" value="<?php echo $templateData->getP2BoxText4(); ?>" placeholder="<?php echo $templateData->getP2BoxText4(); ?>">
											<div id="P2BoxText4Help" class="form-text">Box 4 - Tekst</div>
										</div>
										<button type="submit" name="save_elements" class="btn btn-success">Bewaren</button>
										<button type="submit" name="cancel" class="btn btn-primary">Annuleren</button>
									</div>
								</div>
							</form>
						</div>
						<div class="accordion-item">
							<form action="" method="post">
								<input type="hidden" name="id" value="<?php echo $templateData->getID(); ?>">
								<h2 class="accordion-header" id="flush-heading8">
									<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse8" aria-expanded="false" aria-controls="flush-collapse8">
										Typografie
									</button>
								</h2>
								<div id="flush-collapse8" class="accordion-collapse collapse" aria-labelledby="flush-heading8" data-bs-parent="#accordionFlushExample">
									<div class="accordion-body">

										<button type="submit" name="save_typo" class="btn btn-success">Bewaren</button>
										<button type="submit" name="cancel" class="btn btn-primary">Annuleren</button>
									</div>
								</div>
							</form>
						</div>
						<div class="accordion-item">
							<form action="" method="post">
								<input type="hidden" name="id" value="<?php echo $templateData->getID(); ?>">
								<h2 class="accordion-header" id="flush-heading9">
									<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse9" aria-expanded="false" aria-controls="flush-collapse9">
										Huisstijl
									</button>
								</h2>
								<div id="flush-collapse9" class="accordion-collapse collapse" aria-labelledby="flush-heading9" data-bs-parent="#accordionFlushExample">
									<div class="accordion-body">
										<button type="submit" name="save_style" class="btn btn-success">Bewaren</button>
										<button type="submit" name="cancel" class="btn btn-primary">Annuleren</button>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
				<div class="col-md-8">
					<div style="width: auto; height: 1000px;">
						<iframe src="index.php" id="frame1" style="width: 100%; height: 100%; border: none;" referrerpolicy="same-origin"></iframe>
						<script src="editor.js" rel="script" type="text/javascript"></script>
					</div>
				</div>
			</div>
		</div>
<?php
}
?>