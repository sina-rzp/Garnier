<!-- Header -->
<?php



if(isset($_POST['email'])){
    include('core/core.php');
    require_once 'core/vendor/mailchimp/Mailchimp.php';
    $api = new Mailchimp("70fd23c289a203695c10d72f821bc564-us9");
    $merge_vars = array('FNAME'=>$_POST['firstname'], 'LNAME'=>$_POST['lastname']);

// Submit subscriber data to MailChimp
// For parameters doc, refer to: http://apidocs.mailchimp.com/api/1.3/listsubscribe.func.php
    $result = $api->call('lists/subscribe', array(
        'id'                => '4f68b03e1a',
        'email'             => array('email'=>$_POST['email']),
        'merge_vars'        => $merge_vars,
//    'double_optin'      => false,
//    'update_existing'   => true,
//    'replace_interests' => false,
//    'send_welcome'      => true,
    ));
    // print_r($result);

//    if ($api->errorCode){
//        echo "<h4>Please try again.</h4>";
//    } else {
//        echo "<h4>Thank you, you have been added to our mailing list.</h4>";
//    }

    header('location:thankyou-newsletter.php');

}

include('_includes/header.php');
?>
?>



<!-- Register Content -->
	<div id="content">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="breadcrumb"> <a href="index.php">Home</a> > Newsletter
					</div>
				</div>

				<div class="col-md-12">
					<div class="tajuk-besar"><h1>Garnier Newsletter</h1>

						<p class="sub-text">To receive regular updates from Garnier including brand and product news, special offers and promotions, simply fill in your details below!</p>
					</div>
				</div>

<!-- Form -->

				<div class="row">
					<div class="col-md-12">
						<div class="box-content">
						<div class="container">
							<div class="row">
								<div class="col-md-12">
<!-- Login Section -->					<form action="" method="post" class="login-section form-horizontal">
											<div class="form-group">
    											<label for="inputEmail3" class="col-sm-3 control-label">Email *</label>
											    <div class="col-sm-9">
											      <input type="email" name="email" class="form-control" value="<?php if (isset($_POST['email_footer'])) echo $_POST['email_footer']; ?>" id="inputEmail3" placeholder="Enter text ...">
											    </div>
  											</div>
											<div class="form-group">
											    <label for="inputPassword3" class="col-sm-3 control-label">Title </label>
											    <div class="col-sm-9">
											    	<label class="radio-inline">
														<input type="radio" name="title" id="Title" value="option1"> Miss
														</label>
														<label class="radio-inline">
														  <input type="radio" name="title" id="title" value="option2"> Ms
														</label>
														<label class="radio-inline">
														  <input type="radio" name="title" id="title" value="option3"> Mr
														</label>
											    </div>
											</div>
										
											<div class="form-group">
											    <label for="inputPassword3" class="col-sm-3 control-label">First Name * </label>
											    <div class="col-sm-9">
											      <input type="text" class="form-control" name="firstname" id="FirstName" placeholder="Enter your details">
											    </div>
											</div>
											<div class="form-group">
											    <label for="inputPassword3" class="col-sm-3 control-label">Last Name </label>
											    <div class="col-sm-9">
											      <input type="text" class="form-control" name="lasttname" id="LastName" placeholder="Enter your details">
											    </div>
											</div>
											
												   <div class="col-md-12">
													  	<div class="tnc">	
														  	<div class="checkbox">
															    <label>
															      <input type="checkbox">  I have read and agree to the Terms and Conditions.*
															    </label>
															</div>
														  	<div class="checkbox">
															    <label>
															      <input type="checkbox">  I agree to receive the Garnier newsletter or information from Garnier by email.
															    </label>
															</div><br>
															
															<p>
																<button type="submit" class="btn btn-primary btn-lg btn-confirm">&#9656;  Sign Up Now
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
<p>
<b>DATA PROTECTION AND PRIVACY POLICY NOTICE</b><br>
Your personal data including your name and contact details which you have provided to L’Oreal Malaysia Sdn. Bhd. (hereinafter referred to as “we" or “us” or “our”) in this website www.garnier.com.my (“Personal Data") will be recorded, stored and otherwise processed by us for obtaining your feedback in relation to our goods and services, advertising, marketing, communication, conducting market surveys, trend analysis, membership application or registration under our loyalty program and our other legitimate business purposes (“Purpose”).
<br><br>
Please be informed that your Personal Data may be disclosed to our affiliates, service providers and relevant business partners such as public relations agencies, market research firms, advertising agencies (if any) for the Purpose and as permitted by applicable data privacy laws. In addition, you will appreciate that we are part of the L’Oreal Group which operates in multiple jurisdictions. Accordingly, access to the Personal Data may be granted to other entities within the L’Oreal Group and may be transferred out of Malaysia for their processing of your Personal Data for any of the foregoing Purpose, if required.
<br><br>
You may request for access to or correction of the Personal Data or limit the processing of the Personal Data at any time hereafter by submitting such request to us via e-mail to Customer Hotline, garniermalaysia@loreal.com or telephone at 03-77258945. Please note that it will be necessary for you to provide all of the Personal Data, without which we will not be able to process the same for the Purpose including our obtaining your feedback. By submitting your Personal Data in this website, you consent to the processing and transfer (if required) of your Personal Data by us. 
</p>
			</div>
		</div>
	</div>
<!-- End OF Register Content -->







<?php
include('_includes/footer.php');
?>



