<!-- Header -->
<?php
@session_start();

if(isset($_GET['search'])){
    include_once('core/core.php');

    if(Product::where('product_name','LIKE',"%$_GET[search]%")
            ->orWhere('sub_header','LIKE',"%$_GET[search]%")
            ->orWhere('description','LIKE',"%$_GET[search]%")
            ->count() == 0){
        echo '<script>alert("No results found ")</script>';
    }else{
        $products = Product::where('product_name','LIKE',"%$_GET[search]%")
            ->orWhere('sub_header','LIKE',"%$_GET[search]%")
            ->orWhere('description','LIKE',"%$_GET[search]%")
            ->groupBy('id')
            ->get();
    }






}
include('_includes/header.php');
?>
<style></style>



<!-- Register Content -->
	<div id="content">
		<div class="container">
		
				

<!-- Form -->

				<div class="row">
					<div class="col-md-12">
						<div class="box-content">
					
							<div class="row">
									<div class="container">
								<div class="col-md-12">
										<h1>Search results</h1>
<!-- Search -->



								<div class="row">
									<div class="col-md-12 search">
										<form class="form-inline" action="" method="GET">
											<label for="search">Search</label>
											<input type="text" class="form-control search-width" id="search" value="<?php if(isset($_GET['search'])) echo $_GET['search']; ?>" name="search" placeholder="Looking for a product to suit your needs? ">
											<button type="submit" class="btn btn-inverse btn-hijau btn-xs"><i class="fa fa-search"></i></button>
										</form>
                                        <br/><br/>

                                        <?php
                                        if(isset($products)){
                                            echo "<ul>";
                                            foreach($products as $product){ ?>

                                                <li>
                                                    <a href="<?php echo $product->link; ?>"><strong><?php echo $product->product_name; ?></strong></a>
                                                    <p class="search-product-description">
                                                        <?php echo $product->description; ?>
                                                    </p>

                                                </li>

                                            <?php
                                            }
                                            echo "</ul>";


                                        }
                                        ?>




                                    </div>

                                   	</div>
<!-- End of Search -->
								</div>
								
							</div>
						</div>
						</div>
					</div>
				</div>
		</div>
	</div>
<!-- End OF Register Content -->







<?php
include('_includes/footer.php');
?>



