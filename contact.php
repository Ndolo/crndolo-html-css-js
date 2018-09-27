<?php include("include_files/head.php"); ?>
<?php 
	//Variable to deternime active menu
	$index 		= "";
	$contact 	= "active";
	$portfolio 	= "";
	$resume 	= "";

?>	
<?php include("include_files/sidebar.php"); ?>

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

<?php include("include_files/footer.php"); ?>