<?php
session_start();
include('_includes/header.php');

if (isset($_GET['logout'])){
    session_destroy();
}
?>



<!-- Content -->
	<div id="content">
<!-- slideshow -->
		<div class="row">
			<div class="col-md-12 col-xs-12">
				<div class="slideshow">
					<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
<!-- Indicators -->
						  <ol class="carousel-indicators">
						    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
						    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
						  </ol>

<!-- Wrapper for slides -->
					  <div class="carousel-inner" role="listbox">
					    <div class="item active">
						    <img src="images/slide/Garnier-PureActive.jpg" alt="Garnier Pure Active">
						    <div class="carousel-caption"><span class="pink-pureactive">Pure Active Fruit Energy</span><br>
						    	<span style="color:#00a1e0; font-weight: bold;">Foam wash that fights acne and brightens skin </span>
						    </div>
						    </div>
					    <div class="item">
						    <img src="images/slide/garnier-sakura.jpg" alt="Garnier Sakura">
						    <div class="carousel-caption-sakura">
						    	Sakura White <span class="slide-pink">Pinkish Radiance Moisturising Cream</span><br>
						    	<span class="sakura-pink">Sakura-like</span> skin that is up to<span class="sakura-pink"> 60%</span> more pinkish radiant</span>
						    </div>
					    </div>
					  </div>
					</div>
				</div>
			</div>
		</div>
<!-- End of Slideshow -->

<!-- Find Your Match -->
		<div id="find-match col-md-6 col-xs-6 ">
			
				<div class="row">
					<div class="container">
<!-- Tajuk -->
					<div class="tajuk-besar">
					<h1>Find your match</h1>
					</div>
<!-- End Of Tajuk -->

<!-- List Of Boxes -->
			
					<div class="row  slideshow-fym">
						<div class="col-lg-6 col-md-6 col-xs-12">
<!-- Pink -->
							<div class="tolak pink">
								<div class="col-xs-6 box-p " style="
										background: #ffaaa3;
										border-top: 5px solid #ffbab7;
										border-left: 5px solid #ffbab7;
										height: 215px; padding: 40px 0 0 ;"> <h2 class="title-box">Whitening</h2>
										<div class="des-box"> Discover our whitening range best suited for your skin</div>

									<div class="btn-con">
											<a href="fym-garnier-skin-natural-whitening.php" ><p class="get" style="background: #f03d64;
										color: #FFFFFF; text-decoration: none;"> &#x25BA; Get Started</p></a>
										<div class="hovertext">
											<a href="fym-garnier-skin-natural-whitening.php"><p style="background: #FFFFFF; color: #f03d64 ; text-decoration: none;"> &#x25BA; Get Started</p></a>
										</div>
									</div>
								</div>

								<div class="col-xs-6 white">

										<div class="image">
											<img src="images/findmatch/whitening.jpg" alt="whitening">
										</div>
									
									</div>
								</div>
							</div>
						<div class="col-lg-6 col-md-6 col-xs-12">
<!-- Red Box -->
							<div class="tolak red">
								<div class="col-xs-6 box-p " style="
										background: #db1820;
										border-top: 5px solid #ed1b24;
										border-left: 5px solid #ed1b24;
										height: 215px; padding: 40px 0 0 ;"> 

										<h2 class="title-box">Anti-Acne</h2>
										<div class="des-box">Find the best solution for your acne problems</div>

									<div class="btn-con">
											<a href="fym-garnier-skin-natural-acne.php" ><p class="get" style="background: #ed1b24;
										color: #FFFFFF; text-decoration: none;"> &#x25BA; Get Started</p></a>
										<div class="hovertext">
											<a href="fym-garnier-skin-natural-acne.php"><p style="background: #FFFFFF; color: #ed1b24 ; text-decoration: none;"> &#x25BA; Get Started</p></a>
										</div>
									</div>
								</div>

								<div class="col-xs-6 white">

										<div class="image">
											<img src="images/findmatch/acne.jpg" alt="whitening">
										</div>
									
									</div>
								</div>
							</div>
						</div>
					



					

					<div class="row slideshow-fym">
						<div class="col-lg-6 col-md-6 col-xs-12">
<!-- Black Box -->
						<div class="tolak black">
								<div class="col-xs-6 box-p " style="
										background: #000000;
										border-top: 5px solid #363636;
										border-left: 5px solid #363636;
										height: 215px; padding: 40px 0 0 ;"> <h2 class="title-box">Men</h2>
										<div class="des-box">Discover the right skin solution for you</div>

									<div class="btn-con">
											<a href="fym-garnier-skin-natural-men.php" ><p class="get" style="background: #464646;
										color: #FFFFFF; text-decoration: none;"> &#x25BA; Get Started</p></a>
										<div class="hovertext">
											<a href="fym-garnier-skin-natural-men.php"><p style="background: #FFFFFF; color: #464646 ; text-decoration: none;"> &#x25BA; Get Started</p></a>
										</div>
									</div>
								</div>

								<div class="col-xs-6 white">

										<div class="image">
											<img src="images/findmatch/men.jpg" alt="men">
										</div>
									
									</div>
								</div>
						</div>
						<div class="col-lg-6 col-md-6 col-xs-12">
<!-- Green Box -->
							<div class="tolak green">
								<div class="col-xs-6 box-p " style="
										background: #8ec63f;
										border-top: 5px solid #E8F2C4;
										border-left: 5px solid #E8F2C4;
										height: 215px; padding: 40px 0 0 ;"> <h2 class="title-box">Hair Colour</h2>
										<div class="des-box">Discover our wide range of hair colours</div>

									<div class="btn-con">
											<a href="fym-garnier-skin-natural-hair.php" ><p class="get" style="background: #406718;
										color: #FFFFFF; text-decoration: none;"> &#x25BA; Get Started</p></a>
										<div class="hovertext">
											<a href="fym-garnier-skin-natural-hair.php"><p style="background: #FFFFFF; color: #406718 ; text-decoration: none;"> &#x25BA; Get Started</p></a>
										</div>
									</div>
								</div>

								<div class="col-xs-6 white">

										<div class="image">
											<img src="images/findmatch/hair-color.jpg" alt="hair color">
										</div>
									
									</div>
								</div>
						</div>
					</div>




				</div>
<!-- List Of Boxes -->
				</div>
			</div>
		</div>
<!-- Start keep in touch -->

<div class="container">
		<div class="row">
		<div id="kit">
			<div class="col-md-12 col-xs-6 newsletter-image">
				<a href="newsletter.php" target="blank" ><center><img src="images/keepintouch.png"></center>
				</a>
			</div>
		</div>
	</div>
</div>

<?php
include('_includes/footer.php');
?>

</body>
</html>

<!--  -->