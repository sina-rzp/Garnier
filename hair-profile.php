<?php
@session_start();
include_once('core/core.php');

if(!isset($_SESSION['email'])){
    header('location: index.php');
}

$user = User::find($_SESSION['id_user']);

if(Hair::where('user_id','=',$user->id)->count() == 0){

    $hair = new Hair;
    $hair->user_id = $user->id;
    $hair->save();
}else{
    $hair = Hair::where('user_id','=',$user->id)->first();
}



if(isset($_POST['hair_type'])){

    $hair->hair_type = $_POST['hair_type'];
    $hair->hair_texture = $_POST['hair_texture'];
    $hair->hair_colour = $_POST['hair_colour'];
    $hair->type_hair_colour = $_POST['type_hair_colour'];
    $hair->save();


    if(Improve::where('user_id','=',$user->id)->count() > 0){
        $improve = Improve::where('user_id','=',$user->id)->first();
        $improve->hair = 1;
        $improve->save();
    }else{
        $improve = new Improve;
        $improve->hair = 1;
        $improve->user_id = $user->id;
        $improve->save();
    }

    echo '<script>alert("Data updated")</script>';
}

//---improve profile start
$improve = Improve::where('user_id','=',$user->id)->first();
$number_complete = 0;
if($improve->complete_info == 1) $number_complete++;
if($improve->hair == 1) $number_complete++;
if($improve->facebody == 1) $number_complete++;
$percent_complete = number_format(($number_complete/3)*100);
//---improve profile end
include('_includes/header-member.php');
?>



<!-- Register Content -->
	<div id="content">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="breadcrumb"> <a href="index.php">Home</a> > Your Hair Profile
					</div>
				</div>

				<div class="col-md-12">
					<div class="tajuk-besar">
						<h1>Your hair profile</h1>
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
											<div class="register-text"> 1. What is your hair type?</div>
<!-- Hair Type-->
											<div class="form-group">
											    
											    <div class="col-sm-12">
											    	<label class="radio-inline">
														<input type="radio" name="hair_type" id="inlineRadio1" value="Normal hair" <?php if($hair->hair_type == 'Normal hair') echo "checked" ?>>
														Normal hair
														</label>
														<label class="radio-inline">
														  <input type="radio" name="hair_type" id="inlineRadio2" value="Sensitive scalp" <?php if($hair->hair_type == 'Sensitive scalp') echo "checked" ?>>
														  Sensitive scalp
														</label>
														<label class="radio-inline">
														  <input type="radio" name="hair_type" id="inlineRadio3" value="Regraising hair" <?php if($hair->hair_type == 'Regraising hair') echo "checked" ?>>
														  Regraising hair
														</label>
														<label class="radio-inline">
														  <input type="radio" name="hair_type" id="inlineRadio3" value="Dry hair" <?php if($hair->hair_type == 'Dry hair') echo "checked" ?>>
														  Dry hair
														</label>
														<label class="radio-inline">
														  <input type="radio" name="hair_type" id="inlineRadio3" value="Very dry hair" <?php if($hair->hair_type == 'Very dry hair') echo "checked" ?>>
														  Very dry hair
														</label>
											    </div>
											</div>

											<div class="register-text">2. What is your hair texture?</div>
											<div class="form-group">
											     <div class="col-sm-9">
											    	<label class="radio-inline">
														<input type="radio" name="hair_texture" id="inlineRadio1" value="Thin" <?php if($hair->hair_texture == 'Thin') echo "checked" ?>>
														Thin
														</label>
														<label class="radio-inline">
														  <input type="radio" name="hair_texture" id="inlineRadio2" value="Flat" <?php if($hair->hair_texture == 'Flat') echo "checked" ?>>
														  Flat
														</label>
														<label class="radio-inline">
														  <input type="radio" name="hair_texture" id="inlineRadio3" value="Dull" <?php if($hair->hair_texture == 'Dull') echo "checked" ?>>
														  Dull
														</label>
														<label class="radio-inline">
														  <input type="radio" name="hair_texture" id="inlineRadio3" value="Curly" <?php if($hair->hair_texture == 'Curly') echo "checked" ?>>
														  Curly
														</label>
														<label class="radio-inline">
														  <input type="radio" name="hair_texture" id="inlineRadio3" value="Frizzy" <?php if($hair->hair_texture == 'Frizzy') echo "checked" ?>>
														  Frizzy
														</label>
											    </div>
											</div>

												<div class="register-text">3. What is your hair colour?</div>
												<div class="form-group">
												<div class="col-sm-9">
											    	<label class="radio-inline">
														<input type="radio" name="hair_colour" id="inlineRadio1" value="Blonde" <?php if($hair->hair_colour == 'Blonde') echo "checked" ?>>
														Blonde
														</label>
														<label class="radio-inline">
														  <input type="radio" name="hair_colour" id="inlineRadio2" value="Light brown" <?php if($hair->hair_colour == 'Light brown') echo "checked" ?>>
														  Light brown
														</label>
														<label class="radio-inline">
														  <input type="radio" name="hair_colour" id="inlineRadio3" value="Brown" <?php if($hair->hair_colour == 'Brown') echo "checked" ?>>
														  Brown
														</label>
														<label class="radio-inline">
														  <input type="radio" name="hair_colour" id="inlineRadio3" value="Black" <?php if($hair->hair_colour == 'Black') echo "checked" ?>>
														  Black
														</label>
														<label class="radio-inline">
														  <input type="radio" name="hair_colour" id="inlineRadio3" value="Red" <?php if($hair->hair_colour == 'Red') echo "checked" ?>>
														  Red
														</label>	
												    </div>
												</div>

											    <div class="register-text">4. What type of hair colour do you use?</div>
											    <div class="form-group">
											     <div class="col-sm-9">
											    	<label class="radio-inline">
														<input type="radio" name="type_hair_colour" id="inlineRadio1" value="None" <?php if($hair->type_hair_colour == 'None') echo "checked" ?>>
														None
														</label>
														<label class="radio-inline">
														  <input type="radio" name="type_hair_colour" id="inlineRadio2" value="Permanent" <?php if($hair->type_hair_colour == 'Permanent') echo "checked" ?>>
														Permanent
														</label>
														<label class="radio-inline">
														  <input type="radio" name="type_hair_colour" id="inlineRadio3" value="Non permanent" <?php if($hair->type_hair_colour == 'Non permanent') echo "checked" ?>>
														  Non permanent
														</label>
														<label class="radio-inline">
														  <input type="radio" name="type_hair_colour" id="inlineRadio3" value="Highlights" <?php if($hair->type_hair_colour == 'Highlights') echo "checked" ?>>
														  Highlights
														</label>
														<label class="radio-inline">
														  <input type="radio" name="type_hair_colour" id="inlineRadio3" value="Henne" <?php if($hair->type_hair_colour == 'Henne') echo "checked" ?>>
														  Henne
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
						<div class="col-md-4">
							<h1 style="padding-top:30px;">Improve your profile!</h1>
							<div class="improve-profile">
								Your profile is <?php echo $percent_complete ?>% complete

                                <ul class="improve-check">
                                    <li <?php if($improve->complete_info == 1) echo 'class="tick"' ?>><b><a href="edit-profile.php">YOUR REGISTRATION</a></b><br>See and complete your infos</li>
                                    <li <?php if($improve->hair == 1) echo 'class="tick"' ?>><b><a href="hair-profile.php">YOUR HAIR PROFILE</a></b><br>See and complete your infos</li>
                                    <li <?php if($improve->facebody == 1) echo 'class="tick"' ?> ><b><a href="face-profile.php">YOUR FACE & BODY PROFILE</a></b><br>See and complete your infos</li>
                                <ul>
								
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



