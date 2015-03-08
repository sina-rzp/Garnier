<?php
@session_start();

if(isset($_POST['email'])){
    include_once('core/core.php');
    $birthday = "$_POST[year]-$_POST[month]-$_POST[day]";
    $pass = md5($_POST['password']);
    $ac = md5($_POST['email']."secretx123");

    if(User::where('email','=',$_POST['email'])->count() >0){
        echo '<script>alert("'.$_POST['email'].' email address has already been used.")</script>';
    }else{
        $user = new User;
        $user->email = $_POST['email'];
        $user->password = $pass;
        $user->title = "";
        $user->lastname = "";
        $user->firstname = "";
        $user->birthday = "";
        $user->phone = "";
        $user->address = "";
        $user->postcode = "";
        $user->city = "";
        $user->country = "";
        $user->active_code = $ac;

        $user->save();
        $subject = "Verification Link | Garnier Registration";
        $message = '<html><body>';
        $message .= "Hi ".$user->lastname.", <br />  Please click the url below to verify your email and have access to the my garnier website : <br/> <br/> http://blackboxdev.co/projects/garnierx/active.php?id=".$user->active_code;
        $message .= '<br /><br />Kind Regards,<br />Garnier Malaysia';
        $message .= '</body></html>';

        $headers = "From:noreply@blackboxdev.co\r\n";
        $headers .= "MIME-Version: 1.0\r\n";
        $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

        $retval = mail ($user->email,$subject,$message,$headers);
        header('location:success-register.php');
    }






}
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
				
					<form action="" method="POST" class="login-section form-horizontal">
						<div class="register-text">1. Log in</div>
<!-- Email -->
						<div class="form-group">
							<label for="email" class="col-sm-3 control-label">Email *</label>
						    <div class="col-sm-9">
						      <input type="email" name="email" class="form-control" id="email" placeholder="Enter text ..." required="required">
						    </div>
							</div>

<!-- Password -->

						<div class="form-group">
						    <label for="inputPassword3" class="col-sm-3 control-label">Password * </label>
						    <div class="col-sm-9">
						      <input type="password" name="password" class="form-control" id="inputPassword3" placeholder="Enter text ...">
						    </div>
						</div>
						<div class="form-group">
						    <label for="inputPassword3" class="col-sm-3 control-label">Confirm password * </label>
						    <div class="col-sm-9">
						      <input type="password" name="password" class="form-control" id="inputPassword3" placeholder="Enter text ...">
						    </div>
						</div>
<!--
						<div class="register-text">2. Your Personal Information</div>
						<div class="form-group">
						    <label for="inputPassword3" class="col-sm-3 control-label">Title </label>
						    <div class="col-sm-9">
						    	<label class="radio-inline">
									<input type="radio" name="title" id="inlineRadio1" value="Miss"> Miss
									</label>
									<label class="radio-inline">
									  <input type="radio" name="title" id="inlineRadio2" value="Ms"> Ms
									</label>
									<label class="radio-inline">
									  <input type="radio" name="title" id="inlineRadio3" value="Mr"> Mr
									</label>
						    </div>
						</div>
						<div class="form-group">
						    <label for="inputPassword3" class="col-sm-3 control-label">Last Name * </label>
						    <div class="col-sm-9">
						      <input type="text" class="form-control" name="lastname" id="LastName" placeholder="Enter text ...">
						    </div>
						</div>
						<div class="form-group">
						    <label for="inputPassword3" class="col-sm-3 control-label">First Name * </label>
						    <div class="col-sm-9">
						      <input type="text" class="form-control" name="firstname" id="FirstName" placeholder="Enter text ...">
						    </div>
						</div>
						<div class="form-group">
						    <label for="inputPassword3" class="col-sm-3 control-label">Birthday * </label>
						    <div class="col-sm-3">
						    		<select class="form-control" name="day" type="text" >
										  <option>Day</option>
										  <option>1</option>
										  <option>2</option>
										  <option>3</option>
										  <option>4</option>
										  <option>5</option>
										  <option>6</option>
										  <option>7</option>
										  <option>8</option>
										  <option>9</option>
										  <option>10</option>
										  <option>11</option>
										  <option>12</option>
										  <option>13</option>
										  <option>14</option>
										  <option>15</option>
										  <option>16</option>
										  <option>17</option>
										  <option>18</option>
										  <option>19</option>
										  <option>20</option>
										  <option>21</option>
										  <option>22</option>
										  <option>23</option>
										  <option>24</option>
										  <option>25</option>
										  <option>26</option>
										  <option>27</option>
										  <option>28</option>
										  <option>29</option>
										  <option>30</option>
										  <option>31</option>
										</select>
									</div>
								<div class="col-sm-3">
									<select class="form-control" name="month" type="text" >
										 <option>Month</option>
										 <option>1</option>
										 <option>2</option>
										 <option>3</option>
										 <option>4</option>
										 <option>5</option>
										 <option>6</option>
										 <option>7</option>
										 <option>8</option>
										 <option>9</option>
										 <option>10</option>
										 <option>11</option>
										 <option>12</option>
									</select>
								</div>
								<div class="col-sm-3">
									<select class="form-control" name="year" type="text" >
										 <option>Year</option>
                                        <?php
                                        $i = 1900;
                                        while($i<date('Y')){
                                            echo "<option>$i</option>";
                                            $i++;
                                        }
                                        ?>
                                        ?>
									</select>
								</div>
							</div>
							<div class="form-group">
								    <label for="inputPassword3" class="col-sm-3 control-label">Phone Number </label>
								    <div class="col-sm-9">
								      <input type="text" class="form-control" id="FirstName" name="phone" placeholder="+6 XXX XXX XXX">
								    </div>
							</div>

						
							<div class="register-text">3. Postal Address</div>
							<div class="form-group">
							    <label for="inputPassword3" class="col-sm-3 control-label">Address</label>
							    <div class="col-sm-9">
							      <input type="text" class="form-control" name="address" id="LastName" placeholder="Enter text ...">
							    </div>
							</div>
							<div class="form-group">
							    <label for="inputPassword3" class="col-sm-3 control-label">Post Code</label>
							    <div class="col-sm-9">
							      <input type="text" class="form-control" name="postcode" id="LastName" placeholder="Enter text ...">
							    </div>
							</div>
							<div class="form-group">
							    <label for="inputPassword3" class="col-sm-3 control-label">City</label>
							    <div class="col-sm-9">
							      <input type="text" class="form-control" name="city" id="LastName" placeholder="Enter text ...">
							    </div>
							</div>
							<div class="form-group">
							    <label for="inputPassword3" class="col-sm-3 control-label">State *</label>
							    <div class="col-sm-9">
							    	<select class="form-control" name="country" type="text" >
										 <option>State</option>
										 <option>Selangor</option>
										 <option>Kuala Lumpur</option>
										 <option>Sarawak</option>
										 <option>Johor</option>
										 <option>Penang</option>
										 <option>Sabah</option>
										 <option>Perak</option>
										 <option>Pahang</option>
										 <option>Negeri Sembilan</option>
										 <option>Kedah</option>
										 <option>Malacca</option>
										 <option>Terengganu</option>
										 <option>Kelantan</option>
										 <option>Perlis</option>
										 <option>Labuan</option>
									</select>
							    </div>
							</div>-->
							<div class="col-md-3">
							</div>
							   <div class="col-md-9">
								  	<div class="">	
									  	<div class="checkbox">
										    <label>
										      <input type="checkbox" required>  I have read and agree to the Terms and Conditions.*
										    </label>
										</div>
									  	<div class="checkbox">
										    <label>
										      <input type="checkbox">  I agree to receive the Garnier newsletter or information from Garnier by email.
										    </label>
										</div><br>
										
										<p>
											<button type="submit" value="Register" class="btn btn-primary btn-lg btn-confirm">&#9656;  Confirm
											</button>
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

PRIVACY NOTICE<br>
<p class="text-sm"><b>DATA PROTECTION AND PRIVACY POLICY NOTICE</b> <br>
Your personal data including your name and contact details which you have provided to L’Oreal Malaysia Sdn. Bhd. (hereinafter referred to as “we" or “us” or “our”) in this website 
www.garnier.com.my (“Personal Data") will be recorded, stored and otherwise processed by us for obtaining your feedback in relation to our goods and services, advertising, marketing, communication, conducting market surveys, trend analysis, membership application or registration under our loyalty program and our other legitimate business purposes (“Purpose”).
Please be informed that your Personal Data may be disclosed to our affiliates, service providers and relevant business partners such as public relations agencies, market research firms, advertising agencies (if any) for the Purpose and as permitted by applicable data privacy laws. In addition, you will appreciate that we are part of the L’Oreal Group which operates in multiple jurisdictions. Accordingly, access to the Personal Data may be granted to other entities within the L’Oreal Group and may be transferred out of Malaysia for their processing of your Personal Data for any of the foregoing Purpose, if required.
You may request for access to or correction of the Personal Data or limit the processing of the Personal Data at any time hereafter by submitting such request to us via e-mail to Customer Hotline, garniermalaysia@loreal.com or telephone at 03-77258945. Please note that it will be necessary for you to provide all of the Personal Data, without which we will not be able to process the same for the Purpose including our obtaining your feedback. By submitting your Personal Data in this website, you consent to the processing and transfer (if required) of your Personal Data by us</p>
			</div>
		</div>
	</div>
<!-- End OF Register Content -->

<?php 
//if($_server["REQUEST_METHOD"] =="POST"){
//	$username =mysql_real_escape_string($_POST['username']);
//	$password =mysql_real_escape_string($_POST['password']);
//
//	echo "Username entered is: " . $username . "<br/>";
//	echo "Password entered is: " . $password;
//
//}
?>




<?php
include('_includes/footer.php');
?>



