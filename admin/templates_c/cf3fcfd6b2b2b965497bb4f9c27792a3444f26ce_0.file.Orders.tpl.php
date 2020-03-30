<?php
/* Smarty version 3.1.34-dev-7, created on 2020-03-28 06:25:58
  from '/opt/lampp/htdocs/Smartyproject/Admin/templates/Orders.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e7edfe6dc0879_94210466',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cf3fcfd6b2b2b965497bb4f9c27792a3444f26ce' => 
    array (
      0 => '/opt/lampp/htdocs/Smartyproject/Admin/templates/Orders.tpl',
      1 => 1585373153,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5e7edfe6dc0879_94210466 (Smarty_Internal_Template $_smarty_tpl) {
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
								   <th>Order ID</th>
								   <th>First NAME</th>
								   <th>Last Name</th>
								   <th>Company</th>
								   <th>Country</th>
								   <th>Address</th>
								   <th>Postcode</th>
								   <th>Email</th>
								   <th>Mobile Number</th>
								   <th>Date Time</th>
								</tr>
								
							</thead>
						 
							<tfoot>
								<tr>
									<td colspan="6">
										<div class="pagination">
											<a href="?pid=1" title="First Page">&laquo; First</a><a href="<?php if ($_smarty_tpl->tpl_vars['pageno']->value <= 1) {?> '#' <?php } else { ?> ?pid=<?php echo $_smarty_tpl->tpl_vars['pageno']->value-1;?>
 <?php }?>" title="Previous Page">&laquo; Previous</a>
											<a href="?pid=1" class="number <?php if ($_smarty_tpl->tpl_vars['pageno']->value == 1 || $_smarty_tpl->tpl_vars['pageno']->value == '') {?>
											 current <?php }?>" title="1">1</a>

										<?php
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? $_smarty_tpl->tpl_vars['total_pages']->value+1 - (2) : 2-($_smarty_tpl->tpl_vars['total_pages']->value)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 2, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration === 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration === $_smarty_tpl->tpl_vars['i']->total;?>
											<a href="?pid=<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
" class="number <?php if ($_smarty_tpl->tpl_vars['pageno']->value == $_smarty_tpl->tpl_vars['i']->value) {?> current <?php }?>" title="1"> <?php echo $_smarty_tpl->tpl_vars['i']->value;?>
 </a>
										<?php }
}
?>
											<a href="<?php if ($_smarty_tpl->tpl_vars['pageno']->value >= $_smarty_tpl->tpl_vars['total_pages']->value) {?> # <?php } else { ?> ?pid=<?php echo $_smarty_tpl->tpl_vars['pageno']->value+1;?>
 <?php }?>" title="Next Page">Next &raquo;</a><a href="?pid=<?php echo $_smarty_tpl->tpl_vars['total_pages']->value;?>
" title="Last Page">Last &raquo;</a>
										</div> <!-- End .pagination -->
										<div class="clear"></div>
									</td>
								</tr>
							</tfoot>
						 
							<tbody>
								
							<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cart']->value, 'value', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['value']->value) {
?>

								<tr><td><?php echo $_smarty_tpl->tpl_vars['value']->value['Id'];?>
</td>
									<td><?php echo $_smarty_tpl->tpl_vars['value']->value['First_Name'];?>
</td>
									<td><?php echo $_smarty_tpl->tpl_vars['value']->value['Last_Name'];?>
</td>
									<td><?php echo $_smarty_tpl->tpl_vars['value']->value['Company'];?>
</td>
									<td><?php echo $_smarty_tpl->tpl_vars['value']->value['Country'];?>
</td>
									<td><?php echo $_smarty_tpl->tpl_vars['value']->value['Address'];?>
</td>
									<td><?php echo $_smarty_tpl->tpl_vars['value']->value['Postcode'];?>
</td>
									<td><?php echo $_smarty_tpl->tpl_vars['value']->value['Email'];?>
</td>
									<td><?php echo $_smarty_tpl->tpl_vars['value']->value['Phone'];?>
</td>
									<td><?php echo $_smarty_tpl->tpl_vars['value']->value['Date_time'];?>
</td>
									
									<td>
										<!-- Icons -->
										 <a href='view_orders.php?pid=<?php echo $_smarty_tpl->tpl_vars['value']->value['Id'];?>
s' title='Edit'><img src='resources/images/icons/pencil.png' alt='Edit' /></a>
									</td></tr>";
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
}
}
