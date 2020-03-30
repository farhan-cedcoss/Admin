<?php
/* Smarty version 3.1.34-dev-7, created on 2020-03-28 13:20:26
  from '/opt/lampp/htdocs/Smartyproject/Admin/templates/vieworders.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e7f410adb2bc0_53230690',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1fd40bbfdbb60ca644e51d11e2c9cae1893ef109' => 
    array (
      0 => '/opt/lampp/htdocs/Smartyproject/Admin/templates/vieworders.tpl',
      1 => 1585376297,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5e7f410adb2bc0_53230690 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

	<?php $_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

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
					
					<h3>Manage Product</h3>
					
					
					<div class="clear"></div>
					
				</div> <!-- End .content-box-header -->
				
				<div class="content-box-content">
					
				<div class="tab-content default-tab" id="tab1"> <!-- This is the target div. id must match the href of this div's tab -->
						
						
						<table>
							
							<thead>
								<tr>
								   <th>SKU</th>
								   <th>NAME</th>
								   <th>Price</th>
								   <th>Quantity</th>
								   <th>Category</th>
								   <th>Brand</th>
								   <th>Color</th>
								</tr>
								
							</thead>
						 
							<!--  -->
						 
							<tbody>
								
							<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['row']->value, 'value', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['value']->value) {
?>

								<tr><td><?php echo $_smarty_tpl->tpl_vars['value']->value['SKU'];?>
</td>
									<td><?php echo $_smarty_tpl->tpl_vars['value']->value['Name'];?>
</td>
									<td><?php echo $_smarty_tpl->tpl_vars['value']->value['Price'];?>
</td>
									<td><?php echo $_smarty_tpl->tpl_vars['value']->value['Quantity'];?>
</td>
									<td><?php echo $_smarty_tpl->tpl_vars['value']->value['Category'];?>
</td>
									<td><?php echo $_smarty_tpl->tpl_vars['value']->value['Brand'];?>
</td>
									<td><?php echo $_smarty_tpl->tpl_vars['value']->value['Color'];?>
</td>
									</tr>";
							<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
								
							</tbody>
							
						</table>
						
					</div> <!-- End #tab1 -->	
					
				</div> <!-- End .content-box-content -->
				
			</div> <!-- End .content-box -->
			
			<!-- End Notifications -->
			
			<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
