<?php include("include_files/head.php"); ?>
<?php 
	//Variable to deternime active menu
	$index 		= "";
	$contact 	= "";
	$portfolio 	= "active";
	$resume 	= "";

?>	
<?php include("include_files/sidebar.php"); ?>

<!-- Eight column to display site body-->
<div class="col-md-9 main-body-section">
	
	<div class="row">
		<div class="col-xs-12">
			<div class="main-body-section-title">
				<h2> Portfolio </h2>
			</div>							
		</div>
	</div>

	<div class="row portfolios">
		
		<div class="col-md-4">
			<a href="#">								
				<div class="ports web_design_1">
					<div class="ports-content">
						Titanic Tours & Travel Theme
					</div>	
				</div>
				

			</a>
		</div>

		<div class="col-md-4">	
			<a href="#">							
				<div class="ports web_design_2">
					<div class="ports-content">
						Hikemaniak Theme
					</div>
				</div>	
			</a>														
		</div>	

	</div>

</div>

<?php include("include_files/footer.php"); ?>