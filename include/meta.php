<?php

function pageTitleSeo() {
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
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

<meta name="viewport" content="width=device-width, initial-scale=1"/>

<meta name="title" content="<?php echo pageTitleSeo(); ?> | Maurice Boendermaker">
<meta name="author" content="Maurice Boendermaker">
<meta name="copyright" content="Maurice Boendermaker">
<meta name="description" content="Maurice Boendermaker Portfolio">
<meta name="keywords" content="Maurice, Boendermaker, Portfolio, Webdeveloper, Developer, Programmer, Websites, Web Developer">
<meta name="url" content="https://mauriceb.nl/">
<meta name="image" content="/../../media/Logo blauw 192x192.png">

<meta property="og:url" content="https://mauriceb.nl/" />
<meta property="og:type" content="profile" />
<meta property="og:title" content="<?php echo pageTitleSeo(); ?> | Maurice Boendermaker" />
<meta property="og:description" content="Maurice Boendermaker Portfolio" />
<meta property="og:image" content="/../../media/Logo blauw 192x192.png" />

<meta name="twitter:card" content="summary" />
<meta name="twitter:site" content="@MauBoen" />
<meta name="twitter:creator" content="@MauBoen" />

<meta name="msapplication-config" content="/../../media/icons/browserconfig.xml">

<meta name="theme-color" content="#99DFFF">

<link rel="apple-touch-icon" sizes="180x180" href="/../../media/icons/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="48x48" href="/../../media/icons/favicon.ico">
<link rel="icon" type="image/png" sizes="16x16" href="/../../media/icons/favicon-16x16.png">
<link rel="icon" type="image/png" sizes="32x32" href="/../../media/icons/favicon-32x32.png">
<link rel="manifest" href="/../../media/icons/site.webmanifest">