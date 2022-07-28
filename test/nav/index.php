<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<link rel="stylesheet" href="../../../../css/nav.css">
<link rel="stylesheet" href="../../../../css/style.css">


<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Baloo+Tamma+2:wght@400;500;600;700;800&family=Comfortaa:wght@300;400;500;600;700&display=swap"
      rel="stylesheet">

<link rel="stylesheet" href="style.css">


<header class="px-2 py-3 py-lg-0 px-sm-0">
	<div class="main-nav-container container">
		<div class="row align-items-center justify-content-between">
			<a href="https://mauriceb.nl/" title="Maurice Boendermaker logo" class="header-logo d-block">
<!--				<img src="/media/Logo zwart.png" height="50" width="50" alt="Maurice Boendermaker logo">-->
				headstart
			</a>
			<nav class="d-none d-lg-block">
				<ul class="main-menu d-flex flex-column flex-lg-row align-items-lg-center list-unstyled p-0 m-0">
					<li id="nav-Home">
						<a href="/" class="d-block" title="Home">
							<span>Home</span>
						</a>
					</li>
					<li id="nav-About">
						<a href="about" class="d-block" title="About">
							<span>About</span>
						</a>
					</li>
					<li id="nav-Portfolio">
						<a href="projecten" class="d-block" title="Portfolio">
							<span>Portfolio</span>
						</a>
						<ul class="sub-menu list-unstyled p-0 m-0">
							<li>
								<a target="_blank" href="https://kahoot.mauriceb.nl/" class="d-block" title="Kahoot Answers">
									<span>Kahoot Answers</span>
								</a>
							</li>
							<li>
								<a target="_blank" href="https://zeeslag.mauriceb.nl/" class="d-block" title="Zeeslag">
									<span>Zeeslag</span>
								</a>
							</li>
							<li>
								<a target="_blank" href="https://genericgames.mauriceb.nl/" class="d-block" title="Portfolio">
									<span>GenericGames</span>
								</a>
							</li>
							<li>
								<a target="_blank" href="https://genericgoods.mauriceb.nl/" class="d-block" title="Portfolio">
									<span>GenericGoods</span>
								</a>
							</li>
						</ul>
					</li>
					<li id="nav-Contact">
						<a href="contact" class="d-block" title="Contact">
							<span>Contact</span>
						</a>
					</li>
					<?php
					if ($_SERVER['REQUEST_URI'] == '/') {
						$url = str_replace('/', '/home', $_SERVER['REQUEST_URI']);
					} else {
						$url = str_replace('', '', $_SERVER['REQUEST_URI']);
					}

					if (str_contains($_SERVER['REQUEST_URI'], 'en/' . $_SERVER['REQUEST_URI']) !== false) {
						echo '<li class="hidden-for-pc"><a href="..' . $url . '" class="d-block" title="Nederlands">
				                                <span>Nederlands</span>
				                            </a></li>';
					} else {
						echo '<li class="hidden-for-pc"><a href="en' . $url . '" class="d-block" title="English">
				                                <span>English</span>
				                            </a></li>';
					}
					?>
				</ul>
			</nav>
			<div id="call-action" class="d-none d-lg-flex align-items-center">
				<a href="#" title="Social Media" class="d-none d-lg-inline-block call-action">
					<a href="https://www.linkedin.com/in/mauriceboendermaker" title="LinkedIn" class="social-CTA" target="_blank"><i class="fab fa-linkedin-in"></i></a>
					<a href="https://www.instagram.com/MauriceB.nl/" title="Instagram" class="social-CTA" target="_blank"><i class="fab fa-instagram"></i></a>
					<a href="https://twitter.com/MauBoen" title="Twitter" class="social-CTA" target="_blank"><i class="fab fa-twitter"></i></a>
					<ul class="main-menu d-flex flex-column flex-lg-row align-items-lg-center list-unstyled p-0 m-0">
						<li>
							<div class="social-CTA social-CTA-fixed"><i class="fas fa-globe-americas"></i></div>
							<ul class="sub-menu list-unstyled p-0 m-0">
								<?php
								if ($_SERVER['REQUEST_URI'] == '/') {
									$url = str_replace('/', '/home', $_SERVER['REQUEST_URI']);
								} else {
									$url = str_replace('', '', $_SERVER['REQUEST_URI']);
								}

								if (str_contains($_SERVER['REQUEST_URI'], 'en/' . $_SERVER['REQUEST_URI']) !== false) {
									echo '<li><a href="..' . $url . '" class="d-block" title="Nederlands">
				                                <span>Nederlands</span>
				                            </a></li>';
								} else {
									echo '<li><a href="en' . $url . '" class="d-block" title="English">
				                                <span>English</span>
				                            </a></li>';
								}
								?>
							</ul>
						</li>
					</ul>
				</a>
			</div>
			<div class="side-menu-close d-flex d-lg-none flex-wrap flex-column align-items-center justify-content-center ml-auto">
				<span></span>
				<span></span>
				<span></span>
			</div>
		</div>
	</div>
</header>
<!-- side menu start -->
<div class="side-menu-wrap">
	<a href="#" title="Maurice Boendermaker logo" class="side-menu-logo d-block py-3">
		<img src="/media/Logo zwart.png" height="50" width="50" alt="Maurice Boendermaker logo">
	</a>
	<nav class="side-menu-nav">
		<!-- Auto generated side menu from top header menu -->
	</nav>
	<div class="side-menu-close d-flex flex-wrap flex-column align-items-center justify-content-center">
		<span></span>
		<span></span>
		<span></span>
	</div>
</div>
<script>
    var sPath = window.location.pathname;
    var sPage = sPath.substring(sPath.lastIndexOf('/') + 1);

    switch(sPage) {
        case "":
            document.getElementById("nav-Home").classList.add('active');
            break;
        case "about":
            document.getElementById("nav-About").classList.add('active');
            break;
        case "projecten":
            document.getElementById("nav-Portfolio").classList.add('active');
            break;
        case "contact":
            document.getElementById("nav-Contact").classList.add('active');
            break;
    }
</script>
<!-- side menu end -->
<script rel="script" src="../../../../js/javascript.js"></script>