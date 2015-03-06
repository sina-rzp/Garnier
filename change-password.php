<?php
session_start();

if(isset($_POST['pass_old'])){
    include('core/core.php');

    $pass_old = md5($_POST['pass_old']);
    $newpass1 = md5($_POST['newpass1']);
    $newpass2 = md5($_POST['newpass2']);

    if($newpass2 != $newpass1){
        echo '<script>alert("Password does not match the confirm password.")</script>';
    }
    else{
        $user = User::find($_SESSION['id_user']);
        if($user->password == $pass_old){
            $user = User::find($_SESSION['id_user']);
            $user->password = $newpass1;
            $user->save();

            echo '<script>alert("Your password has been changed")</script>';
            //header('location:success-register.php');
            echo '<script>window.location.href = "index-member.php";</script>';

            die();

        }else{
            echo '<script>alert("Your current password is incorrect")</script>';
        }
    }

}
include('_includes/header-member.php');
?>


<!-- Register Content -->
	<div id="content">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="breadcrumb"> <a href="index.php">Home</a> > Change Password
					</div>
				</div>

				<div class="col-md-12">
					<div class="tajuk-besar"><h1>Change Password</h1>
						
						
					</div>
				</div>

<!-- Form -->

				<div class="row">
					<div class="col-md-12">
						<div class="box-content">
						<div class="container">
							<div class="row">
								<div class="col-md-12">

<!-- Login Section -->					<form action="" method="POST" class="login-section form-horizontal">
											<div class="form-group">
    											<label for="inputEmail3" class="col-sm-3 control-label">Current Password</label>
											    <div class="col-sm-9">
											      <input type="password" class="form-control" name="pass_old" placeholder="*******" required>
											    </div>
  											</div>

  											<div class="form-group">
    											<label for="inputEmail3" class="col-sm-3 control-label">New Password</label>
											    <div class="col-sm-9">
											      <input type="password" class="form-control" name="newpass1" placeholder="*******" required>
											    </div>
  											</div>

  											<div class="form-group">
    											<label for="inputEmail3" class="col-sm-3 control-label">Confirm password</label>
											    <div class="col-sm-9">
											      <input type="password" class="form-control" name="newpass2" placeholder="*******" required>
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



