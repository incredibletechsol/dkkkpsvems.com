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
                            <h2>Mission and Vision</h2>
                        </div>
                        <nav id="breadcrumbs">
                            <ul>
                                <li>You are here:</li>
                                <li>About Us</li>
                                <li>Mission and Vision</li>
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
						<h2>Mission</h2>
							<p align="justify">

Mission of Shree Vyanketeshwara English Medium School is to provide each student a diverse education in a safe, supportive environment that promotes self-discipline, motivation, and excellence in learning. The Shree Vyanketeshwara English Medium School team joins the parents and community to assist the students in developing skills to become independent and self-sufficient adults who will succeed and contribute responsibly in a global community.
Our School is committed to encouraging the best in its students, staff, and community. We aim to nurture a passion for knowledge, sport, creativity, and vocational skills.
</p>
We do this by:
<li>Creating a respectful working environment for student and staff. <li>Providing a personalized and student-centered approach to learning.</li>
<li>Providing world class learning environment, with technology and teaching methods.</li>
<li>Building a ‘Culture of Achievement’.</li>
<li>Focusing on continuous improvement and shared accountabilities.</li>
<li>Developing Partnerships with our community-local, national and global.</li>
<li>Encouraging school and community health and well-being.</li>
<h2>Values</h2>
Our Shared values are:
<li>Respect</li>
<li>Honesty</li>
<li>Responsibility</li>
<li>Achievement</li>
<h2>Vision</h2>
Our School vision is of a school that enables each student to achieve their potential within a learning environment that is safe, positive, respectful, inclusive and welcoming.
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