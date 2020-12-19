<!DOCTYPE html>
<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie ie8" class="no-js" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html class="no-js" lang="en"> <!--<![endif]-->
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title><?php include('title.php'); ?></title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

    <!-- CSS FILES -->
    <link rel="stylesheet" href="css/bootstrap.min.css"/>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/style.css" media="screen" data-name="skins">
    <link rel="stylesheet" href="css/layout/wide.css" data-name="layout">

    <link rel="stylesheet" type="text/css" href="css/switcher.css" media="screen" />
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesnt work if you view the page via file:// -->
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
        <section class="page_head">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="page_title">
                            <h2>Boarding Facility</h2>
                        </div>
                        <nav id="breadcrumbs">
                            <ul>
                                <li>You are here:</li>
                                <li>Home</li>
                                <li>Boarding Facility</li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </section>

		<section class="content left_sidebar">
			<div class="container">
				<div class="row">
					<!--Sidebar Widget-->
					<div class="col-lg-4 col-md-4 col-sm-4">
						<div class="sidebar">
<div id="myTabContent1" class="tab-content clearfix">
								<div class="tab-pane fade active in" id="Popular">
								   <p align="left"><img src="images/boarding.jpg" width="350" height="500" border="0"></p>
									
								</div>
							</div>	
							 <div class="Everest-tab sidebar-tab">
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
					</div>
					
					<div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
						<div class="blog_large">
<p align="justify">
Student life as a boarder is an exciting and different experience. Living and growing up together builds a sense of belonging, lifelong attachment and responsibility. At SVEM School, we realize the importance of students sharing their lives with friends, making residential life here a memorable experience.
</p>
						<p align="justify">
The boarding team is headed by the principal who is supported by highly qualified and skilled teaching and residential staff including House masters. Students from I to X are admitted in the boarding. Each child is under the supervision and care of the housemasters. Boarding House provides modern amenities including attractive bedrooms accommodation, students’ superb bath shower facilities and comfortable recreational room.
</p><br>

<li>In the boarding we provide an environment whereby students can develop their own intellectual talents.</li>
<li>Daily preparation classes are well structured and supervised. We help students to develop qualities of leadership.</li>
<li>The rooms in the hostel are in the form of dormitories with comfortable, secure and ample space.</li>
<li>There is a recreational hall with indoor games and a projector facility where inspirational movies and educational videos are screened. Picnics and guided tours are also conducted from time to time.</li>
<li>Boarding builds self-confidence, self-discipline, independence, the capacity to interact with adults, fellow students and a sense of direction.</li>
<br>
The School Sport Coach work on National Level to:<br>
<li>Encourage young people to be more active more often</li>
<li>Develop children’s spiritual, moral, social and cultural awareness through sport</li>
<li>Help tackle obesity by continuing to offer more opportunities to play sport</li>
<li>Develop pathways for children to progress from school sport to community sport</li>
<li>Help develop young leaders of the future through sport</li>


						</div>
					</div>
					<?php include('tabslide.php'); ?>
				</div>
			</div>
		</section>
	</section>
	<!--end wrapper-->

	<?php include('footer.php'); ?>

    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/retina-1.1.0.min.js"></script>
    <script type="text/javascript" src="js/jquery.cookie.js"></script> <!-- jQuery cookie -->
    <script type="text/javascript" src="js/styleswitch.js"></script> <!-- Style Colors Switcher -->
    <script type="text/javascript" src="js/jquery.smartmenus.min.js"></script>
    <script type="text/javascript" src="js/jquery.smartmenus.bootstrap.min.js"></script>
    <script type="text/javascript" src="js/jquery.jcarousel.js"></script>
    <script type="text/javascript" src="js/jflickrfeed.js"></script>
    <script type="text/javascript" src="js/jquery.magnific-popup.min.js"></script>
    <script type="text/javascript" src="js/jquery.isotope.min.js"></script>
    <script type="text/javascript" src="js/swipe.js"></script>


    <script src="js/main.js"></script>

    <!-- Start Style Switcher -->
    <div class="switcher"></div>
    <!-- End Style Switcher -->
</body>
</html>