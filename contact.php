<!DOCTYPE html>
<html>
	<head>
			<!-- Site Title -->
			<title> crndolo </title>
			<!-- Custom Style -->
			<link href="css/styles.css" rel="stylesheet" type="text/css">
			<!-- Bootrstrap CSS -->
			<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
			<!-- Font Awesome -->
			<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css" />
	</head>
	<body>

		<div class="container-fluid main-body">
			
			<div class="row">
				<!-- Three column to display image and menu-->
				<div class="col-md-3 header-section">

					<!-- Twelve column display image and personal Data-->
					<div class="row">
						<div class="col-md-12">
							<h1 class="site-title">
								Raphael Ndolo
							</h1>
							<p class="site-description">
								Full stack Web Developer
							</p>

							<div class="my-profile-pic">
								<img src="images/my_photo.jpg" alt="image">
							</div>						
						</div>

						<div class="col-md-12">
							<div class="site-menu">
								<ul class="nav site-main-nav">
									<li class="start"> <a href="index.php"> About Me </a> </li>
									<li> <a href="resume.php"> Resume </a> </li>
									<li> <a href="portfolio.php"> Portfolio </a> </li>
									<li class="active"> <a href="contact.php"> Contact </a> </li>
								</ul>
							</div>
						</div>

						<div class="col-md-12">
							<div class="social-media">
								<ul class="nav nav-justified">
									<li> <a href="#"> <i class="fa fa-twitter"> </i> </a> </li>
									<li> <a href="#"> <i class="fa fa-facebook"> </i> </a> </li>
									<li> <a href="#"> <i class="fa fa-instagram"> </i> </a> </li>
									<li> <a href="#"> <i class="fa fa-youtube"> </i> </a> </li>					
									<li> <a href="#"> <i class="fa fa-github"> </i> </a> </li>
								</ul>
							</div>
						</div>

					</div>
				</div>

				<!-- Eight column to display site body-->
				<div class="col-md-9 main-body-section">
					
					<div class="row">
						
						<div class="col-md-12">
							<div class="main-body-section-title">
								<h2> Get in Touch </h2>
							</div>						
						</div>
					</div>

					<div class="row">
						
						<div class="col-md-6">
							<div class="what-i-do">
								<div class="block-title">
									<h4> Contact Information </h4>
								</div>
							</div>

							<div class="block-description">
								<p style="padding-bottom:50px; text-align: left;">
									Get in touch using the following contact details or drop me a message using the contact  form provide. 
								</p>

								<p style="font-weight:500; font-size: 17px; text-align: left;">
									<i class="fa fa-map-marker" aria-hidden="true"></i> Nairobi, Kenya.
								</p>

								<p style="font-weight:500; font-size: 17px; text-align: left;">
									<i class="fa fa-envelope" aria-hidden="true"></i> crndolo@gmail.com.
								</p>

								<p style="font-weight:500; font-size: 17px; text-align: left;">
									<i class="fa fa-phone" aria-hidden="true"></i> +254-727-608-883.
								</p>

								<p style="font-weight:500; font-size: 17px; text-align: left;">
									<i class="fa fa-globe" aria-hidden="true"></i> http://www.crndolo.com
								</p>

								<p style="font-weight:500; font-size: 17px; text-align: left;">
									<i class="fa fa-check-circle" aria-hidden="true"></i> Available for Freelancing
								</p>

							</div>
						</div>

						<!-- Begin Contact Form -->
						<div class="col-md-6">					
							<div class="what-i-do">
								<div class="block-title">
									<h4> Contact Form </h4>
								</div>
							</div>
							<!-- Beginning of Contact Form Class -->
							<div class="contact-form">
								<form role="form" method="POST" action="#">
									
									<div class="form-group">                                        
                                        <div class="input-group">                                            
                                            <input type="text" name="fullname" id="fullname" class="form-control" placeholder="Full name"> 
                                        </div>                                        
                                    </div>

                                    <div class="form-group">                                        
                                        <div class="input-group">                                            
                                            <input type="text" name="email" id="email" class="form-control" placeholder="Email"> 
                                        </div>                                        
                                    </div>

                                    <div class="form-group">
                                        <div class="input-group">                                            
                                            <textarea class="form-control" rows="7" placeholder="Message" name="description"></textarea>
                                        </div>
                                    </div>

                                    <div class="form-actions">
                                        <input type="submit" value="Send Message" name="send_message" class="send-button" />                                        
                                    </div>

								</form>
							</div>
							<!-- End of Contactform class -->
						</div>
						<!-- End of Contact Form -->
						
					</div>

				
				</div>
			</div>
		</div>

		<!-- Scripts -->
		<script src="js/jquery-3.3.1.min.js"> </script>          
        <script src="js/bootstrap.min.js"> </script>
	</body>
</html>