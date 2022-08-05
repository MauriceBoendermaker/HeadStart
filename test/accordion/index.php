<!DOCTYPE html>
<html lang="en-US">
	<head>
		<title>JSON Accordion Test</title>

		<style>
			::selection {
				color: white;
				background: red;
			}
		</style>
		
		<!-- Meta Tags -->

		<meta charset="utf-8">

		<meta name="viewport" content="width=1920px, initial-scale=1.0">

		<!-- W3.CSS library & Fonts -->
		<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap">

		<!-- Bootstrap -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
		
		<!-- Google Icons -->
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		
		<!-- FontAwesome Icons -->
		<script src="https://kit.fontawesome.com/e8e526f042.js" crossorigin="anonymous"></script>
		
		<link rel="stylesheet" href="css/index.css?<?php echo date('l jS \of F Y h:i:s A'); ?>">
	
	</head>
	<body>
		<header class="header-top">
			<div class="row">
				<div class="col"></div>
				<div class="col">
					<div class="container">
						<nav class="navbar navbar-expand-sm justify-content-center">
							<ul class="nav nav-pills">
								<li class="nav-item">
									<a class="nav-link active" href="">Home</a>
								</li>
							</ul>
						</nav>
					</div>
				</div>
				<div class="col"></div>
			</div>
		</header>
		<div class="second-header">
			<div class="row">
				<div class="col"></div>
				<div class="col">
					<div class="container">
						<div class="justify-content-center text-center">
							<div class="title">
								Accordion Test by <a target="_blank" href="https://www.instagram.com/MauriceBoendermaker"> Maurice</a> <small>(v1)</small>
							</div>
						</div>
					</div>
				</div>
				<div class="col"></div>
			</div>
		</div>
		<main class="main">
			<div class="row">
				<div class="col"></div>
				<div class="col">
					<div class="container">
						<div class="justify-content-center text-center">
<!--							<form action="download.php" method="POST">-->
<!--								<div>-->
<!--									<input class="search-bar" type="text" id="quizid" name="quizid" placeholder="QuizID">-->
<!--									<br/>-->
<!--									<button class="btn btn-outline-danger btn-lg search-button" action="download.php" method="POST" type="submit">Get your answers!</button>-->
<!--								</div>-->
<!--							</form>-->
							<form action="search.php?template=testKahootID_search" method="POST">
								<div>
									<input class="search-bar" type="text" id="searchquery" name="searchquery" placeholder="Search for questions, titles etc...">
									<br/>
									<button class="btn btn-outline-danger btn-lg search-button" action="search.php" method="POST" type="submit">Edit template</button>
								</div>
							</form>
							<br/>
							<div class="alert alert-info text-left">
								<strong>Info:</strong> Lorem Ipsum
							</div>
							<div class="alert alert-warning text-left">
								<strong>e83788f0-ec92-4e30-9101-43a0f00dba29</strong>
							</div>
							<div class="alert alert-warning text-left">
								<strong>4be9da93-dfff-4462-9877-2201dea060fa</strong>
							</div>
						</div>
					</div>
				</div>
				<div class="col"></div>
			</div>
		</main>
		<footer class="footer">
			<div class="row">
				<div class="col"></div>
				<div class="col">
					<div class="container">
						<div class="justify-content-center text-center">
						<br/>
						<br/>
							Made by Maurice
						<br/>
						<br/>
						</div>
					</div>
				</div>
				<div class="col"></div>
			</div>
		</footer>
	</body>
</html>