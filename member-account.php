<!-- Header -->
<?php
@session_start();
include_once('core/core.php');


//---improve profile start
$improve = Improve::where('user_id','=',$_SESSION['id_user'])->first();
$number_complete = 0;
if($improve > 0){
	if($improve->complete_info == 1) $number_complete++;
	if($improve->hair == 1) $number_complete++;
	if($improve->facebody == 1) $number_complete++;
	$percent_complete = number_format(($number_complete/3)*100);	
}

//---improve profile end

include('_includes/header-member.php');
?>



<!-- Register Content -->
	<div id="content">
		<div class="container">
		
				

<!-- Form -->

				<div class="row">
<!-- BreadCrumb -->
					<div class="container">
						<div class="col-md-12">
							<div class="breadcrumb"> <a href="index.php">Home</a> > My Account
							</div>
						</div>
					</div>
				</div>
				
<!-- Member Area -->
			<div class="row">
				<div class="container">	
					<h1>Hello <span class="member-name"><?php echo $_SESSION['lastname']; ?></span>, how are you today? </h1>
				</div>
			</div>	

					<div class="row">
						<div class="container">
							<div class="col-md-8">	
								<div class="didyouknow">
									<div class="row">
											<div class="col-xs-4"> 
												<img src="images/pic-default.jpg">
												<a  data-toggle="modal" data-target=".bs-example-modal-lg" > &#9656; Upload your picture </a>

												<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
		  											<div class="modal-dialog modal-lg">
													    <div class="modal-content upload-modal">

													    	
														    	<div class="row ">

															      <div class="col-xs-4">
															      	<img src="images/pic-default.jpg"><br>
															      	<span class="btn btn-default btn-file">
																	    Choose File <input type="file">
																	</span>
															      </div>
															      <div class="col-xs-8">
																      	<p> 
																      	Upload your photo now to illustrate your portrait.<br>
																		Click on browse and choose a picture<br>
																		If you want to change your picture, click on Browse
																		</p>
																		<p>
																			<b> 
																			Size max: 1 MB <br>
																			Image formats : gif, jpeg, png
																			</b>
																		</p>
																		<p>
																			By uploading this picture, I testify that I am the 
																			rightful holder of the rights on the picture, I accept 
																			that such picture be published on the site and if I am a minor, 
																			I testify that I am authorized by my parents to upload this picture.
																		</p>
															      </div>
															   
														 		</div>
														  </div> 	
													 </div>
		  										
												</div>
											</div>
										<div class="col-xs-8"> 
											<b> Did you know?</b><br>
											This area can be used to highlight promotions to users or encourage them to interact.
										</div>
									</div>
								</div>
							</div>	
							
						
							<?php include("_includes/profile-sidebar.php"); ?>
						</div>
					</div>
			
<!-- End of Member Area -->
				</div>
	</div>
<!-- End OF Register Content -->







<?php
include('_includes/footer.php');
?>



