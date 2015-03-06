<?php
@session_start();
include_once('core/core.php');

/* if(!isset($_SESSION['email'])){
    //header('location: index.php');
	return; //if not logged in, stop saving data.
} */

//$user = User::find($_SESSION['id_user']);

if(isset($_POST['product_name']) && isset($_POST['category']) && isset($_POST['options_selected']) 
	&& isset($_POST['image']) && !empty($_POST['user_email'])){
	$recommendation = new Recommendation;
	$recommendation->user_email = $_POST['user_email'];
	$recommendation->product_name = $_POST['product_name'];
	$recommendation->category = $_POST['category'];
	$recommendation->options_selected = $_POST['options_selected'];
	$recommendation->image = $_POST['image'];
	$recommendation->save();
	
	echo 'Recommendation saved!';
}else {
	header('HTTP/1.0 400 Bad Request');
}

