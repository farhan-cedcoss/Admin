<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
	<style type="text/css">
	    .js-example-basic-multiple {
	      width: 200px;
	    }
	    
 	</style>
	{include file="header.tpl"}
	<script type="text/javascript">
  		$(document).ready(function() {
    	$('.js-example-basic-multiple').select2();
    	
	});
	</script>

	<body><div id="body-wrapper"> <!-- Wrapper for the radial gradient background -->
		
	 
		<div id="main-content"> <!-- Main Content Section with everything -->
			
			<noscript> <!-- Show a notification if the user has disabled javascript -->
				<div class="notification error png_bg">
					<div>
						Javascript is disabled or is not supported by your browser. Please <a href="http://browsehappy.com/" title="Upgrade to a better browser">upgrade</a> your browser or <a href="http://www.google.com/support/bin/answer.py?answer=23852" title="Enable Javascript in your browser">enable</a> Javascript to navigate the interface properly.
					</div>
				</div>
			</noscript>
			
			<!-- Page Head -->
			<h2>Welcome John</h2>

			{*<?php
			if ($success == 1){ 
				$success=0;
			?>
				<div class="notification success png_bg">
					<a href="#" class="close"><img src="resources/images/icons/cross_grey_small.png" title="Close this notification" alt="close" /></a>
					<div>
						Successfully Added.
					</div>
				</div>
			<?php }
				 if ($error == 1){?>
				<div class="notification error png_bg">
					<a href="#" class="close"><img src="resources/images/icons/cross_grey_small.png" title="Close this notification" alt="close" /></a>
					<div>
						There is some Error.
					</div>
				</div>
			<?php } ?>*}

			<div class="clear"></div> <!-- End .clear -->
			
			<div class="content-box"><!-- Start Content Box -->
				
				<div class="content-box-header">
					
					<h3>Add Product</h3>
					
					<div class="clear"></div>
					
				</div> <!-- End .content-box-header -->
				
				<div class="content-box-content">
					
					
					<div class="tab-content default-tab" id="tab2">
					
						<form method="POST" enctype="multipart/form-data">
							
							<fieldset> <!-- Set class to "column-left" or "column-right" on fieldsets to divide the form into columns -->
								
								<p>
									<label>Product SKU</label>
										<input class="text-input small-input" type="number" id="small-input" min="1" name="pro_sku" required/>
										<br />
								</p>
								
								<p>
									<label>Product Name</label>
									<input class="text-input small-input datepicker" type="text" id="medium-input" name="pro_name" required/>
								</p>
								
								<p>
									<label>Product Price</label>
									<input class="text-input small-input" type="text" id="large-input" name="pro_price" required/>
								</p>

								<p>
									<label>Product Image</label>
									<input class="text-input small-input" type="file" id="large-input" name="img" required/>
								</p>

								<p>
									<label>Category</label>
									<select class="js-example-basic-multiple" id="large-input" name="category[]" multiple="multiple">
										<option value="Men">Men</option>
										<option value="Women">Women</option>
										<option value="Kids">Kids</option>
									</select>
								</p>

								<p>
									<label>Product Brand</label>
									<input class="text-input small-input" type="text" id="large-input" name="pro_brand" required />
								</p>

								<p>
									<label>Product Size</label>
									<select class="text-input small-input" name="pro_size">
										<option>SELECT</option>
										<option>small</option>
										<option>Medium</option>
										<option>Large</option>
										<option>Extra large</option>
									</select>
								</p>

								<p>
									<label>Product Color</label>
									<select class="text-input small-input" name="pro_color">
										<option>SELECT</option>
										<option>Blue</option>
										<option>White</option>
										<option>Purple</option>
										<option>violet</option>
										<option>Brown</option>
										<option>Black</option>
										<option>Green</option>
										<option>Red</option>
										<option>Yellow</option>
										<option>pink</option>
									</select>
								</p>
								<p>
									<label>Product Tags</label>
									<select class="text-input small-input" name="pro_tags">
										<option>SELECT</option>
										<option>Shoes</option>
										<option>Towel</option>
										<option>Trousers</option>
										<option>Coat</option>
										<option>Dresses</option>
										<option>Mens hat</option>
										<option>Bagpacks</option>
										<option>Green</option>
										<option>Winter wear</option>
										<option>Summer wear</option>
									</select>
								</p>
								<p>
									<label>Product Stock</label>
									<input class="text-input small-input" type="text" id="large-input" name="pro_stock" required/>
								</p>
								<p>
									<label>Short Discription</label>
									<textarea class="text-input small-input" id="large-input" name="short_des" required></textarea>
								</p>
								<p>
									<label>Long Discription</label>
									<textarea class="text-input small-input" id="large-input" name="long_des" required></textarea>
								</p>

								<hr>
								<div id="variation">
									
								</div>
								<p>
									<input class="button" name="submit" type="submit" value="Submit" />
								</p>
								
							</fieldset>
							
							<div class="clear"></div><!-- End .clear -->
							
						</form>
						
					</div> <!-- End #tab2 -->        
					
				</div> <!-- End .content-box-content -->
				
			</div> <!-- End .content-box -->
			{include file="footer.tpl"}
			
			<div class="clear"></div>
			<script type="text/javascript" src="variation.js"></script>

			
		