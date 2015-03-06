<?php
@session_start();
include_once('core/core.php');

if(!isset($_SESSION['email'])){
    header('location: index.php');
}

$user = User::find($_SESSION['id_user']);

$a = explode("-",$user->birthday);

$day = $a[2];
$month = $a[1];
$year = $a[0];

$ptn = "/^0/";  // Regex
$str = "01234"; //Your input, perhaps $_POST['textbox'] or whatever
$day = preg_replace($ptn, "", $day);
$month = preg_replace($ptn, "", $month);
if(isset($_POST['lastname'])){
    $birthday = "$_POST[year]-$_POST[month]-$_POST[day]";

    $user->title = $_POST['title'];
    $user->lastname = $_POST['lastname'];
    $user->firstname = $_POST['firstname'];
    $user->birthday = $birthday;
    $user->phone = $_POST['phone'];
    $user->number_of_children = $_POST['number_of_children'];
    $user->address = $_POST['address'];
    $user->postcode = $_POST['postcode'];
    $user->city = $_POST['city'];
    $user->country = $_POST['country'];
    $user->save();
    $_SESSION['lastname'] = $user->lastname;

    if(Improve::where('user_id','=',$user->id)->count() > 0){
        $improve = Improve::where('user_id','=',$user->id)->first();
        $improve->complete_info = 1;
        $improve->save();
    }else{
        $improve =new Improve;
        $improve->complete_info = 1;
        $improve->user_id = $user->id;
        $improve->save();
    }

    echo '<script>alert("Data updated")</script>';
}
include('_includes/header-member.php');
?>



<!-- Register Content -->
<div id="content">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="breadcrumb"> <a href="index.php">Home</a> > Edit
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
                                                <span class="form-control" style="background-color: transparent; border: 0"> <?php echo $user->email; ?></span>
                                            </div>
                                        </div>


                                        <div class="register-text">2. Your Personal Information</div>
                                        <div class="form-group">
                                            <label for="inputPassword3" class="col-sm-3 control-label">Title </label>
                                            <div class="col-sm-9">
                                                <label class="radio-inline">
                                                    <input type="radio" name="title" id="inlineRadio1" value="Miss" <?php if($user->title == 'Miss') echo "checked" ?> > Miss
                                                </label>
                                                <label class="radio-inline">
                                                    <input type="radio" name="title" id="inlineRadio2" value="Ms" <?php if($user->title == 'Ms') echo "checked" ?> > Ms
                                                </label>
                                                <label class="radio-inline">
                                                    <input type="radio" name="title" id="inlineRadio3" value="Mr" <?php if($user->title == 'Mr') echo "checked" ?> > Mr
                                                </label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputPassword3" class="col-sm-3 control-label">Last Name * </label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" name="lastname" value="<?php echo $user->lastname; ?>" id="LastName" placeholder="Enter text ...">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputPassword3" class="col-sm-3 control-label">First Name * </label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" name="firstname" value="<?php echo $user->firstname; ?>" id="FirstName" placeholder="Enter text ...">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputPassword3" class="col-sm-3 control-label">Birthday * </label>
                                            <div class="col-sm-3">
                                                <select class="form-control" name="day" type="text" >
                                                    <option>Day</option>
                                                    <?php
                                                    $i = 1;
                                                    while($i<32){
                                                        $a ="";
                                                        if($i == $day){
                                                            $a = "selected";
                                                        }
                                                        echo "<option  $a>$i</option>";
                                                        $i++;
                                                    }
                                                    ?>
                                                    ?>
                                                </select>
                                            </div>
                                            <div class="col-sm-3">
                                                <select class="form-control" name="month" type="text" >
                                                    <option>Month</option>
                                                    <?php
                                                    $i = 1;
                                                    while($i<13){
                                                        $a ="";
                                                        if($i == $month){
                                                            $a = "selected";
                                                        }
                                                        echo "<option  $a>$i</option>";
                                                        $i++;
                                                    }
                                                    ?>
                                                    ?>
                                                </select>
                                            </div>
                                            <div class="col-sm-3">
                                                <select class="form-control" name="year" type="text" >
                                                    <option>Year</option>
                                                    <?php
                                                    $i = 1950;
                                                    while($i<date('Y')){
                                                        $a ="";
                                                        if($i == $year){
                                                            $a = "selected";
                                                        }
                                                        echo "<option  $a>$i</option>";
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
                                                <input type="text" class="form-control" id="FirstName" name="phone" value="<?php echo $user->phone; ?>" placeholder="+6 XXX XXX XXX">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="inputPassword3" class="col-sm-3 control-label">Number of children</label>
                                            <div class="col-sm-9">
                                                <select class="form-control" name="number_of_children" type="text" >
                                                    <option>Select from the list</option>
                                                    <option <?php if($user->number_of_children == 0) echo "selected" ?> >0</option>
                                                    <option <?php if($user->number_of_children == 1) echo "selected" ?>>1</option>
                                                    <option <?php if($user->number_of_children == 2) echo "selected" ?>>2</option>
                                                    <option <?php if($user->number_of_children == 3) echo "selected" ?>>3</option>
                                                    <option <?php if($user->number_of_children == 4) echo "selected" ?>>4</option>
                                                    <option <?php if($user->number_of_children == 5) echo "selected" ?>>5</option>
                                                    <option<?php if($user->number_of_children == 'More than 5') echo "selected" ?> >More than 5</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="register-text">3. Postal Address</div>
                                        <div class="form-group">
                                            <label for="inputPassword3" class="col-sm-3 control-label">Address</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" name="address" value="<?php echo $user->address; ?>" id="LastName" placeholder="Enter text ...">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputPassword3" class="col-sm-3 control-label">Post Code</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" value="<?php echo $user->postcode; ?>"  name="postcode" id="LastName" placeholder="Enter text ...">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputPassword3" class="col-sm-3 control-label">City</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" name="city" value="<?php echo $user->city; ?>"  id="LastName" placeholder="Enter text ...">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputPassword3" class="col-sm-3 control-label">Country *</label>
                                            <div class="col-sm-9">
                                                <select class="form-control" name="country" type="text" >
                                                    <option>Country</option>
                                                    <option <?php if($user->country == 'Malaysia') echo "selected" ?>>Malaysia</option>
                                                    <option <?php if($user->country == 'Indonesia') echo "selected" ?>>Indonesia</option>
                                                    <option <?php if($user->country == 'Thailand') echo "selected" ?>>Thailand</option>
                                                </select>
                                            </div>
                                        </div>
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
                                                    <button type="submit" value="Validate" class="btn btn-primary btn-lg btn-confirm">&#9656;  Confirm
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



