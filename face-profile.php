<?php
@session_start();
include_once('core/core.php');

if(!isset($_SESSION['email'])){
    header('location: index.php');
}

$user = User::find($_SESSION['id_user']);

if(Face::where('user_id','=',$user->id)->count() == 0){

    $face = new Face;
    $face->user_id = $user->id;
    $face->save();
}else{
    $face = Face::where('user_id','=',$user->id)->first();
}



if(isset($_POST['skin'])){

    $face->skin = $_POST['skin'];
    $face->body = $_POST['body'];
    $face->deodorant = $_POST['deodorant'];
    $face->looking_for = $_POST['looking_for'];
    $face->product_use = $_POST['product_use'];
    $face->save();


    if(Improve::where('user_id','=',$user->id)->count() > 0){
        $improve = Improve::where('user_id','=',$user->id)->first();
        $improve->facebody = 1;
        $improve->save();
    }else{
        $improve = new Improve;
        $improve->facebody = 1;
        $improve->user_id = $user->id;
        $improve->save();
    }

    echo '<script>alert("Data updated")</script>';
}

//---improve profile start
$improve = Improve::where('user_id','=',$user->id)->first();
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
			<div class="row">
				<div class="col-md-12">
					<div class="breadcrumb"> <a href="index.php">Home</a> > Your face profile
					</div>
				</div>

				<div class="col-md-12">
					<div class="tajuk-besar">
						<h1>Your face profile</h1>
					</div>
				</div>

<!-- Form -->

				<div class="row">
					<div class="col-md-8">
						<div class="box-content">
						<div class="container">
							<div class="row">
								<div class="col-md-8">
<!-- Login Section -->
									
										<form action="" method="POST" class="login-section form-horizontal">
											<div class="register-text"> 1. What is your skin concern?</div>
<!-- Hair Type-->
											<div class="form-group">
											    
											    <div class="col-sm-12">
											    	<label class="radio-inline">
														<input type="radio" name="skin" id="inlineRadio1" value="Moisturizing & Protection" <?php if($face->skin == 'Moisturizing & Protection') echo "checked" ?>>
														Moisturizing & Protection
														</label>
														<label class="radio-inline">
														  <input type="radio" name="skin" id="inlineRadio2" value="Fight Imperfection and shine" <?php if($face->skin == 'Fight Imperfection and shine') echo "checked" ?>>
														  Fight Imperfection and shine
														</label>
														<label class="radio-inline">
														  <input type="radio" name="skin" id="inlineRadio3" value="Unify & Illuminate tired skin" <?php if($face->skin == 'Unify & Illuminate tired skin') echo "checked" ?>>
														  Unify & Illuminate tired skin
														</label>
														<label class="radio-inline">
														  <input type="radio" name="skin" id="inlineRadio3" value="Anti-aging" <?php if($face->skin == 'Anti-aging') echo "checked" ?>>
														  Anti-aging
														</label>
											    </div>
											</div>

											<div class="register-text">2. What is your body main concern?</div>
											<div class="form-group">
											     <div class="col-sm-9">
											    	<label class="radio-inline">
														<input type="radio" name="body" id="inlineRadio1" value="Moisturising" <?php if($face->body == 'Moisturising') echo "checked" ?>>
														Moisturising
														</label>
														<label class="radio-inline">
														  <input type="radio" name="body" id="inlineRadio2" value="Repairing" <?php if($face->body == 'Repairing') echo "checked" ?>>
														  Repairing
														</label>
														<label class="radio-inline">
														  <input type="radio" name="body" id="inlineRadio3" value="Firming & moisturising" <?php if($face->body == 'Firming & moisturising') echo "checked" ?>>
														  Firming & moisturising
														</label>
														<label class="radio-inline">
														  <input type="radio" name="body" id="inlineRadio3" value="Slimming" <?php if($face->body == 'Slimming') echo "checked" ?>>
														  Slimming
														</label>
														<label class="radio-inline">
														  <input type="radio" name="body" id="inlineRadio3" value="Tanning" <?php if($face->body == 'Tanning') echo "checked" ?>>
														  Tanning
														</label>
														<label class="radio-inline">
														  <input type="radio" name="body" id="inlineRadio3" value="Beautifying" <?php if($face->body == 'Beautifying') echo "checked" ?>>
														  Beautifying
														</label>
											    </div>
											</div>

												<div class="register-text">3. What is your main concern when you are lokking for a deodorant?</div>
												<div class="form-group">
												<div class="col-sm-9">
											    	<label class="radio-inline">
														<input type="radio" name="deodorant" id="inlineRadio1" value="Marks & stains" <?php if($face->deodorant == 'Marks & stains') echo "checked" ?>>
														Marks & stains
														</label>
														<label class="radio-inline">
														  <input type="radio" name="deodorant" id="inlineRadio2" value="Maximum dryness" <?php if($face->deodorant == 'Maximum dryness') echo "checked" ?>>
														  Maximum dryness
														</label>
														<label class="radio-inline">
														  <input type="radio" name="deodorant" id="inlineRadio3" value="Sensitive skin" <?php if($face->deodorant == 'Sensitive skin') echo "checked" ?>>
														  Sensitive skin
														</label>
														<label class="radio-inline">
														  <input type="radio" name="deodorant" id="inlineRadio3" value="Freshness" <?php if($face->deodorant == 'Freshness') echo "checked" ?>>
														  Freshness
														</label>
												    </div>
												</div>

											    <div class="register-text">4. You're looking for</div>
											    <div class="form-group">
											     <div class="col-sm-9">
											    	<label class="radio-inline">
														<input type="radio" name="looking_for" id="inlineRadio1" value="Deodorant for men" <?php if($face->looking_for == 'Deodorant for men') echo "checked" ?>>
														Deodorant for men
														</label>
														<label class="radio-inline">
														  <input type="radio" name="looking_for" id="inlineRadio2" value="Deodorant for women" <?php if($face->looking_for == 'Deodorant for women') echo "checked" ?>>
														Deodorant for women
														</label>
														<label class="radio-inline">
														  <input type="radio" name="looking_for" id="inlineRadio3" value="Both" <?php if($face->looking_for == 'Both') echo "checked" ?>>
														  Both
														</label>
												    </div>
												</div>
												<div class="register-text">5. What type of product do you use?</div>
												 <div class="form-group">
											     <div class="col-sm-9">
											    	<label class="radio-inline">
														<input type="radio" name="product_use" id="inlineRadio1" value="Sun protection for adult" <?php if($face->product_use == 'Sun protection for adult') echo "checked" ?>>
														Sun protection for adult
														</label>
														<label class="radio-inline">
														  <input type="radio" name="product_use" id="inlineRadio2" value="Sun protection for children" <?php if($face->product_use == 'Sun protection for children') echo "checked" ?>>
														Sun protection for children
														</label>
														<label class="radio-inline">
														  <input type="radio" name="product_use" id="inlineRadio3" value="Self tan product" <?php if($face->product_use == 'Self tan product') echo "checked" ?>>
														  Self tan product
														</label>
												    </div>
												</div>
												<p>
												<button type="submit" value="Register" class="btn btn-primary btn-lg btn-confirm">&#9656;  Validate
												</button>
												</p>		
									</form>
								</div>

							</div>
						</div>
						</div>
					</div>
						<?php include("_includes/profile-sidebar.php"); ?>
				</div>
<!-- End of Form -->


			</div>
		</div>
	</div>
<!-- End OF Register Content -->






<?php
include('_includes/footer.php');
?>



