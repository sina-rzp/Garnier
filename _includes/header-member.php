<?php
@session_start();
include_once('core/core.php');

if(!isset($_SESSION['email'])){
    header('location: index.php');
    echo '<script>window.location.href = "index.php";</script>';
    die();
}
?>
<!DOCTYPE html>

<html>
	<head>
		<meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <meta name="description" content="">
	    <meta name="author" content="">
	    <link rel="icon" href="../../favicon.ico">

	
		<title>Garnier Malaysia - </title>

    	<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
		<link type="text/css" rel="stylesheet" href="css/bootstrap.css" />
		<link href="css/yamm.css" rel="stylesheet">  
		<link type="text/css" rel="stylesheet" href="css/style.css" />


		<script type="text/javascript" src="js/app.js"></script>
		

	</head>
	
<!-- body -->	
	<body>
<!-- bg-atas -->
		<div class="bg-atas">
<!-- body-bg  -->
			<div class="body-bg">
<!-- container body  -->
				<div class="container">
<!-- header top -->
					<div class="header">
						<div class="container">

						<div class="row">
<!-- logo -->
							<div class="col-md-3 col-xs-3">
								<div class="logo">
									<img src="images/logo-garnier.png" width="195px">
								</div>
							</div>
<!-- End of logo -->

							
<!-- Sign in / Create account  -->
							<div class="col-md-3 col-xs-3">
							
									<div class="dropdown ">
									  <button class="btn btn-default bar-member dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-expanded="true">
									    Hello <?php echo $_SESSION['lastname']; ?> &nbsp;&nbsp;
									    <span class="caret"></span>
									  </button>
									  <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
									    <li role="presentation"><a role="menuitem" tabindex="-1" href="member-account.php">My Account</a></li>
                                          <li role="presentation"><a role="menuitem" tabindex="-1" href="change-password.php">Change Password</a></li>
									    <li role="presentation"><a role="menuitem" tabindex="-1" href="index.php?logout=1">Logout</a></li>
									  </ul>
									</div>
								
							</div>

<!-- POPUP -->
<div class="modal fade" id="SignIn" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="popup-signin">Sign in</h1>
      </div>
      <div class="modal-body">
        <div class="col-md-6">
        	<h4>I HAVE A GARNIER ACCOUNT</h4>
        	<div class="form-group">
        	<input type="text" class="form-control" placeholder="Your email">
        	</div>
        	<div class="form-group">
        	<input type="text" class="form-control" placeholder="*******">
        	</div>
        	<div class="row">
        		<div class="col-xs-6">
        			<a href="#">Forgot password?</a>
        		</div>
        		<button type="button" class="btn btn-primary btn-lg btn-confirm"> &#9656;  Login
				</button>
        		<div class="col-xs-6">
        			kanan
        		</div>
        	</div>
        </div>
        <div class="col-md-6"><h4>I DON'T HAVE A GARNIER ACCOUNT</h4>
        	Create an account and get access to exclusive and personalized privileges: E-coupons, new product pre-tests and services...
        	<br><br><br>
        	<button type="button" class="btn btn-primary btn-lg btn-confirm"> &#9656;  Register Now
			</button>
        </div>
        	
        
      </div>
      <div class="modal-footer">
      </div>
    </div>
  </div>
</div>



<!-- End of Sign in / Create account -->

<!-- Header Right -->
							<div class="col-md-6 col-xs-6 header-right">
<!-- Bahasa / About -->
								<div class="row">
									<div class="col-md-12 faq">
								
											<span class="multilanguage-btn">
												<a href="#"  target="_blank" >English</a> / <a href="#"  target="_blank" >Bahasa</a>
											</span>

											<span class="faq-btn">
											
											<a href="#"  target="_blank" >FAQ</a> / <a href="#"  target="_blank" >About Garnier</a>
											</span>
									
									</div>
								</div>
<!-- End of Bahasa / About -->

<!-- Search -->
								<div class="row">
									<div class="col-md-12 search">
										<form class="form-inline">  
											<label for="search">Search</label>
											<input type="text" class="form-control input-xs" id="search" placeholder="Look for a product">
											<button type="submit" class="btn btn-inverse btn-hijau btn-xs"><i class="fa fa-search"></i></button>
										</form>
									</div>
								</div>
<!-- End of Search -->
							</div>
<!-- End of Header Right -->
						</div>

					</div>
				</div>
<!-- End of header top -->
			





<!-- Header Bottom -->
			<div class="row">
<!-- Main Menu -->
			<div class="col-md-8 bg-bawah ">
					<nav class="navbar yamm navbar-default " role="navigation">
				     <ul class="nav navbar-nav">
				     	<li role="presentation" class="active"><a href="index.php"><i class="fa fa-home fa-2 home"></i></a></li>

<!-- Garnier Skin Natural -->
				       <li class="dropdown">
				         <a href="#" class="dropdown-toggle" data-toggle="dropdown">Garnier Skin Natural</a>
					         <ul class="dropdown-menu">
					           <li>
					               <div class="yamm-content">
					                  <ul class="col-sm-4 list-unstyled dash-right">
						                  <li class="drop-header"><span class="dd">Brands</span></li>
						                  <li><a href="light-complete.php">Light Complete</a></li>
						                  <li><a href="sakura-white.php">Sakura White</a></li>
						                  <li><a href="pure-active.php">Pure Active</a></li>
						                  <li><a href="aqua-defense.php">Aqua Defense</a></li>
						                  <li><a href="duo-clean.php">Duo Clean</a></li>
									  </ul>
									  <ul class="col-sm-4 list-unstyled dash-right"> 
										<li class="drop-header"><span class="dd">By Skin Needs</span></li>
						                <li><a href="">Whitening</a></li>
						                <li><a href="">Acne</a></li>
						                <li><a href="">Hydrating</a></li>
									  </ul>
									  <ul class="col-sm-4 list-unstyled"> 
					                 		<li class="drop-header"><span class="dd">By Skin Type</span></li>
						                	<li><a href="">Normal</a></li>
						                 	<li><a href="">Dry</a></li>
						                 	<li><a href="">Sensitive</a></li>
						                 	<li><a href="">Combination</a></li>
						                 	<li><a href="">Oily</a></li>
									  </ul>
								   </div>
					           </li>
					         </ul>
				       </li>
<!-- Garnier Men -->
				       <li class="dropdown">
				         <a href="#" class="dropdown-toggle" data-toggle="dropdown">Garnier Men</a>
					         <ul class="dropdown-menu">
					           <li>
					               <div class="yamm-content">
					                  <ul class="col-sm-4 list-unstyled dash-right">
						                  <li class="drop-header"><span class="dd">Brands</span></li>
						                  <li><a href="turbo-light.php">Turbo Light</a></li>
						                  <li><a href="oil-control-men.php">Turbo Light Oil Control</a></li>
						                  <li><a href="icy-duo.php">Icy Duo</a></li>
						                  <li><a href="acno-fight.php">Acno Fight</a></li>
						                  
									  </ul>
									  <ul class="col-sm-4 list-unstyled dash-right"> 
										<li class="drop-header"><span class="dd">By Skin Needs</span></li>
						                <li><a href="">Whitening</a></li>
						                <li><a href="">Acne</a></li>
						                <li><a href="">Hydrating</a></li>
									  </ul>
									  <ul class="col-sm-4 list-unstyled"> 
					                 		<li class="drop-header"><span class="dd">By Skin Type</span></li>
						                	<li><a href="">Normal</a></li>
						                 	<li><a href="">Dry</a></li>
						                 	<li><a href="">Sensitive</a></li>
						                 	<li><a href="">Combination</a></li>
									  </ul>
								   </div>
					           </li>
					         </ul>
				       </li>
<!-- Hair Colour -->
				       <li class="dropdown">
				         <a href="#" class="dropdown-toggle" data-toggle="dropdown">Hair Colour</a>
					         <ul class="dropdown-menu">
					           <li>
					               <div class="yamm-content">
					                  <ul class="col-sm-4 list-unstyled dash-right dash-right">
						                  <li class="drop-header"><span class="dd">Brands</span></li>
						                  <li><a href="colour-naturals.php">Color Naturals</a></li>
						                  <li><a href="">Olia</a></li>
									  </ul>
									  <ul class="col-sm-4 list-unstyled dash-right"> 
										<li class="drop-header"><span class="dd">By Skin Needs</span></li>
						                <li><a href="">Permanent</a></li>
						                <li><a href="">Ammonia Free</a></li>
									  </ul>
									  <ul class="col-sm-4 list-unstyled"> 
					                 		<li class="drop-header"><span class="dd">By Colour</span></li>
						                	<li><a href="">Black</a></li>
						                 	<li><a href="">Brown</a></li>
						                 	<li><a href="">Blonde</a></li>
						                 	<li><a href="">Red</a></li>
						                 	<li><a href="">Violet</a></li>
						                 	<li><a href="">Copper</a></li>
									  </ul>
								   </div>
					           </li>
					         </ul>
				       </li>
				     </ul>
				</nav>

				</div>
<!-- End of Main Menu -->

<!-- Sign Up Newsletter -->
					<div class="col-md-4 newsletter">Sign up to receive updates from Garnier<br>
						<form class="form-inline">  
							<input type="text" class="form-control input-xs" id="search" placeholder="Your email address">
							<button type="submit" class="btn btn-inverse btn-grey btn-xs"> > SIGN UP NOW
							</button>
						</form>
					</div>
<!-- End of Sign Up Newsletter -->
			</div>
		</div>
<!-- End of container body -->
	</div>

<!-- END OF HEADER################ -->