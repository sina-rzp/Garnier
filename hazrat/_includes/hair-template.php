
<input id="hidEmailPlaceholder" type="hidden" value="<?php if(isset($_SESSION['email'])) echo $_SESSION['email']; ?>" />

<script id="hiddenHairTemplate" type="text/x-custom-template">
<div class="row">
<div id="rootHair">
  <div class="navbar-inner">
    <div class="container">
	<div class="close-baby">
		<ul>
		  	<li><a href="#tab1" data-toggle="tab" id="tab1Header">
		  		What is your skin concern?


		  		</a>
		  	</li>
			<li><a href="#tab2" data-toggle="tab" id="tab2Header">
				What Is Your Skin Type
				</a>
			</li>
			<li><a href="#tab3" data-toggle="tab" id="tab3Header">
				What Is Your Skin Type
				</a>
			</li>
			<li><a href="#tab4" data-toggle="tab" id="tab4Header">
				What Is Your Skin Type
				</a>
			</li>
			<li><a href="#tab5" data-toggle="tab" id="tab5Header">
				We recommend...
				</a>
			</li>
		</ul>
	</div>
 </div>
  </div>


<div class="tab-content ">

    <div class="tab-pane" id="tab1">
		<div class="col-xs-4 face">
			<img src="images/fym/colorhair.png">
		</div>
		<div class="col-xs-8">
    		<span class="tanye">What is your skin concern?</span>
    		<div class="tanyelah">

		
			</div>
     	</div>
    </div>

    <div class="tab-pane" id="tab2">
    
		<div class="col-xs-4 face">
			<img src="images/fym/colorhair.png">
		</div>
		<div class="col-xs-8">
	    	<span class="tanye">What Is Your Skin Type?</span>
		    <div class="tanyelah">
	    	
			</div>
		</div>

     </div>

     <div class="tab-pane" id="tab3">
    
		<div class="col-xs-4 face">
			<img src="images/fym/colorhair.png">
		</div>
		<div class="col-xs-8">
	    	<span class="tanye">What Is Your Skin Type?</span>
		    <div class="tanyelah">
	    	
			</div>
		</div>

     </div>

     <div class="tab-pane" id="tab4">
    
		<div class="col-xs-4 face">
			<img src="images/fym/colorhair.png">
		</div>
		<div class="col-xs-8">
	    	<span class="tanye">What Is Your Skin Type?</span>
		    <div class="tanyelah">
	    	
			</div>
		</div>

     </div>
		
	<div class="tab-pane" id="tabResult">
		
		<div class="col-xs-4 face">
			<img src="images/fym/colorhair.png">
		</div>
		
		<div class="col-xs-8">
	    	<span class="tanye">We recommend...</span>
	    	<div class="tanyela">
	    	
	    		<div class=" radio" id="productTemplate1">
		    		<a href="" id="learnMoreBtn1">
		    			<img src="" id="productImage1" width="200px">
		    		</a>
				</div>
				<div class=" radio" id="productTemplate2">
		    		<a href="" id="learnMoreBtn2">
		    			<img src="" id="productImage2" width="200px">
		    		</a>
				</div>
		
			
		
				<div class="radio " id="productTemplate3">
		    		<a href="" id="learnMoreBtn3">
		    			<img src="" id="productImage3" width="200px">
		    		</a>
				</div>
				<div class="radio " id="productTemplate4">
		    		<a href="" id="learnMoreBtn4">
		    			<img src="" id="productImage3" width="200px">
		    		</a>
				</div>
			
			
				<div class="radio " id="productTemplate5">
		    		<a href="" id="learnMoreBtn5">
		    			<img src="" id="productImage3" width="200px">
		    		</a>
				</div>
				
			

			</div>
			
			</div>
			
	     </div>
		
	
    </div>
</div>


</div>
</div>
</div>

<div class="row">
	<div class="col-xs-2 ">
		<div class="button-wizard">
			<ul class="pager wizard">
				<!-- <li class="previous first" style="display:none;"><a href="#">First</a></li> -->
				<li class="previous"><a href="#">Previous</a></li>
				
			</ul>
		</div>
	</div>

	<div class="col-xs-8 ">
		<div id="bar" class="progress">
          <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%;"></div>
        </div>
    </div>
    <div class="col-xs-2 ">
    	<div class="button-wizard">
			<ul class="pager wizard">
				<!-- <li class="next last" style="display:none;"><a href="#">Last</a></li> -->
	  			<li class="next"><a href="#"> Next </a></li>
	  			<li class="finish" style="display:none;"><a href="javascript:;">Restart</a></li>
			</ul>
		</div>
    </div>
</div>

</script>