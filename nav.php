
<!--Start Header-->
	<header id="header">
       <div id="top-bar">
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <div id="logo">
                        <h1><a href="index.php"><img src="images/logo.png" alt="Everest"/></a></h1>
                    </div>
                </div>
			<!--	
                <div class="col-sm-9 top-info">
				
                    <ul>
                        <li><a href="" class="my-tweet"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="" class="my-facebook"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="" class="my-skype"><i class="fa fa-skype"></i></a></li>
                        <li><a href="" class="my-pint"><i class="fa fa-pinterest"></i></a></li>
                        <li><a href="" class="my-rss"><i class="fa fa-rss"></i></a></li>
                        <li><a href="" class="my-google"><i class="fa fa-google-plus"></i></a></li>
                    </ul>
				
                    <span class="hidden-xs"><i class="fa fa-phone"></i>Phone:  02118-254620</span>
                    <span class="hidden-xs"><i class="fa fa-envelope"></i>Email: svems.kalamb@dkkkpsvems.com</span>
                </div>
-->	
            </div>
        </div>
    </div>
        <div class="pixel-header">
           
        </div>

        <!-- Navigation
================================================== -->
<br><br><br>
        <div class="navbar navbar-default navbar-static-top container" role="navigation">
            <!--  <div class="container">-->
            <div class="row">
               
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
					<?php
					  $pageName = basename($_SERVER['PHP_SELF']);
					  if($pageName == "index.php")
							{
							echo "<li class='active'><a href='index.php'>Home</a></li>";
							echo "<li><a href='#'>About Us</a>";
								echo "<ul class='dropdown-menu'>";
									echo "<li><a href='intro.php'><img src='images/arrow.png' border='0'>Introduction To School</a></li>";
									echo "<li><a href='aboutdkkkp.php'><img src='images/arrow.png' border='0'>About DKKKP</a></li>";
									echo "<li><a href='presidentsmessage.php'><img src='images/arrow.png' border='0'>Presidents Message</a></li>";
									echo "<li><a href='secretarymessage.php'><img src='images/arrow.png' border='0'>Secretary Message</a></li>";
									echo "<li><a href='ceomessage.php'><img src='images/arrow.png' border='0'>CEO Message</a></li>";
									echo "<li><a href='principalmessage.php'><img src='images/arrow.png' border='0'>Principal Message</a></li>";
									echo "<li><a href='missionvision.php'><img src='images/arrow.png' border='0'>Mision and Vision</a></li>";
								echo "</ul>";
							echo "</li>";
							echo "<li><a href='#'>Infrastructure</a>";
							    echo "<ul class='dropdown-menu'>";
									echo "<li><a href='computerlab.php'><img src='images/arrow.png' border='0'>Computer Lab</a></li>";
									echo "<li><a href='library.php'><img src='images/arrow.png' border='0'>Library</a></li>";
									echo "<li><a href='guesthouse.php'><img src='images/arrow.png' border='0'>Guest House</a></li>";
									echo "<li><a href='boyshostel.php'><img src='images/arrow.png' border='0'>Boys Hostel</a></li>";
									echo "<li><a href='transport.php'><img src='images/arrow.png' border='0'>Transport</a></li>";	
									echo "<li><a href='canteen.php'><img src='images/arrow.png' border='0'>Mess and Canteen</a></li>";	
							    echo "</ul>";
							echo "</li>";	
							echo "<li><a href='#'>Faculty</a>";
								echo "<ul class='dropdown-menu'>";
									echo "<li><a href='teaching.php'><img src='images/arrow.png' border='0'>Teaching Staff</a></li>";
									echo "<li><a href='nonteaching.php'><img src='images/arrow.png' border='0'>Non Teaching  Staff</a></li>";
									echo "<li><a href='supporting.php'><img src='images/arrow.png' border='0'>Supporting Staff</a></li>";
									echo "<li><a href='career.php'><img src='images/arrow.png' border='0'>Career Opportunities</a></li>";
								echo "</ul>";
							echo "</li>";
							echo "<li><a href='#'>Admissions</a>";
								echo "<ul class='dropdown-menu'>";
									echo "<li><a href='admissionprocedure.php'><img src='images/arrow.png' border='0'>Admission Procedure</a></li>";
									echo "<li><a href='brochure.php'><img src='images/arrow.png' border='0'>Brochure</a></li>";
								echo "</ul>";
							echo "</li>";
							echo "<li><a href='activities.php'>Activities</a></li>";
							echo "<li><a href='reslife.php'>Boarding Facility</a></li>";
							echo "<li><a href='gallery.php'>Photo Gallery</a></li>";
							echo "<li><a href='contactus.php'>Contact Us</a></li>";
							}
					if($pageName == "intro.php" || $pageName == "aboutdkkkp.php" || $pageName == "presidentsmessage.php" ||  $pageName == "secretarymessage.php" || $pageName == "ceomessage.php" || $pageName == "principalmessage.php" || $pageName == "missionvision.php")
							{
							echo "<li><a href='index.php'>Home</a></li>";
							echo "<li class='active'><a href='#'>About Us</a>";
								echo "<ul class='dropdown-menu'>";
									echo "<li><a href='intro.php'><img src='images/arrow.png' border='0'>Introduction To School</a></li>";
									echo "<li><a href='aboutdkkkp.php'><img src='images/arrow.png' border='0'>About DKKKP</a></li>";
									echo "<li><a href='presidentsmessage.php'><img src='images/arrow.png' border='0'>Presidents Message</a></li>";
									echo "<li><a href='secretarymessage.php'><img src='images/arrow.png' border='0'>Secretary Message</a></li>";
									echo "<li><a href='ceomessage.php'><img src='images/arrow.png' border='0'>CEO Message</a></li>";
									echo "<li><a href='principalmessage.php'><img src='images/arrow.png' border='0'>Principal Message</a></li>";
									echo "<li><a href='missionvision.php'><img src='images/arrow.png' border='0'>Mision and Vision</a></li>";
								echo "</ul>";
							echo "</li>";
							echo "<li><a href='#'>Infrastructure</a>";
							    echo "<ul class='dropdown-menu'>";
									echo "<li><a href='computerlab.php'><img src='images/arrow.png' border='0'>Computer Lab</a></li>";
									echo "<li><a href='library.php'><img src='images/arrow.png' border='0'>Library</a></li>";
									echo "<li><a href='guesthouse.php'><img src='images/arrow.png' border='0'>Guest House</a></li>";
									echo "<li><a href='boyshostel.php'><img src='images/arrow.png' border='0'>Boys Hostel</a></li>";
									echo "<li><a href='transport.php'><img src='images/arrow.png' border='0'>Transport</a></li>";	
									echo "<li><a href='canteen.php'><img src='images/arrow.png' border='0'>Mess and Canteen</a></li>";	
							    echo "</ul>";
							echo "</li>";
							echo "<li><a href='#'>Faculty</a>";
								echo "<ul class='dropdown-menu'>";
									echo "<li><a href='teaching.php'><img src='images/arrow.png' border='0'>Teaching Staff</a></li>";
									echo "<li><a href='nonteaching.php'><img src='images/arrow.png' border='0'>Non Teaching  Staff</a></li>";
									echo "<li><a href='supporting.php'><img src='images/arrow.png' border='0'>Supporting Staff</a></li>";
									echo "<li><a href='career.php'><img src='images/arrow.png' border='0'>Career Opportunities</a></li>";
								echo "</ul>";
							echo "</li>";
							echo "<li><a href='#'>Admissions</a>";
								echo "<ul class='dropdown-menu'>";
									echo "<li><a href='admissionprocedure.php'><img src='images/arrow.png' border='0'>Admission Procedure</a></li>";
									echo "<li><a href='brochure.php'><img src='images/arrow.png' border='0'>Brochure</a></li>";
								echo "</ul>";
							echo "</li>";
							echo "<li><a href='activities.php'>Activities</a></li>";
							echo "<li><a href='reslife.php'>Boarding Facility</a></li>";
							echo "<li><a href='gallery.php'>Photo Gallery</a></li>";
							echo "<li><a href='contactus.php'>Contact Us</a></li>";
							}
					  if($pageName == "computerlab.php" || $pageName == "boyshostel.php" || $pageName == "library.php" || $pageName == "guesthouse.php" || $pageName == "transport.php" || $pageName == "canteen.php")
							{
							echo "<li><a href='index.php'>Home</a></li>";
							echo "<li><a href='#'>About Us</a>";
								echo "<ul class='dropdown-menu'>";
									echo "<li><a href='intro.php'><img src='images/arrow.png' border='0'>Introduction To School</a></li>";
									echo "<li><a href='aboutdkkkp.php'><img src='images/arrow.png' border='0'>About DKKKP</a></li>";
									echo "<li><a href='presidentsmessage.php'><img src='images/arrow.png' border='0'>Presidents Message</a></li>";
									echo "<li><a href='secretarymessage.php'><img src='images/arrow.png' border='0'>Secretary Message</a></li>";
									echo "<li><a href='ceomessage.php'><img src='images/arrow.png' border='0'>CEO Message</a></li>";
									echo "<li><a href='principalmessage.php'><img src='images/arrow.png' border='0'>Principal Message</a></li>";
									echo "<li><a href='missionvision.php'><img src='images/arrow.png' border='0'>Mision and Vision</a></li>";
								echo "</ul>";
							echo "</li>";
							echo "<li class='active'><a href='#'>Infrastructure</a>";
							    echo "<ul class='dropdown-menu'>";
									echo "<li><a href='computerlab.php'><img src='images/arrow.png' border='0'>Computer Lab</a></li>";
									echo "<li><a href='library.php'><img src='images/arrow.png' border='0'>Library</a></li>";
									echo "<li><a href='guesthouse.php'><img src='images/arrow.png' border='0'>Guest House</a></li>";
									echo "<li><a href='boyshostel.php'><img src='images/arrow.png' border='0'>Boys Hostel</a></li>";
									echo "<li><a href='transport.php'><img src='images/arrow.png' border='0'>Transport</a></li>";	
									echo "<li><a href='canteen.php'><img src='images/arrow.png' border='0'>Mess and Canteen</a></li>";	
							    echo "</ul>";
							echo "</li>";
							echo "<li><a href='#'>Faculty</a>";
								echo "<ul class='dropdown-menu'>";
									echo "<li><a href='teaching.php'><img src='images/arrow.png' border='0'>Teaching Staff</a></li>";
									echo "<li><a href='nonteaching.php'><img src='images/arrow.png' border='0'>Non Teaching  Staff</a></li>";
									echo "<li><a href='supporting.php'><img src='images/arrow.png' border='0'>Supporting Staff</a></li>";
									echo "<li><a href='career.php'><img src='images/arrow.png' border='0'>Career Opportunities</a></li>";
								echo "</ul>";
							echo "</li>";
							echo "<li><a href='#'>Admissions</a>";
								echo "<ul class='dropdown-menu'>";
									echo "<li><a href='admissionprocedure.php'><img src='images/arrow.png' border='0'>Admission Procedure</a></li>";
									echo "<li><a href='brochure.php'><img src='images/arrow.png' border='0'>Brochure</a></li>";
								echo "</ul>";
							echo "</li>";
							echo "<li><a href='activities.php'>Activities</a></li>";
							echo "<li><a href='reslife.php'>Boarding Facility</a></li>";
							echo "<li><a href='gallery.php'>Photo Gallery</a></li>";
							echo "<li><a href='contactus.php'>Contact Us</a></li>";
							}	
					if($pageName == "teaching.php" || $pageName == "nonteaching.php" || $pageName == "supporting.php" || $pageName == "career.php")
							{
							echo "<li><a href='index.php'>Home</a></li>";
							echo "<li><a href='#'>About Us</a>";
								echo "<ul class='dropdown-menu'>";
									echo "<li><a href='intro.php'><img src='images/arrow.png' border='0'>Introduction To School</a></li>";
									echo "<li><a href='aboutdkkkp.php'><img src='images/arrow.png' border='0'>About DKKKP</a></li>";
									echo "<li><a href='presidentsmessage.php'><img src='images/arrow.png' border='0'>Presidents Message</a></li>";
									echo "<li><a href='secretarymessage.php'><img src='images/arrow.png' border='0'>Secretary Message</a></li>";
									echo "<li><a href='ceomessage.php'><img src='images/arrow.png' border='0'>CEO Message</a></li>";
									echo "<li><a href='principalmessage.php'><img src='images/arrow.png' border='0'>Principal Message</a></li>";
									echo "<li><a href='missionvision.php'><img src='images/arrow.png' border='0'>Mision and Vision</a></li>";
								echo "</ul>";
							echo "</li>";
							echo "<li><a href='#'>Infrastructure</a>";
							    echo "<ul class='dropdown-menu'>";
									echo "<li><a href='computerlab.php'><img src='images/arrow.png' border='0'>Computer Lab</a></li>";
									echo "<li><a href='library.php'><img src='images/arrow.png' border='0'>Library</a></li>";
									echo "<li><a href='guesthouse.php'><img src='images/arrow.png' border='0'>Guest House</a></li>";
									echo "<li><a href='boyshostel.php'><img src='images/arrow.png' border='0'>Boys Hostel</a></li>";
									echo "<li><a href='transport.php'><img src='images/arrow.png' border='0'>Transport</a></li>";	
									echo "<li><a href='canteen.php'><img src='images/arrow.png' border='0'>Mess and Canteen</a></li>";	
							    echo "</ul>";
							echo "</li>";
							echo "<li class='active'><a href='#'>Faculty</a>";
								echo "<ul class='dropdown-menu'>";
									echo "<li><a href='teaching.php'><img src='images/arrow.png' border='0'>Teaching Staff</a></li>";
									echo "<li><a href='nonteaching.php'><img src='images/arrow.png' border='0'>Non Teaching  Staff</a></li>";
									echo "<li><a href='supporting.php'><img src='images/arrow.png' border='0'>Supporting Staff</a></li>";
									echo "<li><a href='career.php'><img src='images/arrow.png' border='0'>Career Opportunities</a></li>";
								echo "</ul>";
							echo "</li>";
							echo "<li><a href='#'>Admissions</a>";
								echo "<ul class='dropdown-menu'>";
									echo "<li><a href='admissionprocedure.php'><img src='images/arrow.png' border='0'>Admission Procedure</a></li>";
									echo "<li><a href='brochure.php'><img src='images/arrow.png' border='0'>Brochure</a></li>";
								echo "</ul>";
							echo "</li>";
							echo "<li><a href='activities.php'>Activities</a></li>";
							echo "<li><a href='reslife.php'>Boarding Facility</a></li>";
							echo "<li><a href='gallery.php'>Photo Gallery</a></li>";
							echo "<li><a href='contactus.php'>Contact Us</a></li>";
							}	
					if($pageName == "admissionprocedure.php" || $pageName == "brochure.php")
							{
							echo "<li><a href='index.php'>Home</a></li>";
							echo "<li><a href='#'>About Us</a>";
								echo "<ul class='dropdown-menu'>";
									echo "<li><a href='intro.php'><img src='images/arrow.png' border='0'>Introduction To School</a></li>";
									echo "<li><a href='aboutdkkkp.php'><img src='images/arrow.png' border='0'>About DKKKP</a></li>";
									echo "<li><a href='presidentsmessage.php'><img src='images/arrow.png' border='0'>Presidents Message</a></li>";
									echo "<li><a href='secretarymessage.php'><img src='images/arrow.png' border='0'>Secretary Message</a></li>";
									echo "<li><a href='ceomessage.php'><img src='images/arrow.png' border='0'>CEO Message</a></li>";
									echo "<li><a href='principalmessage.php'><img src='images/arrow.png' border='0'>Principal Message</a></li>";
									echo "<li><a href='missionvision.php'><img src='images/arrow.png' border='0'>Mision and Vision</a></li>";
								echo "</ul>";
							echo "</li>";
							echo "<li><a href='#'>Infrastructure</a>";
							    echo "<ul class='dropdown-menu'>";
									echo "<li><a href='computerlab.php'><img src='images/arrow.png' border='0'>Computer Lab</a></li>";
									echo "<li><a href='library.php'><img src='images/arrow.png' border='0'>Library</a></li>";
									echo "<li><a href='guesthouse.php'><img src='images/arrow.png' border='0'>Guest House</a></li>";
									echo "<li><a href='boyshostel.php'><img src='images/arrow.png' border='0'>Boys Hostel</a></li>";
									echo "<li><a href='transport.php'><img src='images/arrow.png' border='0'>Transport</a></li>";	
									echo "<li><a href='canteen.php'><img src='images/arrow.png' border='0'>Mess and Canteen</a></li>";	
							    echo "</ul>";
							echo "</li>";
							echo "<li><a href='#'>Faculty</a>";
								echo "<ul class='dropdown-menu'>";
									echo "<li><a href='teaching.php'><img src='images/arrow.png' border='0'>Teaching Staff</a></li>";
									echo "<li><a href='nonteaching.php'><img src='images/arrow.png' border='0'>Non Teaching  Staff</a></li>";
									echo "<li><a href='supporting.php'><img src='images/arrow.png' border='0'>Supporting Staff</a></li>";
									echo "<li><a href='career.php'><img src='images/arrow.png' border='0'>Career Opportunities</a></li>";
								echo "</ul>";
							echo "</li>";
							echo "<li class='active'><a href='#'>Admissions</a>";
								echo "<ul class='dropdown-menu'>";
									echo "<li><a href='admissionprocedure.php'><img src='images/arrow.png' border='0'>Admission Procedure</a></li>";
									echo "<li><a href='brochure.php'><img src='images/arrow.png' border='0'>Brochure</a></li>";
								echo "</ul>";
							echo "</li>";
							echo "<li><a href='activities.php'>Activities</a></li>";
							echo "<li><a href='reslife.php'>Boarding Facility</a></li>";
							echo "<li><a href='gallery.php'>Photo Gallery</a></li>";
							echo "<li><a href='contactus.php'>Contact Us</a></li>";
							}	
					if($pageName == "activities.php")
							{
							echo "<li><a href='index.php'>Home</a></li>";
							echo "<li><a href='#'>About Us</a>";
								echo "<ul class='dropdown-menu'>";
									echo "<li><a href='intro.php'><img src='images/arrow.png' border='0'>Introduction To School</a></li>";
									echo "<li><a href='aboutdkkkp.php'><img src='images/arrow.png' border='0'>About DKKKP</a></li>";
									echo "<li><a href='presidentsmessage.php'><img src='images/arrow.png' border='0'>Presidents Message</a></li>";
									echo "<li><a href='secretarymessage.php'><img src='images/arrow.png' border='0'>Secretary Message</a></li>";
									echo "<li><a href='ceomessage.php'><img src='images/arrow.png' border='0'>CEO Message</a></li>";
									echo "<li><a href='principalmessage.php'><img src='images/arrow.png' border='0'>Principal Message</a></li>";
									echo "<li><a href='missionvision.php'><img src='images/arrow.png' border='0'>Mision and Vision</a></li>";
								echo "</ul>";
							echo "</li>";
							echo "<li><a href='#'>Infrastructure</a>";
							    echo "<ul class='dropdown-menu'>";
									echo "<li><a href='computerlab.php'><img src='images/arrow.png' border='0'>Computer Lab</a></li>";
									echo "<li><a href='library.php'><img src='images/arrow.png' border='0'>Library</a></li>";
									echo "<li><a href='guesthouse.php'><img src='images/arrow.png' border='0'>Guest House</a></li>";
									echo "<li><a href='boyshostel.php'><img src='images/arrow.png' border='0'>Boys Hostel</a></li>";
									echo "<li><a href='transport.php'><img src='images/arrow.png' border='0'>Transport</a></li>";	
									echo "<li><a href='canteen.php'><img src='images/arrow.png' border='0'>Mess and Canteen</a></li>";	
							    echo "</ul>";
							echo "</li>";
							echo "<li><a href='#'>Faculty</a>";
								echo "<ul class='dropdown-menu'>";
									echo "<li><a href='teaching.php'><img src='images/arrow.png' border='0'>Teaching Staff</a></li>";
									echo "<li><a href='nonteaching.php'><img src='images/arrow.png' border='0'>Non Teaching  Staff</a></li>";
									echo "<li><a href='supporting.php'><img src='images/arrow.png' border='0'>Supporting Staff</a></li>";
									echo "<li><a href='career.php'><img src='images/arrow.png' border='0'>Career Opportunities</a></li>";
								echo "</ul>";
							echo "</li>";
							echo "<li><a href='#'>Admissions</a>";
								echo "<ul class='dropdown-menu'>";
									echo "<li><a href='admissionprocedure.php'>Admission Procedure</a></li>";
									echo "<li><a href='brochure.php'>Brochure</a></li>";
								echo "</ul>";
							echo "</li>";
							echo "<li class='active'><a href='activities.php'>Activities</a></li>";
							echo "<li><a href='reslife.php'>Boarding Facility</a></li>";
							echo "<li><a href='gallery.php'>Photo Gallery</a></li>";
							echo "<li><a href='contactus.php'>Contact Us</a></li>";
							}	
					if($pageName == "reslife.php")
							{
							echo "<li><a href='index.php'>Home</a></li>";
							echo "<li><a href='#'>About Us</a>";
								echo "<ul class='dropdown-menu'>";
									echo "<li><a href='intro.php'><img src='images/arrow.png' border='0'>Introduction To School</a></li>";
									echo "<li><a href='aboutdkkkp.php'><img src='images/arrow.png' border='0'>About DKKKP</a></li>";
									echo "<li><a href='presidentsmessage.php'><img src='images/arrow.png' border='0'>Presidents Message</a></li>";
									echo "<li><a href='secretarymessage.php'><img src='images/arrow.png' border='0'>Secretary Message</a></li>";
									echo "<li><a href='ceomessage.php'><img src='images/arrow.png' border='0'>CEO Message</a></li>";
									echo "<li><a href='principalmessage.php'><img src='images/arrow.png' border='0'>Principal Message</a></li>";
									echo "<li><a href='missionvision.php'><img src='images/arrow.png' border='0'>Mision and Vision</a></li>";
								echo "</ul>";
							echo "</li>";
							echo "<li><a href='#'>Infrastructure</a>";
							    echo "<ul class='dropdown-menu'>";
									echo "<li><a href='computerlab.php'><img src='images/arrow.png' border='0'>Computer Lab</a></li>";
									echo "<li><a href='library.php'><img src='images/arrow.png' border='0'>Library</a></li>";
									echo "<li><a href='guesthouse.php'><img src='images/arrow.png' border='0'>Guest House</a></li>";
									echo "<li><a href='boyshostel.php'><img src='images/arrow.png' border='0'>Boys Hostel</a></li>";
									echo "<li><a href='transport.php'><img src='images/arrow.png' border='0'>Transport</a></li>";	
									echo "<li><a href='canteen.php'><img src='images/arrow.png' border='0'>Mess and Canteen</a></li>";	
							    echo "</ul>";
							echo "</li>";
							echo "<li><a href='#'>Faculty</a>";
								echo "<ul class='dropdown-menu'>";
									echo "<li><a href='teaching.php'><img src='images/arrow.png' border='0'>Teaching Staff</a></li>";
									echo "<li><a href='nonteaching.php'><img src='images/arrow.png' border='0'>Non Teaching  Staff</a></li>";
									echo "<li><a href='supporting.php'><img src='images/arrow.png' border='0'>Supporting Staff</a></li>";
									echo "<li><a href='career.php'><img src='images/arrow.png' border='0'>Career Opportunities</a></li>";
								echo "</ul>";
							echo "</li>";
							echo "<li><a href='#'>Admissions</a>";
								echo "<ul class='dropdown-menu'>";
									echo "<li><a href='admissionprocedure.php'><img src='images/arrow.png' border='0'>Admission Procedure</a></li>";
									echo "<li><a href='brochure.php'><img src='images/arrow.png' border='0'>Brochure</a></li>";
								echo "</ul>";
							echo "</li>";
							echo "<li><a href='activities.php'>Activities</a></li>";
							echo "<li class='active'><a href='reslife.php'>Boarding Facility</a></li>";
							echo "<li><a href='gallery.php'>Photo Gallery</a></li>";
							echo "<li><a href='contactus.php'>Contact Us</a></li>";
							}		
					if($pageName == "gallery.php")
							{
							echo "<li><a href='index.php'>Home</a></li>";
							echo "<li><a href='#'>About Us</a>";
								echo "<ul class='dropdown-menu'>";
									echo "<li><a href='intro.php'><img src='images/arrow.png' border='0'>Introduction To School</a></li>";
									echo "<li><a href='aboutdkkkp.php'><img src='images/arrow.png' border='0'>About DKKKP</a></li>";
									echo "<li><a href='presidentsmessage.php'><img src='images/arrow.png' border='0'>Presidents Message</a></li>";
									echo "<li><a href='secretarymessage.php'><img src='images/arrow.png' border='0'>Secretary Message</a></li>";
									echo "<li><a href='ceomessage.php'><img src='images/arrow.png' border='0'>CEO Message</a></li>";
									echo "<li><a href='principalmessage.php'><img src='images/arrow.png' border='0'>Principal Message</a></li>";
									echo "<li><a href='missionvision.php'><img src='images/arrow.png' border='0'>Mision and Vision</a></li>";
								echo "</ul>";
							echo "</li>";
							echo "<li><a href='#'>Infrastructure</a>";
							    echo "<ul class='dropdown-menu'>";
									echo "<li><a href='computerlab.php'><img src='images/arrow.png' border='0'>Computer Lab</a></li>";
									echo "<li><a href='library.php'><img src='images/arrow.png' border='0'>Library</a></li>";
									echo "<li><a href='guesthouse.php'><img src='images/arrow.png' border='0'>Guest House</a></li>";
									echo "<li><a href='boyshostel.php'><img src='images/arrow.png' border='0'>Boys Hostel</a></li>";
									echo "<li><a href='transport.php'><img src='images/arrow.png' border='0'>Transport</a></li>";	
									echo "<li><a href='canteen.php'><img src='images/arrow.png' border='0'>Mess and Canteen</a></li>";	
							    echo "</ul>";
							echo "</li>";
							echo "<li><a href='#'>Faculty</a>";
								echo "<ul class='dropdown-menu'>";
									echo "<li><a href='teaching.php'><img src='images/arrow.png' border='0'>Teaching Staff</a></li>";
									echo "<li><a href='nonteaching.php'><img src='images/arrow.png' border='0'>Non Teaching  Staff</a></li>";
									echo "<li><a href='supporting.php'><img src='images/arrow.png' border='0'>Supporting Staff</a></li>";
									echo "<li><a href='career.php'><img src='images/arrow.png' border='0'>Career Opportunities</a></li>";
								echo "</ul>";
							echo "</li>";
							echo "<li><a href='#'>Admissions</a>";
								echo "<ul class='dropdown-menu'>";
									echo "<li><a href='admissionprocedure.php'><img src='images/arrow.png' border='0'>Admission Procedure</a></li>";
									echo "<li><a href='brochure.php'><img src='images/arrow.png' border='0'>Brochure</a></li>";
								echo "</ul>";
							echo "</li>";
							echo "<li><a href='activities.php'>Activities</a></li>";
							echo "<li><a href='reslife.php'>Boarding Facility</a></li>";
							echo "<li class='active'><a href='gallery.php'>Photo Gallery</a></li>";
							echo "<li><a href='contactus.php'>Contact Us</a></li>";
							}
					if($pageName == "contactus.php")
							{
							echo "<li><a href='index.php'>Home</a></li>";
							echo "<li><a href='#'>About Us</a>";
								echo "<ul class='dropdown-menu'>";
									echo "<li><a href='intro.php'><img src='images/arrow.png' border='0'>Introduction To School</a></li>";
									echo "<li><a href='aboutdkkkp.php'><img src='images/arrow.png' border='0'>About DKKKP</a></li>";
									echo "<li><a href='presidentsmessage.php'><img src='images/arrow.png' border='0'>Presidents Message</a></li>";
									echo "<li><a href='secretarymessage.php'><img src='images/arrow.png' border='0'>Secretary Message</a></li>";
									echo "<li><a href='ceomessage.php'><img src='images/arrow.png' border='0'>CEO Message</a></li>";
									echo "<li><a href='principalmessage.php'><img src='images/arrow.png' border='0'>Principal Message</a></li>";
									echo "<li><a href='missionvision.php'><img src='images/arrow.png' border='0'>Mision and Vision</a></li>";
								echo "</ul>";
							echo "</li>";
							echo "<li><a href='#'>Infrastructure</a>";
							    echo "<ul class='dropdown-menu'>";
									echo "<li><a href='computerlab.php'><img src='images/arrow.png' border='0'>Computer Lab</a></li>";
									echo "<li><a href='library.php'><img src='images/arrow.png' border='0'>Library</a></li>";
									echo "<li><a href='guesthouse.php'><img src='images/arrow.png' border='0'>Guest House</a></li>";
									echo "<li><a href='boyshostel.php'><img src='images/arrow.png' border='0'>Boys Hostel</a></li>";
									echo "<li><a href='transport.php'><img src='images/arrow.png' border='0'>Transport</a></li>";	
									echo "<li><a href='canteen.php'><img src='images/arrow.png' border='0'>Mess and Canteen</a></li>";	
							    echo "</ul>";
							echo "</li>";
							echo "<li><a href='#'>Faculty</a>";
								echo "<ul class='dropdown-menu'>";
									echo "<li><a href='teaching.php'><img src='images/arrow.png' border='0'>Teaching Staff</a></li>";
									echo "<li><a href='nonteaching.php'><img src='images/arrow.png' border='0'>Non Teaching  Staff</a></li>";
									echo "<li><a href='supporting.php'><img src='images/arrow.png' border='0'>Supporting Staff</a></li>";
									echo "<li><a href='career.php'><img src='images/arrow.png' border='0'>Career Opportunities</a></li>";
								echo "</ul>";
							echo "</li>";
							echo "<li><a href='#'>Admissions</a>";
								echo "<ul class='dropdown-menu'>";
									echo "<li><a href='admissionprocedure.php'><img src='images/arrow.png' border='0'>Admission Procedure</a></li>";
									echo "<li><a href='brochure.php'><img src='images/arrow.png' border='0'>Brochure</a></li>";
								echo "</ul>";
							echo "</li>";
							echo "<li><a href='activities.php'>Activities</a></li>";
							echo "<li><a href='reslife.php'>Boarding Facility</a></li>";
							echo "<li><a href='gallery.php'>Photo Gallery</a></li>";
							echo "<li class='active'><a href='contactus.php'>Contact Us</a></li>";
							}
					if($pageName == "allnews.php")
							{
							echo "<li><a href='index.php'>Home</a></li>";
							echo "<li><a href='#'>About Us</a>";
								echo "<ul class='dropdown-menu'>";
									echo "<li><a href='intro.php'><img src='images/arrow.png' border='0'>Introduction To School</a></li>";
									echo "<li><a href='aboutdkkkp.php'><img src='images/arrow.png' border='0'>About DKKKP</a></li>";
									echo "<li><a href='presidentsmessage.php'><img src='images/arrow.png' border='0'>Presidents Message</a></li>";
									echo "<li><a href='secretarymessage.php'><img src='images/arrow.png' border='0'>Secretary Message</a></li>";
									echo "<li><a href='ceomessage.php'><img src='images/arrow.png' border='0'>CEO Message</a></li>";
									echo "<li><a href='principalmessage.php'><img src='images/arrow.png' border='0'>Principal Message</a></li>";
									echo "<li><a href='missionvision.php'><img src='images/arrow.png' border='0'>Mision and Vision</a></li>";
								echo "</ul>";
							echo "</li>";
							echo "<li><a href='#'>Infrastructure</a>";
							    echo "<ul class='dropdown-menu'>";
									echo "<li><a href='computerlab.php'><img src='images/arrow.png' border='0'>Computer Lab</a></li>";
									echo "<li><a href='library.php'><img src='images/arrow.png' border='0'>Library</a></li>";
									echo "<li><a href='guesthouse.php'><img src='images/arrow.png' border='0'>Guest House</a></li>";
									echo "<li><a href='boyshostel.php'><img src='images/arrow.png' border='0'>Boys Hostel</a></li>";
									echo "<li><a href='transport.php'><img src='images/arrow.png' border='0'>Transport</a></li>";	
									echo "<li><a href='canteen.php'><img src='images/arrow.png' border='0'>Mess and Canteen</a></li>";	
							    echo "</ul>";
							echo "</li>";
							echo "<li><a href='#'>Faculty</a>";
								echo "<ul class='dropdown-menu'>";
									echo "<li><a href='teaching.php'><img src='images/arrow.png' border='0'>Teaching Staff</a></li>";
									echo "<li><a href='nonteaching.php'><img src='images/arrow.png' border='0'>Non Teaching  Staff</a></li>";
									echo "<li><a href='supporting.php'><img src='images/arrow.png' border='0'>Supporting Staff</a></li>";
									echo "<li><a href='career.php'><img src='images/arrow.png' border='0'>Career Opportunities</a></li>";
								echo "</ul>";
							echo "</li>";
							echo "<li><a href='#'>Admissions</a>";
								echo "<ul class='dropdown-menu'>";
									echo "<li><a href='admissionprocedure.php'><img src='images/arrow.png' border='0'>Admission Procedure</a></li>";
									echo "<li><a href='brochure.php'><img src='images/arrow.png' border='0'>Brochure</a></li>";
								echo "</ul>";
							echo "</li>";
							echo "<li><a href='activities.php'>Activities</a></li>";
							echo "<li><a href='reslife.php'>Boarding Facility</a></li>";
							echo "<li><a href='gallery.php'>Photo Gallery</a></li>";
							echo "<li><a href='contactus.php'>Contact Us</a></li>";
						}		
					?>		
				</ul>
			</div>	
		</div>	
	</div>	
</div>			
</header>	