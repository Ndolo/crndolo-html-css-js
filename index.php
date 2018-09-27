<?php include("include_files/head.php"); ?>
<?php 
	//Variable to deternime active menu
	$index 		= "active";
	$contact 	= "";
	$portfolio 	= "";
	$resume 	= "";

?>	
<?php include("include_files/sidebar.php"); ?>

<!-- Eight column to display site body-->
<div class="col-md-9 main-body-section">
	
	<div class="row">
		<div class="col-md-12">
			<div class="main-body-section-title">
				<h2> About Me </h2>
			</div>

			<div class="main-body-section-about-me">
				<h3> I am a fullstack web developer </h3>
				<p>
					With more than four years experience in web development, I have slowly developed my skills from a fron end web developer to a fullstack web developer, developing websites using HTML, CSS, Javascript, PHP and Python. I can also develop websites using Django, a python Framework. In additon, I can also develop sites using Content Managemen Systems like Wordpress.
				</p>
				<p>
				 Contact me and let's work together.
				</p>
			</div>

		</div>
	</div>

	<div class="row">
		
		<div class="col-md-12">
			<div class="what-i-do">
				<div class="block-title">
					<h3> What I do </h3>
				</div>
			</div>
		</div>					
		
	</div>

	<div class="row">

		<div class="col-md-4">
			<div class="block-description">
				<div class="block-image">
					<img src="images/what-i-do/hiking.png">
				</div>
				<h4> Wed Design </h4>
				<p>
					Before any software is created, the design process is very vital to ensure we see the goal we ought to achieve. With three years experince in design, I offer you the best custom made design for your software needs.
				</p>
			</div>
		</div>

		<div class="col-md-4">
			<div class="block-description">
				<div class="block-image">
					<img src="images/what-i-do/development.png">
				</div>
				<h4> Web Development </h4>
				<p>
					I do both front end and backend web development, having a good mastery of HTML, CSS, Javascript, PHP and Python programming languages.
				</p>
			</div>
		</div>

		<div class="col-md-4">
			<div class="block-description">
				<div class="block-image">
					<img src="images/what-i-do/video-editing.png">
				</div>
				<h4> Videos Tutorials </h4>
				<p>
					With three years lecturing web development, I have created video tutorials that will help share the development skills I have learnt.
				</p>
			</div>
		</div>		

	</div>

</div>

<?php include("include_files/footer.php"); ?>