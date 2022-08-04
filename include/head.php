<?php

function pageTitle() {
	$pageTitle = ucfirst(basename(pathinfo($_SERVER['PHP_SELF'])['basename'],".php"));

	if ($pageTitle == "Index") {
		echo "Home";
	} else if ($pageTitle == "Projecten") {
		echo "Portfolio";
	} else {
		echo $pageTitle;
	}
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<!-- Google Tag Manager -->
	<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
                new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
            j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
            'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-PGHJGC3');</script>
	<!-- End Google Tag Manager -->
	<title><?php echo pageTitle(); ?> | HeadStart</title>

	<base href="">

	<?php include "include/meta.php" ?>

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

	<!-- Stylesheets -->
	<link rel="stylesheet" type="text/css" href="/../../Werk/HeadStart/css/style.css"/>
	<link rel="stylesheet" type="text/css" href="/../../Werk/HeadStart/css/index.css"/>
	<link rel="stylesheet" type="text/css" href="/../../Werk/HeadStart/css/nav/nav.css"/>
	<link rel="stylesheet" type="text/css" href="/../../Werk/HeadStart/css/footer/footer.css"/>
	<link rel="stylesheet" type="text/css" href="/../../Werk/HeadStart/css/pricing/pricing.css"/>
	<link rel="stylesheet" type="text/css" href="/../../Werk/HeadStart/css/timeline/timeline.css"/>
	<link rel="stylesheet" type="text/css" href="/../../Werk/HeadStart/css/services/services.css"/>



<!--	<link rel="stylesheet" type="text/css" href="/css/style.css"/>-->
<!--	<link rel="stylesheet" type="text/css" href="/css/home.css"/>-->
<!--	<link rel="stylesheet" type="text/css" href="/css/nav.css"/>-->
<!--	<link rel="stylesheet" type="text/css" href="/css/footer.css"/>-->
<!--	<link rel="stylesheet" type="text/css" href="/css/media.css"/>-->
<!--	<link rel="stylesheet" type="text/css" href="/css/all_media.css"/>-->
<!--	<link rel="stylesheet" type="text/css" href="/css/writing.css"/>-->

	<!-- jQuery -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

	<!-- Fonts -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Baloo+Tamma+2:wght@400;500;600;700;800&family=Comfortaa:wght@300;400;500;600;700&display=swap" rel="stylesheet">

	<!-- FontAwesome -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
</head>
<body>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PGHJGC3"
                  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->