<!-- Header -->
<?php
include('_includes/header.php');
?>



<!-- Begin Content -->
	<div id="content">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="breadcrumb"> <a href="index.php">Home</a> > <a href="#">Garnier Men</a> > 
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="tajuk-besar">
						<h1>By Skin Type- Dry</h1>
					</div>
				</div>
			</div>

<!-- Product Filter-->
				<div class="product-bar">
				  <div class="row leb-product"> 
					 	<div class="col-md-6 tajuk-filter"> 
							        Arrange according to <br/>
						</div>
					    <div class="col-md-2">
					        <select class="filter-btn" name="forma" onchange="location = this.options[this.selectedIndex].value;">
					            <option value="gmen-skin-need-whitening.php" />Whitening</option>
					            <option value="gmen-skin-need-acne.php" /> Acne<br />
					           
					        </select>
					    </div>
					    <div class="col-md-2">
					        <select class="filter-btn" name="forma" onchange="location = this.options[this.selectedIndex].value;">
					            <option>Skin Type</option>
					            <option value="gmen-skin-need-normal.php" /> Normal<br />
					            <option value="gmen-skin-need-dry.php" /> Dry<br />
					            
					            <option value="gmen-skin-need-sensitive.php" /> Combination<br />
					            <option value="gmen-skin-need-sensitive.php" /> Oily<br />
					        </select>
					    </div>
					    <div class="col-md-2">
					        <select class="filter-btn" name="forma" onchange="location = this.options[this.selectedIndex].value;">
					            <option>New / Popular</option>
					            <option value="" /> New <br />
					            <option value="" /> Popular<br />
					        </select>
					    </div>	   	
					</div>
				</div>


<!-- Products Listed -->

			<div class="row">

									
					<div class="col-xs-4 tolak-product  1">
						<div class=" a">
            				<img src="images/men/turbo-light/TurboLightAntiSpotWhiteningMoisturiserSPF16.png" class='hold' />
        				</div>
				        <div class="col-xs-6 b">
				           <b>TurboLight Anti-Spot Whitening Moisturiser SPF16</b><p>Brighten your skin and protect it from UV rays.
							</p><a class="bar-findout" href="GM-TurboLightAnti-SpotWhiteningMoisturiserSPF16.php"> &#9656; Find Out </a>
       					</div>
					</div>

					<div class="col-xs-4 tolak-product  1">
						<div class=" a">
            				<img src="images/men/icy-duo/TurboLightDoubleWhiteIcyDuoFoam.png" class='hold' />
        				</div>
				        <div class="col-xs-6 b">
				           <b>TurboLight Icy Duo Foam Double White</b><p>Double action. Double Benefits.
							</p><a class="bar-findout" href="GM-FoamDoubleWhite.php"> &#9656; Find Out </a>
       					</div>
					</div>
				

			</div>

			</div>
		</div>

<!-- End OF Begin Content -->







<?php
include('_includes/footer.php');
?>



