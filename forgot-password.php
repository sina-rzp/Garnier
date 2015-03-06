<?php
//FORGOT PASSWORD
function randomPassword() {
    $alphabet = "abcdefghijklmnopqrstuwxyzABCDEFGHIJKLMNOPQRSTUWXYZ0123456789";
    $pass = array(); //remember to declare $pass as an array
    $alphaLength = strlen($alphabet) - 1; //put the length -1 in cache
    for ($i = 0; $i < 8; $i++) {
        $n = rand(0, $alphaLength);
        $pass[] = $alphabet[$n];
    }
    return implode($pass); //turn the array into a string
}

if(isset($_POST['email_forgot'])){
    include('core/core.php');
    $email = $_POST['email_forgot'];
    $user = User::where('email','=',$email)->count();
    if($user >0){
        $user = User::where('email','=',$email)->first();
        $pass = randomPassword();
        $user->password = md5($pass);
        $user->save();
        $subject = "Password Reset for My Garnier";
        $message = '<html><body>';
        $message .= "Hello ".$user->lastname.",<br /> Your password has been reset to $pass. Please save your password information for the next time you visit the site. See you soon on garnier.com.my";
        $message .= '<br /><br />Kind Regards,<br />Garnier Malaysia';
        $message .= '</body></html>';

        $headers = "From:noreply@blackboxdev.co\r\n";
        $headers .= "MIME-Version: 1.0\r\n";
        $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";


        $retval = mail ($user->email,$subject,$message,$headers);
        echo '<script>alert("Your new password has been sent to your e-mail.")</script>';
        //header('location:success-register.php');
        echo '<script>window.location.href = "index.php";</script>';

        die();

    }else{
        echo '<script>alert("Your email is not registered!")</script>';
    }
}
include('_includes/header.php');
?>



<!-- Register Content -->
	<div id="content">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="breadcrumb"> <a href="index.php">Home</a> > Forgot Password
					</div>
				</div>

				<div class="col-md-12">
					<div class="tajuk-besar"><h1>Forgot Password</h1>
						<p><b>FORGOTTEN PASSWORD</b><br>Enter your email to receive your password.</p>	

						
					</div>
				</div>

<!-- Form -->

				<div class="row">
					<div class="col-md-12">
						<div class="box-content">
						<div class="container">
							<div class="row">
								<div class="col-md-12">

<!-- Login Section -->					<form action="" class="login-section form-horizontal" method="POST">
											<div class="form-group">
    											<label for="inputEmail3" class="col-sm-3 control-label">Email *</label>
											    <div class="col-sm-9">
											      <input type="email" class="form-control" name="email_forgot" id="inputEmail3" placeholder="Your email">
											    </div>
  											</div>

												   <div class="col-md-12">
													  	<div class="tnc">
															<p>
																<button type="submit" class="btn btn-primary btn-lg btn-confirm">&#9656;  Send
																</button>
															</p>
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

			</div>
		</div>
	</div>
<!-- End OF Register Content -->







<?php
include('_includes/footer.php');
?>



