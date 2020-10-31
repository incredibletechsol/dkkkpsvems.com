<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie ie8" class="no-js" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html class="no-js" lang="en"> <!--<![endif]-->
<head>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<title><?php include('title.php'); ?></title>
	<meta name="description" content="">

    <!-- CSS FILES -->
    <link rel="stylesheet" href="css/bootstrap.min.css"/>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/style.css" media="screen" data-name="skins">
    <link rel="stylesheet" href="css/layout/wide.css" data-name="layout">

    <link rel="stylesheet" href="css/fractionslider.css"/>
    <link rel="stylesheet" href="css/style-fraction.css"/>
    <link rel="stylesheet" href="css/animate.css"/>

    <link rel="stylesheet" type="text/css" href="css/switcher.css" media="screen" />
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doest work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
	<!--Start Header-->
    <?php include('nav.php'); ?>
	<!--End Header-->
	
	<!--start wrapper-->
	<section class="wrapper">
	<!--Start Slider-->
        <div class="slider-wrapper">
            <div class="slider">
                <div class="fs_loader"></div>

                <div class="slide">
                    <img src="images/fraction-slider/3.jpg" width="1920" height="850" data-in="fade" data-out="fade" />
                </div>

                <div class="slide">
                    <img src="images/fraction-slider/1.jpg" width="1920" height="850" data-in="fade" data-out="fade" />
                </div>

                <div class="slide">
                    <img src="images/fraction-slider/2.jpg"  width="1920" height="850" data-in="fade" data-out="fade" />
                </div>
	
		<div class="slide">
                    <img src="images/fraction-slider/4.jpg" width="1920" height="850" data-in="fade" data-out="fade" />
                </div>
				
		<div class="slide">
                    <img src="images/fraction-slider/5.jpg" width="1920" height="850" data-in="fade" data-out="fade" />
                </div>
            </div>
        </div>
		<!--End Slider-->
		
	<!--start info service-->
	<section class="feature_bottom">
			<div class="container">
				<div class="row sub_content">
					<div class="col-lg-6 wow fadeInLeft">
					    <div class="widget widget_tab">
                            <ul  class="nav nav-tabs">
                                <li class="active"><a href="#Popular" data-toggle="tab">News</a></li>
                            </ul>

                            <div class="tab-content clearfix">
                                <div class="tab-pane fade active in" id="Popular">
                                 <?php include('newsticker.php'); ?>   
                                </div>
                            </div>
                        </div>
					</div>
						
					<div class="col-lg-6 wow fadeinright">
						<div class="dividerHeading">
							<h4><span>Welcome To Vyankateshwara English Medium School</span></h4>
						</div>
						<p align="justify">
                        You may already know something of our school or you may be finding out about us for the first time,
                        whichever the case, I hope that you find our website helpful and hope that it provides a useful overview
                        of our school.
                        </p>
                        <p align="justify">
                        As a small school we have the same demands placed upon us as all of our larger neighbours. The education
                        that we provide is as focused, relevant and stimulating as you might hope to find in any other
                        school, but we have the added benefit of fewer pupils, where every child really does matter and where
                        the need of the individual learner is given every consideration.
                        </p>
                        <p align="justify">
                        The school is an important part of the village; part of a community that
                        is vibrant and active. We recognise the benefits of developing effective relationships within our village
                        community – as the village ‘reaches in’, we reach out, understanding that close liaison promotes
                        cohesion within the community and enrichment to our wider curriculum.
                        </p>
					</div>
				</div>
			</div>
		</section>
		<!--end info service-->
		<?php include('tabslide.php'); ?>
		<!--Start Photo Gallery-->
		<section class="latest_work">
			<div class="container">
				<div class="row sub_content">
					<div class="carousel-intro">
						<div class="col-md-12">
							<div class="dividerHeading">
								<h4><span>Photo Gallery</span></h4>
							</div>
							<div class="carousel-navi">
								<div id="work-prev" class="arrow-left jcarousel-prev"><i class="fa fa-angle-left"></i></div>
								<div id="work-next" class="arrow-right jcarousel-next"><i class="fa fa-angle-right"></i></div>
							</div>
							<div class="clearfix"></div>
						</div>
					</div>

                    <div class="jcarousel recent-work-jc">
                        <ul class="jcarousel-list">
                          <!-- Photo Gallery Start-->
						<?php
							include('conn.php');
							$result = mysqli_query($conn,"SELECT * FROM tbl_gallery order by photoid desc") or die('Query Not Executed');
							while($row = mysqli_fetch_array($result))
							{
								echo "<li class='col-sm-3 col-md-3 col-lg-3'>";
								echo "<div class='recent-item'>";
									echo "<figure>";
										echo "<div class='touching medium'>";
											echo "<img src='gallery/$row[1]'  height='200'/>";
										echo "</div>";
										echo "<div class='option'>";
											echo "<a href='gallery/$row[1]' class='hover-zoom mfp-image' ><i class='fa fa-search'></i></a>";
										echo "</div>";
										echo "<figcaption class='item-description'>";
											echo "<span>$row[2]</span>";
										echo "</figcaption>";
									echo "</figure>";
								echo "</div>";
							echo "</li>";
							}
							?>
						<!-- Photo Gallery End--> 
                        </ul>
                    </div>
				</div>
			</div>
		</section>
	<!--End Photo Gallery-->
	</section>
	<!--end wrapper-->
	
	<?php include('footer.php'); ?>

   
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/retina-1.1.0.min.js"></script>
    <script type="text/javascript" src="js/jquery.cookie.js"></script> <!-- jQuery cookie -->
    <script type="text/javascript" src="js/styleswitch.js"></script> <!-- Style Colors Switcher -->
    <script src="js/jquery.fractionslider.js" type="text/javascript" charset="utf-8"></script>
    <script type="text/javascript" src="js/jquery.smartmenus.min.js"></script>
    <script type="text/javascript" src="js/jquery.smartmenus.bootstrap.min.js"></script>
    <script type="text/javascript" src="js/jquery.jcarousel.js"></script>
    <script type="text/javascript" src="js/jflickrfeed.js"></script>
    <script type="text/javascript" src="js/jquery.magnific-popup.min.js"></script>
    <script type="text/javascript" src="js/jquery.isotope.min.js"></script>
    <script type="text/javascript" src="js/swipe.js"></script>

    <script type="text/javascript" src="js/wow.min.js"></script>

    <script src="js/main.js"></script>

    <!-- Start Style Switcher -->
    <div class="switcher"></div>
    <!-- End Style Switcher -->
    <script>
        $(window).load(function(){
            $('.slider').fractionSlider({
                'fullWidth': 			true,
                'controls': 			true,
                'responsive': 			true,
                'dimensions': 			"1920,450",
                'timeout' :             5000,
                'increase': 			true,
                'pauseOnHover': 		true,
                'slideEndAnimation': 	false,
                'autoChange':           true
            });
        });
        // WOW Animation
        new WOW().init();
    </script>
</body>
</html>