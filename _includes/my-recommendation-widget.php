<?php
@session_start();
include_once('core/core.php');

$email = $_SESSION['email'];
//$email = 'aboon@gmail.com';

if( !isset($email) ) { echo 'Not logged in'; return; }

/* $quest_whitening = file_get_contents('http://blackboxdev.co/projects/garnierx/hazrat/json/whitening.json');
$json = json_decode($quest_whitening, true); // decode the JSON into an associative array
echo '<pre>' . print_r($json, true) . '</pre>'; */

$image_root = 'hazrat/';
$recommended_products = Recommendation::distinct()->where('user_email' , '=', $email)->orderBy('updated_at', 'desc')
						->groupBy('product_name')->take(4)->get();

//echo $last_recommendation->image;

?>

<style>
.glyphicon {  margin-bottom: 10px;margin-right: 10px;}

small {
	display: block;
	line-height: 1.428571429;
	color: #999;
}
</style>

<div class="container">
    <div class="row">
        <div class="col-xs-12 col-sm-6 col-md-6">
            <div class="well well-sm">
                <div class="row">
					<?php 
					foreach ($recommended_products as $rp){
						$prod = Product::where('product_name' , 'like', '%'.$rp->product_name.'%')->first();
					?>
						<div class="col-sm-3 col-md-3">
							<a href="<?php echo $prod->link; ?>">
								<img src="<?php echo $rp->image; ?>" alt="<?php $rp->product_name; ?>" class="img-rounded img-responsive" />
							</a>
						</div>
					<?php 
					}
					?>
					
                    <!-- <div class="col-sm-6 col-md-8">
                        <h4><?php //echo $last_recommendation->product_name; ?></h4>
                        <small><cite title="San Francisco, USA">Your selections:</cite></small>
                        <ul class="list-group">
							<?php 
							//foreach(explode('|', $last_recommendation->options_selected) as $opt){
							?>
								<li class="list-group-item"><i class="fa fa-check-square-o"></i>
								<?php //echo $opt;?></li>
							<?php
							//}
							?>
						  
						</ul>
                        
                    </div> -->
                </div>
            </div>
        </div>
    </div>
</div>


