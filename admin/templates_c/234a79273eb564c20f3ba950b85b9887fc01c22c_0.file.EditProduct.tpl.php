<?php
/* Smarty version 3.1.34-dev-7, created on 2020-03-28 05:42:34
  from '/opt/lampp/htdocs/Smartyproject/Admin/templates/EditProduct.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e7ed5ba7d34d1_54612476',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '234a79273eb564c20f3ba950b85b9887fc01c22c' => 
    array (
      0 => '/opt/lampp/htdocs/Smartyproject/Admin/templates/EditProduct.tpl',
      1 => 1585370549,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5e7ed5ba7d34d1_54612476 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

	<?php $_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
	<?php echo '<script'; ?>
 type="text/javascript">
  		$(document).ready(function() {
    	$('.js-example-basic-multiple').select2();
    	
	});
	<?php echo '</script'; ?>
>

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
										 
										<input class="text-input small-input" type="text" id="small-input" name="pro_sku" value= "<?php echo $_smarty_tpl->tpl_vars['Product']->value['SKU'];?>
" readonly/>
										<br/>
								</p>
								
								<p>
									<label>Product Name</label>
									<input class="text-input small-input datepicker" type="text" id="medium-input" name="pro_name" value="<?php echo $_smarty_tpl->tpl_vars['Product']->value['NAME'];?>
" required/>
								</p>
								
								<p>
									<label>Product Price</label>
									<input class="text-input small-input" type="text" id="large-input" name="pro_price" value="<?php echo $_smarty_tpl->tpl_vars['Product']->value['PRICE'];?>
" required/>
								</p>

								<p>
									<label>Product Image</label>
									<img style='width: 60px; height:60px;'alt="no image" src="uploads/<?php echo $_smarty_tpl->tpl_vars['Product']->value['Image'];?>
" ><br>
									<input class="text-input small-input" type="file" id="large-input" name="img" value="<?php echo $_smarty_tpl->tpl_vars['Product']->value['Image'];?>
" />
								</p>

								<p>
									<select class="js-example-basic-multiple small-input" id="large-input" name="category[]" multiple="multiple">
										<option <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Cat']->value, 'value', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['value']->value) {
?>
										 		<?php if ($_smarty_tpl->tpl_vars['value']->value == "Men") {?>
										 			selected = 'selected'
										 		<?php }?>
										 	<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
										   >Men</option>
										<option <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Cat']->value, 'value', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['value']->value) {
?>
										 		<?php if ($_smarty_tpl->tpl_vars['value']->value == "Women") {?>
										 			selected = 'selected'
										 		<?php }?>
										 	<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?> >Women</option>
										<option <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Cat']->value, 'value', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['value']->value) {
?>
										 		<?php if ($_smarty_tpl->tpl_vars['value']->value == "Kids") {?>
										 			selected = 'selected'
										 		<?php }?>
										 	<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?> >Kids</option>
									</select>
								</p>

								<p>
									<label>Product Brand</label>
									<input class="text-input small-input" type="text" id="large-input" name="pro_brand" value="<?php echo $_smarty_tpl->tpl_vars['Product']->value['Brand'];?>
" required/>
								</p>

								<p>
									<label>Product Size</label>
									<select class="text-input small-input" name="pro_size" value="<?php echo $_smarty_tpl->tpl_vars['Product']->value['Size'];?>
">
										<option>SELECT</option>
										<option <?php if ($_smarty_tpl->tpl_vars['Product']->value['Size'] == "Small") {?>
											selected = 'selected' <?php }?> >small</option>
										<option <?php if ($_smarty_tpl->tpl_vars['Product']->value['Size'] == "Medium") {?>
											selected = 'selected' <?php }?> >Medium</option>
										<option <?php if ($_smarty_tpl->tpl_vars['Product']->value['Size'] == "Large") {?>
											selected = 'selected' <?php }?> >Large</option>
										<option <?php if ($_smarty_tpl->tpl_vars['Product']->value['Size'] == "Extra large") {?>
											selected = 'selected' <?php }?> >Extra large</option>
									</select>
								</p>

								<p>
									<label>Product Color</label>
									<select class="text-input small-input" name="pro_color" value="<?php echo $_smarty_tpl->tpl_vars['Product']->value['Color'];?>
">
										<option>SELECT</option>
										<option <?php if ($_smarty_tpl->tpl_vars['product']->value['Color'] == "Blue") {?>
										selected = 'selected' <?php }?> >Blue</option>
										<option <?php if ($_smarty_tpl->tpl_vars['Product']->value['Color'] == "White") {?>
											selected = 'selected' <?php }?> >White</option>
										<option <?php if ($_smarty_tpl->tpl_vars['Product']->value['Color'] == "Purple") {?>
											selected = 'selected' <?php }?> >Purple</option>
										<option <?php if ($_smarty_tpl->tpl_vars['Product']->value['Color'] == "Violet") {?>
											selected = 'selected' <?php }?> >Violet</option>
										<option <?php if ($_smarty_tpl->tpl_vars['Product']->value['Color'] == "Brown") {?>
											selected = 'selected' <?php }?> >Brown</option>
										<option <?php if ($_smarty_tpl->tpl_vars['Product']->value['Color'] == "Black") {?>
											selected = 'selected' <?php }?> >Black</option>
										<option <?php if ($_smarty_tpl->tpl_vars['Product']->value['Color'] == "Green") {?>
											selected = 'selected' <?php }?> >Green</option>
										<option <?php if ($_smarty_tpl->tpl_vars['Product']->value['Color'] == "Red") {?>
											selected = 'selected' <?php }?> >Red</option>
										<option <?php if ($_smarty_tpl->tpl_vars['Product']->value['Color'] == "Yellow") {?>
											selected = 'selected' <?php }?> >Yellow</option>
										<option <?php if ($_smarty_tpl->tpl_vars['Product']->value['Color'] == "pink") {?>
											selected = 'selected' <?php }?> >pink</option>
									</select>
								</p>

								<p>
									<label>Product Tag</label>
									<select class="text-input small-input" name="pro_tags" value="<?php echo $_smarty_tpl->tpl_vars['product']->value['Tag'];?>
">
										<option>SELECT</option>
										<option <?php if ($_smarty_tpl->tpl_vars['Product']->value['Tags'] == "Towel") {?>
											selected = 'selected' <?php }?> >Towel</option>
										<option <?php if ($_smarty_tpl->tpl_vars['Product']->value['Tags'] == "Coat") {?>
											selected = 'selected' <?php }?> >Coat</option>
										<option <?php if ($_smarty_tpl->tpl_vars['Product']->value['Tags'] == "Dresses") {?>
											selected = 'selected' <?php }?> >Dresses</option>
										<option <?php if ($_smarty_tpl->tpl_vars['Product']->value['Tags'] == "Shoes") {?>
											selected = 'selected' <?php }?> >Shoes</option>
										<option <?php if ($_smarty_tpl->tpl_vars['Product']->value['Tags'] == "Trousers") {?>
											selected = 'selected' <?php }?> >Trousers</option>
										<option <?php if ($_smarty_tpl->tpl_vars['Product']->value['Tags'] == "Mens hat") {?>
											selected = 'selected' <?php }?> >Mens hat</option>
										<option <?php if ($_smarty_tpl->tpl_vars['Product']->value['Tags'] == "Bagpacks") {?>
											selected = 'selected' <?php }?> >Bagpacks</option>
										<option <?php if ($_smarty_tpl->tpl_vars['Product']->value['Tags'] == "Winter wear") {?>
											selected = 'selected' <?php }?> >Winter wear</option>
										<option <?php if ($_smarty_tpl->tpl_vars['Product']->value['Tags'] == "Summer wear") {?>
											selected = 'selected' <?php }?> >Summer wear</option>
									</select>
								</p>

								<p>
									<label>Product Stock</label>
									<input class="text-input small-input" type="text" id="large-input" name="pro_stock" value="<?php echo $_smarty_tpl->tpl_vars['Product']->value['Stock'];?>
" required/>
								</p>
								<p>
									<label>Short Discription</label>
									<textarea class="text-input small-input" id="large-input" name="short_des" required><?php echo $_smarty_tpl->tpl_vars['Product']->value['Short_des'];?>
</textarea>
								</p>
								<p>
									<label>Long Discription</label>
									<textarea class="text-input small-input" id="large-input" name="long_des" required><?php echo $_smarty_tpl->tpl_vars['Product']->value['Long_des'];?>
</textarea>
								</p>
								<hr>
								<div id="variation">
									<p><label>Variations</label>
									<table>
										<tr>
											<th>Color</th><th>Size</th><th>Price</th>
										</tr>
										<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Row']->value, 'value', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['value']->value) {
?>
										<tr>
											<td>
												<select class="Color" name="var_color-<?php echo '<?php ';?>
echo $key; <?php echo '?>';?>
">
													<option>SELECT</option>
													<option <?php if ($_smarty_tpl->tpl_vars['value']->value['Color'] == "Blue") {?>
														selected = 'selected' <?php }?> >Blue</option>
													<option <?php if ($_smarty_tpl->tpl_vars['value']->value['Color'] == "White") {?>
														selected = 'selected' <?php }?> >White</option>
													<option <?php if ($_smarty_tpl->tpl_vars['value']->value['Color'] == "Purple") {?>
														selected = 'selected' <?php }?> >Purple</option>
													<option <?php if ($_smarty_tpl->tpl_vars['value']->value['Color'] == "violet") {?>
														selected = 'selected' <?php }?> >violet</option>
													<option <?php if ($_smarty_tpl->tpl_vars['value']->value['Color'] == "Brown") {?>
														selected = 'selected' <?php }?> >Brown</option>
													<option <?php if ($_smarty_tpl->tpl_vars['value']->value['Color'] == "Black") {?>
														selected = 'selected' <?php }?> >Black</option>
													<option <?php if ($_smarty_tpl->tpl_vars['value']->value['Color'] == "Green") {?>
														selected = 'selected' <?php }?> >Green</option>
													<option <?php if ($_smarty_tpl->tpl_vars['value']->value['Color'] == "Red") {?>
														selected = 'selected' <?php }?> >Red</option>
													<option <?php if ($_smarty_tpl->tpl_vars['value']->value['Color'] == "Yellow") {?>
														selected = 'selected' <?php }?> >Yellow</option>
													<option <?php if ($_smarty_tpl->tpl_vars['value']->value['Color'] == "pink") {?>
														selected = 'selected' <?php }?> >pink</option>
												</select>
											</td>
											<td>
												<select class="Size" name="var_size-<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
">
													<option>SELECT</option>
													<option <?php if ($_smarty_tpl->tpl_vars['value']->value['Size'] == "small") {?>
														selected = 'selected' <?php }?> >small</option>
													<option <?php if ($_smarty_tpl->tpl_vars['value']->value['Size'] == "Medium") {?>
														selected = 'selected' <?php }?> >Medium</option>
													<option <?php if ($_smarty_tpl->tpl_vars['value']->value['Size'] == "Large") {?>
														selected = 'selected' <?php }?> >Large</option>
													<option <?php if ($_smarty_tpl->tpl_vars['value']->value['Size'] == "Extra large") {?>
														selected = 'selected' <?php }?> >Extra large</option>
												</select>
											</td>
											<td>
												<input type="text" id="large-input" name="var_price-<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['value']->value['Price'];?>
" required />
											</td>
											
										</tr>
										<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
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
			<?php echo '<script'; ?>
 type="text/javascript" src="variation_editpro.js"><?php echo '</script'; ?>
>
			
			<!-- End Notifications -->
			<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
