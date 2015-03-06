<!-- Header -->
<?php
include('_includes/header.php');
?>



<!-- Register Content -->
	<div id="content">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="breadcrumb"> <a href="index.php">Home</a> > Register
					</div>
				</div>

				<div class="col-md-12">
					<div class="tajuk-besar">
						<h1>My Garnier Account</h1>
						<p class="sub-text">By having a Garnier account, your will receive regular updates from us about brand and product news, special offers and promotions!</p>
					</div>
				</div>

<!-- Form -->

				<div class="row">
					<div class="col-md-12">
						<div class="box-content">
						<div class="container">
							<div class="row">
								<div class="col-md-12">
<!-- Login Section -->
									
										<form action="checklogin.php" method="POST" class="login-section form-horizontal">
											<div class="register-text">1. Log in</div>
<!-- Email -->
											<div class="form-group">
    											<label for="email" class="col-sm-3 control-label">Email *</label>
											    <div class="col-sm-9">
											      <input type="email" class="form-control" id="email" name="email" placeholder="Enter text ..." required="required">
											    </div>
  											</div>

											<div class="form-group">
											    <label for="email" class="col-sm-3 control-label">Confirm email * </label>
											    <div class="col-sm-9">
											      <input type="email" class="form-control" id="email" name="email" placeholder="Enter text ..." required="required">
											    </div>
											</div>
<!-- Password -->

											<div class="form-group">
											    <label for="inputPassword3" class="col-sm-3 control-label">Password * </label>
											    <div class="col-sm-9">
											      <input type="password" class="form-control" id="password" name="password" placeholder="Enter text ...">
											    </div>
											</div>
											<div class="form-group">
											    <label for="inputPassword3" class="col-sm-3 control-label">Confirm password * </label>
											    <div class="col-sm-9">
											      <input type="password" name="password" class="form-control" id="password" placeholder="Enter text ...">
											    </div>
											</div>

											
											
											
												
												
												
												
												
												
												
												
												   <div class="col-md-9">
													  	<div class="">	
														  
														  	
															
															<p>
																<input id="submit" name="submit" type="submit" value="&#9656;  Login" class="btn btn-primary btn-lg btn-confirm">
																</input>
															</p>
															<p><i>*Mandatory Fields</i></p>

														</div>
													</div>
												</form>
								</div>
							</div>
						</div>
						</div>
					</div>
				</div>
<!-- End of Form -->

PRIVACY NOTICE
			</div>
		</div>
	</div>
<!-- End OF Register Content -->

<?php 
if($_server["REQUEST_METHOD"] =="POST"){
	$username =mysql_real_escape_string($_POST['username']);
	$password =mysql_real_escape_string($_POST['password']);

	echo "Username entered is: " . $username . "<br/>";
	echo "Password entered is: " . $password;

}
?>




<?php
include('_includes/footer.php');
?>



