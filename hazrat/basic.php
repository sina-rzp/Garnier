<?php 
@session_start();
include_once('../core/core.php');

?>

<!DOCTYPE html>
<html>
  <head>
   	<link href="../font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link type="text/css" rel="stylesheet" href="../css/bootstrap.css" />
	<link href="../css/yamm.css" rel="stylesheet">  
	<link type="text/css" rel="stylesheet" href="../css/style.css" />

    <!-- Bootstrap -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body>
    <div class='container'>

		<div id="fym">
				<div class="content ">
					<div class="fym-container whitening">

						<center><img src="../images/fym/logo-fym.png" class="fym-logo"></center>

						<!-- //Step 1: --> 
						<div id="whiteningContainer"></div>
						<div id="acneContainer"></div>
						<div id="garnierMenContainer"></div>
						<div id="hairContainer"></div>
						
					</div>
				</div>
			
		</div>

	</div>

<?php
//Step 1:
include('_includes/whitening-template.php');
include('_includes/acne-template.php');
include('_includes/garniermen-template.php');
include('_includes/hair-template.php');
?>

    <script src="http://code.jquery.com/jquery-latest.js"></script>
    <script src="../js/bootstrap.min.js"></script>
	<script src="js/jquery.bootstrap.wizard.js"></script>

	<!-- //Step 1: -->
	<script src="js/jquery.garnierWhitening.js"></script>
	<script src="js/jquery.garnierAcne.js"></script>
	<script src="js/jquery.garnierMen.js"></script>
	<script src="js/jquery.garnierHair.js"></script>

	<script type="text/javascript" src="js/app.js"></script>

</body>
</html>