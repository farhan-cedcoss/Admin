
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

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
			<p id="page-intro">What would you like to do?</p>
			
			<div class="clear"></div> <!-- End .clear -->
			
			<div class="content-box"><!-- Start Content Box -->
				
				<div class="content-box-header">
					
					<h3>Edit Product</h3>
					
					<div class="clear"></div>
					
				</div> <!-- End .content-box-header -->
				
				<div class="content-box-content">

					<div class="tab-content default-tab" id="tab2">
					
						<form action="#" method="POST" enctype="multipart/form-data">
							
							<fieldset> <!-- Set class to "column-left" or "column-right" on fieldsets to divide the form into columns -->
								
								<p>
									<label>Product SKU</label>
										 
										<input class="text-input small-input" type="text" id="small-input" name="pro_sku" value= "{$Product.SKU}" readonly/>
										<br/>
								</p>
								
								<p>
									<label>Product Name</label>
									<input class="text-input small-input datepicker" type="text" id="medium-input" name="pro_name" value="{$Product.NAME}" required/>
								</p>
								
								<p>
									<label>Product Price</label>
									<input class="text-input small-input" type="text" id="large-input" name="pro_price" value="{$Product.PRICE}" required/>
								</p>

								<p>
									<label>Product Image</label>
									<img style='width: 60px; height:60px;'alt="no image" src="uploads/{$Product.Image}" ><br>
									<input class="text-input small-input" type="file" id="large-input" name="img" value="{$Product.Image}" />
								</p>

								<p>
									<select class="js-example-basic-multiple small-input" id="large-input" name="category[]" multiple="multiple">
										<option {foreach $Cat as $key => $value}
										 		{if $value=="Men"}
										 			selected = 'selected'
										 		{/if}
										 	{/foreach}
										   >Men</option>
										<option {foreach $Cat as $key => $value}
										 		{if $value=="Women"}
										 			selected = 'selected'
										 		{/if}
										 	{/foreach} >Women</option>
										<option {foreach $Cat as $key => $value}
										 		{if $value=="Kids"}
										 			selected = 'selected'
										 		{/if}
										 	{/foreach} >Kids</option>
									</select>
								</p>

								<p>
									<label>Product Brand</label>
									<input class="text-input small-input" type="text" id="large-input" name="pro_brand" value="{$Product.Brand}" required/>
								</p>

								<p>
									<label>Product Size</label>
									<select class="text-input small-input" name="pro_size" value="{$Product.Size}">
										<option>SELECT</option>
										<option {if $Product.Size == "Small"}
											selected = 'selected' {/if} >small</option>
										<option {if $Product.Size == "Medium"}
											selected = 'selected' {/if} >Medium</option>
										<option {if $Product.Size == "Large"}
											selected = 'selected' {/if} >Large</option>
										<option {if $Product.Size == "Extra large"}
											selected = 'selected' {/if} >Extra large</option>
									</select>
								</p>

								<p>
									<label>Product Color</label>
									<select class="text-input small-input" name="pro_color" value="{$Product.Color}">
										<option>SELECT</option>
										<option {if $product.Color== "Blue"}
										selected = 'selected' {/if} >Blue</option>
										<option {if $Product.Color == "White"}
											selected = 'selected' {/if} >White</option>
										<option {if $Product.Color == "Purple"}
											selected = 'selected' {/if} >Purple</option>
										<option {if $Product.Color == "Violet"}
											selected = 'selected' {/if} >Violet</option>
										<option {if $Product.Color == "Brown"}
											selected = 'selected' {/if} >Brown</option>
										<option {if $Product.Color == "Black"}
											selected = 'selected' {/if} >Black</option>
										<option {if $Product.Color == "Green"}
											selected = 'selected' {/if} >Green</option>
										<option {if $Product.Color == "Red"}
											selected = 'selected' {/if} >Red</option>
										<option {if $Product.Color == "Yellow"}
											selected = 'selected' {/if} >Yellow</option>
										<option {if $Product.Color == "pink"}
											selected = 'selected' {/if} >pink</option>
									</select>
								</p>

								<p>
									<label>Product Tag</label>
									<select class="text-input small-input" name="pro_tags" value="{$product.Tag}">
										<option>SELECT</option>
										<option {if $Product.Tags == "Towel"}
											selected = 'selected' {/if} >Towel</option>
										<option {if $Product.Tags == "Coat"}
											selected = 'selected' {/if} >Coat</option>
										<option {if $Product.Tags == "Dresses"}
											selected = 'selected' {/if} >Dresses</option>
										<option {if $Product.Tags == "Shoes"}
											selected = 'selected' {/if} >Shoes</option>
										<option {if $Product.Tags == "Trousers"}
											selected = 'selected' {/if} >Trousers</option>
										<option {if $Product.Tags == "Mens hat"}
											selected = 'selected' {/if} >Mens hat</option>
										<option {if $Product.Tags == "Bagpacks"}
											selected = 'selected' {/if} >Bagpacks</option>
										<option {if $Product.Tags == "Winter wear"}
											selected = 'selected' {/if} >Winter wear</option>
										<option {if $Product.Tags == "Summer wear"}
											selected = 'selected' {/if} >Summer wear</option>
									</select>
								</p>

								<p>
									<label>Product Stock</label>
									<input class="text-input small-input" type="text" id="large-input" name="pro_stock" value="{$Product.Stock}" required/>
								</p>
								<p>
									<label>Short Discription</label>
									<textarea class="text-input small-input" id="large-input" name="short_des" required>{$Product.Short_des}</textarea>
								</p>
								<p>
									<label>Long Discription</label>
									<textarea class="text-input small-input" id="large-input" name="long_des" required>{$Product.Long_des}</textarea>
								</p>
								<hr>
								<div id="variation">
									<p><label>Variations</label>
									<table>
										<tr>
											<th>Color</th><th>Size</th><th>Price</th>
										</tr>
										{foreach $Row as $key => $value}
										<tr>
											<td>
												<select class="Color" name="var_color-<?php echo $key; ?>">
													<option>SELECT</option>
													<option {if $value.Color== "Blue"}
														selected = 'selected' {/if} >Blue</option>
													<option {if $value.Color== "White"}
														selected = 'selected' {/if} >White</option>
													<option {if $value.Color== "Purple"}
														selected = 'selected' {/if} >Purple</option>
													<option {if $value.Color== "violet"}
														selected = 'selected' {/if} >violet</option>
													<option {if $value.Color== "Brown"}
														selected = 'selected' {/if} >Brown</option>
													<option {if $value.Color== "Black"}
														selected = 'selected' {/if} >Black</option>
													<option {if $value.Color== "Green"}
														selected = 'selected' {/if} >Green</option>
													<option {if $value.Color== "Red"}
														selected = 'selected' {/if} >Red</option>
													<option {if $value.Color== "Yellow"}
														selected = 'selected' {/if} >Yellow</option>
													<option {if $value.Color== "pink"}
														selected = 'selected' {/if} >pink</option>
												</select>
											</td>
											<td>
												<select class="Size" name="var_size-{$key}">
													<option>SELECT</option>
													<option {if $value.Size== "small"}
														selected = 'selected' {/if} >small</option>
													<option {if $value.Size== "Medium"}
														selected = 'selected' {/if} >Medium</option>
													<option {if $value.Size== "Large"}
														selected = 'selected' {/if} >Large</option>
													<option {if $value.Size== "Extra large"}
														selected = 'selected' {/if} >Extra large</option>
												</select>
											</td>
											<td>
												<input type="text" id="large-input" name="var_price-{$key}" value="{$value.Price}" required />
											</td>
											
										</tr>
										{/foreach}
									</table></p>
								</div>
								
								<p>
									<input class="button" name="update" type="submit" value="Update" />
								</p>
								
							</fieldset>
							
							<div class="clear"></div><!-- End .clear -->
							
						</form>
						
					</div> <!-- End #tab2 -->        
					
				</div> <!-- End .content-box-content -->
				
			</div> <!-- End .content-box -->
			
			
			<div class="clear"></div>
			<script type="text/javascript" src="variation_editpro.js"></script>
			
			<!-- End Notifications -->
			{include file = "footer.tpl"}
