<!-- Header -->
<html>
<head></head>
 <body>


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
									
										<form action="demo.php" method="post" class="login-section form-horizontal">

											  


											<div class="register-text">1. Log in</div>
<!-- Email -->
											<div class="form-group">
    											<label for="email" class="col-sm-3 control-label">Email *</label>
											    <div class="col-sm-9">
											      <input type="email" class="form-control" id="email" name="email" placeholder="Enter text ..." required="required">
											    </div>
  											</div>

  											<div class="form-group">
    											<label for="email2" class="col-sm-3 control-label">Email2 *</label>
											    <div class="col-sm-9">
											      <input type="email2" class="form-control" id="email2" name="email2" placeholder="Enter text ..." required="required">
											    </div>
  											</div>

										
<!-- Password -->

											<div class="form-group">
											    <label for="password" class="col-sm-3 control-label">Password * </label>
											    <div class="col-sm-9">
											      <input type="password" class="form-control" id="password" name="password" placeholder="Enter text ..." required="required">
											    </div>
											</div>
											

											
											
											
												
												
												
												
												
												
												
												
												   <div class="col-md-9">
													  	<div class="">	
														  
														  	
															
															<p>
																<input id="submit" name="submit" type="submit" value="&#9656;  Confirm" class="btn btn-primary btn-lg btn-confirm">
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



</body>
</html>



<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
	$email = mysql_real_escape_string($POST['email']);
	$email = mysql_real_escape_string($POST['email2']);
	$password = mysql_real_escape_string($POST['password']);
	$bool = true;

	mysql_connect("localhost", "root", "root") or die (mysql_error());
	mysql_select_db(garnier) or die ("Cannot connect to database");
	$query = mysql_query("Select * from users");
	while($row = mysql_fetch_array($query))
	{
		$table_users = $row['email'];
		if($email == $table_users)
		{
			$bool = false;
			Print '<script>alert()'
		}
	}
	}


}
?>

<?php
include('_includes/footer.php');
?>


