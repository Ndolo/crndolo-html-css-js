<!-- Beginning of Main Body class -->
<div class="container-fluid main-body">
    <!-- Beginning of row class -->
    <div class="row">
        
        <!-- Beginning of Three column to display image and menu-->
        <div class="col-md-3 header-section">

            <!-- Begin Twelve column display image and personal Data-->
            <div class="row">
                
                <!-- Start of col-md-12 -->
                <div class="col-md-12">
                        <h1 class="site-title">
                                Raphael Ndolo
                        </h1>
                        <p class="site-description">
                                Full stack Web Developer
                        </p>

                        <div class="my-profile-pic">
                            <img src="images/my-photo/my_photo.jpg" class="img-circle img-responsive center-block" alt="image">
                        </div>						
                </div>
                <!-- End of col-md-12 -->
                
                <!-- Start of col-md-12 -->
                <div class="col-md-12">
                    <div class="site-menu">
                        
                        <!-- Begin of menu list -->
                        <ul class="menu">
                            <li class="<?php echo $index; ?>" > <a href="index.php">About</a></li>
                            <li> <div class="top-links"> Portfolio <i class="right-icon fa fa-chevron-down" ></i> </div> 
                                <ul>
                                    <li class="<?php echo $portfolio; ?>"> <a href="web_design.php"> Web Designs </a> </li>
                                    <li class="<?php echo $portfolio; ?>"> <a href="portfolio.php"> Sites Developed </a> </li>
                                    <li class="<?php echo $portfolio; ?>"> <a href="portfolio.php"> Video Tutorials </a> </li>
                                </ul>
                            </li>
                            <li class="<?php echo $resume; ?>" > <a href="resume.php">Resume</a></li>
                            <li class="<?php echo $contact; ?>" > <a href="contact.php">Contact Me</a></li>
                        </ul>
                        <!-- End of menu list -->
                    </div>
                </div>
                <!-- End of col-md-12 -->

                <!-- Start of col-md-12 -->
                <div class="col-md-12">
                    <div class="social-media">
                        <ul class="nav">
                            <li class="twitter_account"> <a href="https://twitter.com/crndolo"> <i class="fa fa-twitter"> </i> </a> </li>
                            <!--<li> <a href="#"> <i class="fa fa-facebook"> </i> </a> </li>
                            <li> <a href="#"> <i class="fa fa-instagram"> </i> </a> </li>-->
                            <li class="youtube_account"> <a href="https://www.youtube.com/channel/UCm8TMlKvLg5m8SPuisQDOOg?disable_polymer=true"> <i class="fa fa-youtube"> </i> </a> </li>	
                            <li class="github_account"> <a href="https://github.com/ndolocr" > <i class="fa fa-github"> </i> </a> </li>
                        </ul>
                    </div>
                </div>
                <!-- End of col-md-12 -->

            </div>
            <!-- End of row -->
        </div>
        <!-- End ofThree column to display image and menu-->
