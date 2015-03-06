<?php 
@session_start();
include_once('core/core.php');

?>

<!DOCTYPE html>
<html>
  <head>
   	<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link type="text/css" rel="stylesheet" href="css/bootstrap.css" />
	<link href="css/yamm.css" rel="stylesheet">  
	<link type="text/css" rel="stylesheet" href="css/style.css" />

    <style>
		.fym-container{
			float: left;
			width: 100%;
			
		}

		#fym{
			font-family: Arial,Helevetica,sans-serif;
			color: #333;
			position: relative;
			float: left;
			width: 906px;
			border: #fff solid 8px;
			-moz-box-shadow: 0 0 6px rgba(0, 0, 0, 0.5);
			-webkit-box-shadow: 0 0 6px rgba(0, 0, 0, 0.5);
			box-shadow: 0 0 6px rgba(0, 0, 0, 0.5);
			margin: 6px;
			margin-top: 15px;
		}

		.fym-logo{
			margin-top: -28px;
		}
	</style>
  </head>
  <body>
		<div id="fym">
				<div class="content ">
					<div class="fym-container whitening">

						<center><img src="images/fym/logo-fym.png" class="fym-logo"></center>

						<!-- //Step 1: --> 
						<div id="whiteningContainer"></div>
						<div id="acneContainer"></div>
						<div id="garnierMenContainer"></div>
						<div id="hairContainer"></div>
						
					</div>
				</div>
			
		</div>

<?php
//Step 1:
include('hazrat/_includes/whitening-template.php');
include('hazrat/_includes/acne-template.php');
include('hazrat/_includes/garniermen-template.php');
include('hazrat/_includes/hair-template.php');
?>

	<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
	
	<p>
		<a href="hazrat-test-whitening.php">Whitening component</a> | 
		<a href="hazrat-test-acne.php">Acne component</a> | 
		<a href="hazrat-test-garnierman.php">Garnier Man component</a> | 
		<a href="hazrat-test-hair.php">Hair component</a> | 
	</p>

    <script src="http://code.jquery.com/jquery-latest.js"></script>
    <script src="js/bootstrap.min.js"></script>
	<script src="hazrat/js/jquery.bootstrap.wizard.js"></script>

	<!-- //Step 1: -->
	<script src="hazrat/js/jquery.garnierWhitening.js"></script>
	<script src="hazrat/js/jquery.garnierAcne.js"></script>
	<script src="hazrat/js/jquery.garnierMen.js"></script>
	<script src="hazrat/js/jquery.garnierHair.js"></script>

	<script type="text/javascript" src="hazrat/js/app-hair.js"></script>

</body>
</html>