<?php

namespace vanilla526;

require '../../config.php';

require_once 'database/database_vanilla526.php';
require_once 'database/vanilla526.php';

$db = new database_vanilla526($db_host, $db_user, $db_pass, $db_name, $db_port);

$templateData = $db->getVanilla526();

foreach ($templateData as $data) {
?>
<!DOCTYPE html>
<html lang="<?php echo $data->getSeoLang(); ?>">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

    <title><?php echo $data->getTitle(); ?></title>

    <meta name="viewport" content="width=device-width, initial-scale=1">

	<meta name="title" content="<?php echo $data->getSeoTitle(); ?>">
	<meta name="author" content="<?php echo $data->getSeoAuthor(); ?>">
	<meta name="copyright" content="<?php echo $data->getSeoCopy(); ?>">
	<meta name="description" content="<?php echo $data->getSeoDesc(); ?>">
	<meta name="keywords" content="<?php echo $data->getSeoKeywords(); ?>">
	<meta name="url" content="<?php echo $data->getSeoUrl(); ?>">
	<meta name="image" content="<?php echo $data->getSeoImage(); ?>">

<!--    <link rel="apple-touch-icon" href="apple-touch-icon.png">-->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/fontAwesome.css">
    <link rel="stylesheet" href="css/hero-slider.css">
    <link rel="stylesheet" href="css/templatemo-main.css">
    <link rel="stylesheet" href="css/owl-carousel.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
    <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
</head>
<body>
    <div class="fixed-side-navbar">
        <ul class="nav flex-column">
            <li class="nav-item"><a class="nav-link" href="#home"><span><?php echo $data->getNavItem1(); ?></span></a></li>
            <li class="nav-item"><a class="nav-link" href="#services"><span><?php echo $data->getNavItem2(); ?></span></a></li>
            <li class="nav-item"><a class="nav-link" href="#portfolio"><span><?php echo $data->getNavItem3(); ?></span></a></li>
            <li class="nav-item"><a class="nav-link" href="#our-story"><span><?php echo $data->getNavItem4(); ?></span></a></li>
<!--            <li class="nav-item"><a class="nav-link" href="#contact-us"><span>--><?php //echo $data->getNavItem5(); ?><!--</span></a></li>-->
        </ul>
    </div>
    <div class="parallax-content baner-content" id="home">
        <div class="container">
            <div class="first-content">
                <h1 id="headline"><?php echo $data->getHeadline(); ?></h1>
                <span><em><?php echo $data->getStrongSubHeadline(); ?></em> <?php echo $data->getSubHeadline(); ?></span>
                <div class="primary-button">
                    <a href="#services"><?php echo $data->getHeaderCtaBtn(); ?></a>
                </div>
            </div>
        </div>
    </div>
    <div class="service-content" id="services">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="left-text">
                        <h4 id="show-P2Header"><?php echo $data->getP2Header(); ?></h4>
                        <div class="line-dec"></div>
                        <p><?php echo $data->getP2HeaderText(); ?></p>
                        <ul>
                            <li id="show-P2HeaderListItem1">-  <?php echo $data->getP2HeaderListItem1(); ?></li>
                            <li id="show-P2HeaderListItem2">-  <?php echo $data->getP2HeaderListItem2(); ?></li>
                            <li id="show-P2HeaderListItem3">-  <?php echo $data->getP2HeaderListItem3(); ?></li>
                            <li id="show-P2HeaderListItem4">-  <?php echo $data->getP2HeaderListItem4(); ?></li>
                        </ul>
                        <div class="primary-button">
                            <a href="#portfolio"><?php echo $data->getP2HeaderCtaBtn(); ?></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="service-item">
                                <h4><?php echo $data->getP2BoxTitle1(); ?></h4>
                                <div class="line-dec"></div>
                                <p><?php echo $data->getP2BoxText1(); ?></p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="service-item">
                                <h4><?php echo $data->getP2BoxTitle2(); ?></h4>
                                <div class="line-dec"></div>
                                <p><?php echo $data->getP2BoxText2(); ?></p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="service-item">
                                <h4><?php echo $data->getP2BoxTitle3(); ?></h4>
                                <div class="line-dec"></div>
                                <p><?php echo $data->getP2BoxText3(); ?></p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="service-item">
                                <h4><?php echo $data->getP2BoxTitle4(); ?></h4>
                                <div class="line-dec"></div>
                                <p><?php echo $data->getP2BoxText4(); ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="parallax-content projects-content" id="portfolio">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div id="owl-testimonials" class="owl-carousel owl-theme">

                        <div class="item">
                            <div class="testimonials-item">
                                <a href="img/<?php echo $data->getCarouselImg1(); ?>" data-lightbox="image-1"><img src="img/<?php echo $data->getCarouselImg1(); ?>" alt="<?php echo $data->getCarouselImg1(); ?>"></a>
                                <div class="text-content">
                                    <h4><?php echo $data->getCarouselText1(); ?></h4>
                                    <span><?php echo $data->getCarouselSub1(); ?></span>
                                </div>
                            </div>
                        </div>
	                    <div class="item">
                            <div class="testimonials-item">
								<a href="img/<?php echo $data->getCarouselImg2(); ?>" data-lightbox="image-1"><img src="img/<?php echo $data->getCarouselImg2(); ?>" alt="<?php echo $data->getCarouselImg2(); ?>"></a>
								<div class="text-content">
									<h4><?php echo $data->getCarouselText2(); ?></h4>
									<span><?php echo $data->getCarouselSub2(); ?></span>
								</div>
							</div>
						</div>
	                    <div class="item">
                            <div class="testimonials-item">
                                <a href="img/<?php echo $data->getCarouselImg3(); ?>" data-lightbox="image-1"><img src="img/<?php echo $data->getCarouselImg3(); ?>" alt="<?php echo $data->getCarouselImg3(); ?>"></a>
                                <div class="text-content">
                                    <h4><?php echo $data->getCarouselText3(); ?></h4>
                                    <span><?php echo $data->getCarouselSub3(); ?></span>
                                </div>
                            </div>
                        </div>
	                    <div class="item">
                            <div class="testimonials-item">
								<a href="img/<?php echo $data->getCarouselImg4(); ?>" data-lightbox="image-1"><img src="img/<?php echo $data->getCarouselImg4(); ?>" alt="<?php echo $data->getCarouselImg4(); ?>"></a>
								<div class="text-content">
									<h4><?php echo $data->getCarouselText4(); ?></h4>
									<span><?php echo $data->getCarouselSub4(); ?></span>
								</div>
							</div>
						</div>
	                    <div class="item">
                            <div class="testimonials-item">
                                <a href="img/<?php echo $data->getCarouselImg5(); ?>" data-lightbox="image-1"><img src="img/<?php echo $data->getCarouselImg5(); ?>" alt="<?php echo $data->getCarouselImg5(); ?>"></a>
                                <div class="text-content">
                                    <h4><?php echo $data->getCarouselText5(); ?></h4>
									<span><?php echo $data->getCarouselSub5(); ?></span>
                                </div>
							</div>
						</div>
	                    <div class="item">
							<div class="testimonials-item">
								<a href="img/<?php echo $data->getCarouselImg6(); ?>" data-lightbox="image-1"><img src="img/<?php echo $data->getCarouselImg6(); ?>" alt="<?php echo $data->getCarouselImg6(); ?>"></a>
								<div class="text-content">
									<h4><?php echo $data->getCarouselText6(); ?></h4>
									<span><?php echo $data->getCarouselSub6(); ?></span>
								</div>
							</div>
	                    </div>
	                    <div class="item">
                            <div class="testimonials-item">
								<a href="img/<?php echo $data->getCarouselImg7(); ?>" data-lightbox="image-1"><img src="img/<?php echo $data->getCarouselImg7(); ?>" alt="<?php echo $data->getCarouselImg7(); ?>"></a>
								<div class="text-content">
									<h4><?php echo $data->getCarouselText7(); ?></h4>
									<span><?php echo $data->getCarouselSub7(); ?></span>
								</div>
                            </div>
	                    </div>
	                    <div class="item">
							<div class="testimonials-item">
								<a href="img/<?php echo $data->getCarouselImg8(); ?>" data-lightbox="image-1"><img src="img/<?php echo $data->getCarouselImg8(); ?>" alt="<?php echo $data->getCarouselImg8(); ?>"></a>
								<div class="text-content">
									<h4><?php echo $data->getCarouselText8(); ?></h4>
									<span><?php echo $data->getCarouselSub8(); ?></span>
								</div>
							</div>
						</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="tabs-content" id="our-story">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="wrapper">
                        <section id="first-tab-group" class="tabgroup">
                            <div id="tab1">
                                <img src="img/<?php echo $data->getTabImg1(); ?>" alt="<?php echo $data->getTabImg1(); ?>">
                                <p><?php echo $data->getTabText1(); ?></p>
                            </div>
                            <div id="tab2">
                                <img src="img/<?php echo $data->getTabImg2(); ?>" alt="<?php echo $data->getTabImg2(); ?>">
                                <p><?php echo $data->getTabText2(); ?></p>
                            </div>
                            <div id="tab3">
                                <img src="img/<?php echo $data->getTabImg3(); ?>" alt="<?php echo $data->getTabImg3(); ?>">
                                <p><?php echo $data->getTabText3(); ?></p>
                            </div>
                            <div id="tab4">
                                <img src="img/<?php echo $data->getTabImg4(); ?>" alt="<?php echo $data->getTabImg4(); ?>">
                                <p><?php echo $data->getTabText4(); ?></p>
                            </div>
                        </section>
                        <ul class="tabs clearfix" data-tabgroup="first-tab-group">
                            <li><a href="#tab1" class="active"><?php echo $data->getTabItem1(); ?></a></li>
                            <li><a href="#tab2"><?php echo $data->getTabItem2(); ?></a></li>
                            <li><a href="#tab3"><?php echo $data->getTabItem3(); ?></a></li>
                            <li><a href="#tab4"><?php echo $data->getTabItem4(); ?></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!--    <div class="parallax-content contact-content" id="contact-us">-->
<!--        <div class="container">-->
<!--            <div class="row">-->
<!--                <div class="col-md-6">-->
<!--                    <div class="contact-form">-->
<!--                        <div class="row">-->
<!--                            <form id="contact" action="" method="post">-->
<!--                                <div class="row">-->
<!--                                    <div class="col-md-12">-->
<!--                                        <fieldset>-->
<!--                                            <input name="name" type="text" class="form-control" id="name" placeholder="Your name..." required="">-->
<!--                                        </fieldset>-->
<!--                                    </div>-->
<!--                                    <div class="col-md-12">-->
<!--                                        <fieldset>-->
<!--                                            <input name="email" type="email" class="form-control" id="email" placeholder="Your email..." required="">-->
<!--                                        </fieldset>-->
<!--                                    </div>-->
<!--                                    <div class="col-md-12">-->
<!--                                        <fieldset>-->
<!--                                            <textarea name="message" rows="6" class="form-control" id="message" placeholder="Your message..." required=""></textarea>-->
<!--                                        </fieldset>-->
<!--                                    </div>-->
<!--                                    <div class="col-md-12">-->
<!--                                        <fieldset>-->
<!--                                            <button type="submit" id="form-submit" class="btn">Send Message</button>-->
<!--                                        </fieldset>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                            </form>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="col-md-6">-->
<!--                    <div class="map">-->
<!--                        --><?php
//                            /*
//                            How to change your own map point:
//	                            1. Go to Google Maps
//	                            2. Click on your location point
//	                            3. Click "Share" and choose "Embed map" tab
//	                            4. Copy only URL and paste it within the src="" field below
//                            */
//                        ?>
<!--                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1197183.8373802372!2d-1.9415093691103689!3d6.781986417238027!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xfdb96f349e85efd%3A0xb8d1e0b88af1f0f5!2sKumasi+Central+Market!5e0!3m2!1sen!2sth!4v1532967884907" width="100%" height="390" frameborder="0" style="border:0" allowfullscreen></iframe>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="primary-button">
                        <a href="#home">Back To Top</a>
                    </div>
                    <ul>
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                    </ul>
                    <p>Copyright &copy; <?php echo date("Y"); ?> <?php echo $data->getCompanyName(); ?></p>
                </div>
            </div>
        </div>
    </footer>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')</script>
    <script src="js/vendor/bootstrap.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>
    <script>
        function openCity(cityName) {
            var i;
            var x = document.getElementsByClassName("city");
            for (i = 0; i < x.length; i++) {
                x[i].style.display = "none";
            }
            document.getElementById(cityName).style.display = "block";
        }
    </script>
    <script>
        $(document).ready(function(){
            // Add smooth scrolling to all links
            $(".fixed-side-navbar a, .primary-button a").on('click', function(event) {

                // Make sure this.hash has a value before overriding default behavior
                if (this.hash !== "") {
                    // Prevent default anchor click behavior
                    event.preventDefault();

                    // Store hash
                    var hash = this.hash;

                    // Using jQuery's animate() method to add smooth page scroll
                    // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
                    $('html, body').animate({
                        scrollTop: $(hash).offset().top
                    }, 800, function(){

                        // Add hash (#) to URL when done scrolling (default click behavior)
                        window.location.hash = hash;
                    });
                } // End if
            });
        });
    </script>
</body>
</html>
<?php
}
?>