<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Index2</title>

	<base href="">

	<!-- Bootstrap 4.6.1 -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

	<!-- jQuery -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

	<!-- FontAwesome -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">

	<link rel="stylesheet" type="text/css" href="/../../Werk/HeadStart/css/style2.css"/>
	<link rel="stylesheet" type="text/css" href="/../../Werk/HeadStart/css/nav.css"/>
	<link rel="stylesheet" type="text/css" href="/../../Werk/HeadStart/css/footer.css"/>

	<!-- Fonts -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Baloo+Tamma+2:wght@400;500;600;700;800&family=Comfortaa:wght@300;400;500;600;700&display=swap" rel="stylesheet">


</head>
<body>

				<header class="px-2 py-3 py-lg-0 px-sm-0">
					<div class="main-nav-container container">
						<div class="row align-items-center justify-content-between">
							<a href="https://mauriceb.nl/" title="Maurice Boendermaker logo" class="header-logo d-block">
<!--								<img src="/media/Logo zwart.png" height="50" width="50" alt="Maurice Boendermaker logo">-->
								<div style="font-family: 'Comfortaa', cursive !important">headstart</div>
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
							<div style="font-family: 'Baloo Tamma 2', cursive !important" id="call-action" class="d-none d-lg-flex align-items-center">
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
			<script rel="script" src="js/footer.js"></script>
		</div>
	</div>
	<div class="row">
		<div class="col-md-2">
		</div>
		<div class="col-md-8">
			<h3 class="text-center">
				h3. Lorem ipsum dolor sit amet.
			</h3>
			<div class="row">
				<div class="col-md-6">
					<h2>
						Heading
					</h2>
					<p>
						Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo,
						tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem
						malesuada magna mollis euismod. Donec sed odio dui.
					</p>
					<p>
						<a class="btn" href="#">View details »</a>
					</p>
				</div>
				<div class="col-md-6">
					<img alt="Bootstrap Image Preview" src="https://www.layoutit.com/img/sports-q-c-140-140-3.jpg">
				</div>
			</div>
		</div>
		<div class="col-md-2">
		</div>
	</div>
	<div class="row">
		<div class="col-md-2">
		</div>
		<div class="col-md-8">
		</div>
		<div class="col-md-2">
		</div>
	</div>
	<div class="row">
		<div class="col-md-2">
		</div>
		<div class="col-md-8">
			<div class="row">
				<div class="col-md-4">
					<ul>
						<li class="list-item">
							Lorem ipsum dolor sit amet
						</li>
						<li class="list-item">
							Consectetur adipiscing elit
						</li>
						<li class="list-item">
							Integer molestie lorem at massa
						</li>
						<li class="list-item">
							Facilisis in pretium nisl aliquet
						</li>
						<li class="list-item">
							Nulla volutpat aliquam velit
						</li>
						<li class="list-item">
							Faucibus porta lacus fringilla vel
						</li>
						<li class="list-item">
							Aenean sit amet erat nunc
						</li>
						<li class="list-item">
							Eget porttitor lorem
						</li>
					</ul>
				</div>
				<div class="col-md-4">
					<ul>
						<li class="list-item">
							Lorem ipsum dolor sit amet
						</li>
						<li class="list-item">
							Consectetur adipiscing elit
						</li>
						<li class="list-item">
							Integer molestie lorem at massa
						</li>
						<li class="list-item">
							Facilisis in pretium nisl aliquet
						</li>
						<li class="list-item">
							Nulla volutpat aliquam velit
						</li>
						<li class="list-item">
							Faucibus porta lacus fringilla vel
						</li>
						<li class="list-item">
							Aenean sit amet erat nunc
						</li>
						<li class="list-item">
							Eget porttitor lorem
						</li>
					</ul>
				</div>
				<div class="col-md-4">
					<ul>
						<li class="list-item">
							Lorem ipsum dolor sit amet
						</li>
						<li class="list-item">
							Consectetur adipiscing elit
						</li>
						<li class="list-item">
							Integer molestie lorem at massa
						</li>
						<li class="list-item">
							Facilisis in pretium nisl aliquet
						</li>
						<li class="list-item">
							Nulla volutpat aliquam velit
						</li>
						<li class="list-item">
							Faucibus porta lacus fringilla vel
						</li>
						<li class="list-item">
							Aenean sit amet erat nunc
						</li>
						<li class="list-item">
							Eget porttitor lorem
						</li>
					</ul>
				</div>
			</div>
		</div>
		<div class="col-md-2">
		</div>
	</div>
	<div class="row">
		<div class="col-md-2">
		</div>
		<div class="col-md-8">
			<div class="row">
				<div class="col-md-4">
					<div class="card">
						<img class="card-img-top" alt="Bootstrap Thumbnail First"
						     src="https://www.layoutit.com/img/people-q-c-600-200-1.jpg">
						<div class="card-block">
							<h5 class="card-title">
								Card title
							</h5>
							<p class="card-text">
								Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta
								gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.
							</p>
							<p>
								<a class="btn btn-primary" href="#">Action</a> <a class="btn" href="#">Action</a>
							</p>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="card">
						<img class="card-img-top" alt="Bootstrap Thumbnail Second"
						     src="https://www.layoutit.com/img/city-q-c-600-200-1.jpg">
						<div class="card-block">
							<h5 class="card-title">
								Card title
							</h5>
							<p class="card-text">
								Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta
								gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.
							</p>
							<p>
								<a class="btn btn-primary" href="#">Action</a> <a class="btn" href="#">Action</a>
							</p>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="card">
						<img class="card-img-top" alt="Bootstrap Thumbnail Third"
						     src="https://www.layoutit.com/img/sports-q-c-600-200-1.jpg">
						<div class="card-block">
							<h5 class="card-title">
								Card title
							</h5>
							<p class="card-text">
								Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta
								gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.
							</p>
							<p>
								<a class="btn btn-primary" href="#">Action</a> <a class="btn" href="#">Action</a>
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-2">
		</div>
	</div>
<!--	<div class="row">-->
<!--		<div class="col-md-12">-->
			<footer class="footer-01" style="font-family: 'Baloo Tamma 2', cursive; ">
				<div class="container">
					<div class="row">
						<div class="col-md-6 col-lg-3 mb-4 mb-md-0">
							<h2 class="footer-heading" style="font-family: 'Comfortaa', cursive; ">HeadStart</h2>
							<p>HeadStart is a powerful all-in-one Content Management System for admins and customers. It features customizable templates in an easy-to-use editor panel.</p>
							<ul class="ftco-footer-social p-0">
								<li class="ftco-animate"><a href="#" data-toggle="tooltip" data-placement="top"
								                            title="Twitter"><span class="ion-logo-twitter"></span></a></li>
								<li class="ftco-animate"><a href="#" data-toggle="tooltip" data-placement="top"
								                            title="Facebook"><span class="ion-logo-facebook"></span></a></li>
								<li class="ftco-animate"><a href="#" data-toggle="tooltip" data-placement="top"
								                            title="Instagram"><span class="ion-logo-instagram"></span></a></li>
							</ul>
						</div>
						<div class="col-md-6 col-lg-3 mb-4 mb-md-0">
							<h2 class="footer-heading">Newest templates</h2>
							<div class="block-21 mb-4 d-flex">
								<a class="img mr-4 rounded" style="background-image: url(images/image_1.jpg);"></a>
								<div class="text">
									<h3 class="heading"><a href="#">Vanilla 526 Template is a parallax layout in an ocean blue color theme design.</a></h3>
									<div class="meta">
										<div><a href="#"><span class="icon-calendar"></span> Jul. 26, 2022</a></div>
										<!--							<div><a href="#"><span class="icon-person"></span> Admin</a></div>-->
										<!--							<div><a href="#"><span class="icon-chat"></span> 19</a></div>-->
									</div>
								</div>
							</div>
							<div class="block-21 mb-4 d-flex">
								<a class="img mr-4 rounded" style="background-image: url(images/image_2.jpg);"></a>
								<div class="text">
									<h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about</a></h3>
									<div class="meta">
										<div><a href="#"><span class="icon-calendar"></span> Jul. 26, 2022</a></div>
										<!--							<div><a href="#"><span class="icon-person"></span> Admin</a></div>-->
										<!--							<div><a href="#"><span class="icon-chat"></span> 19</a></div>-->
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-6 col-lg-3 pl-lg-5 mb-4 mb-md-0">
							<h2 class="footer-heading">Quick Links</h2>
							<ul class="list-unstyled">
								<li><a href="#" class="py-2 d-block">Home</a></li>
								<li><a href="#" class="py-2 d-block">About</a></li>
								<li><a href="#" class="py-2 d-block">Services</a></li>
								<li><a href="#" class="py-2 d-block">Works</a></li>
								<li><a href="#" class="py-2 d-block">Blog</a></li>
								<li><a href="#" class="py-2 d-block">Contact</a></li>
							</ul>
						</div>
						<div class="col-md-6 col-lg-3 mb-4 mb-md-0">
							<h2 class="footer-heading">Have a Question?</h2>
							<div class="block-23 mb-3">
								<ul>
									<li><span class="icon ion-ios-pin"></span><span class="text">Rotterdam, The Netherlands</span>
									</li>
									<li><a href="#"><span class="icon ion-ios-call"></span><span class="text">+31 6 83546256</span></a>
									</li>
									<li><a href="mailto:headstart@mauriceb.nl"><span class="icon ion-ios-send"></span><span class="text">headstart@mauriceb.nl</span></a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="row mt-5">
						<div class="col-md-12 text-center">
							<p class="copyright">
								&copy; <script>document.write(new Date().getFullYear());</script>
								All rights reserved | mauriceb.nl
							</p>
						</div>
					</div>
				</div>
			</footer>
<!--		</div>-->
<!--	</div>-->

<!--<script src="js/jquery.min.js"></script>-->
<!--<script src="js/bootstrap.min.js"></script>-->
<!--<script src="js/scripts.js"></script>-->
</body>
</html>