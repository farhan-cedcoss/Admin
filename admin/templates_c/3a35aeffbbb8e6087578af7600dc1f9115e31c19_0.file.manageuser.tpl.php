<?php
/* Smarty version 3.1.34-dev-7, created on 2020-03-27 12:31:42
  from '/opt/lampp/htdocs/Smartyproject/Admin/templates/manageuser.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e7de41e22d877_81899879',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3a35aeffbbb8e6087578af7600dc1f9115e31c19' => 
    array (
      0 => '/opt/lampp/htdocs/Smartyproject/Admin/templates/manageuser.tpl',
      1 => 1585308683,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.php' => 1,
  ),
),false)) {
function content_5e7de41e22d877_81899879 (Smarty_Internal_Template $_smarty_tpl) {
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
					
					<h3>Manage User</h3>
					
					<div class="clear"></div>
					
				</div> <!-- End .content-box-header -->
				
				<div class="content-box-content">
					
				<div class="tab-content default-tab" id="tab1">
						<table>
							<thead>
								<tr>
								   <th>NAME </th>
								   <th>EMAIL</th>
								   <th>ADDRESS</th>
								   <th>PASSWORD</th>
								   <th>GENDER</th>
								   <th>MOBILE NO.</th>
								   <th>STATE</th>
								   
								</tr>
								
							</thead>
						 
							<tfoot>
								<tr>
									<td colspan="6">
										<div class="bulk-actions align-left">
											<select name="dropdown">
												<option value="option1">Choose an action...</option>
												<!-- <option value="option2">Edit</option> -->
												<option value="option3">Delete</option>
											</select>
											<a class="button" href="#">Apply to selected</a>
										</div>
										
										<div class="pagination">
											<a href="#" title="First Page">&laquo; First</a><a href="#" title="Previous Page">&laquo; Previous</a>
											<a href="#" class="number" title="1">1</a>
											<a href="#" class="number" title="2">2</a>
											<a href="#" class="number current" title="3">3</a>
											<a href="#" class="number" title="4">4</a>
											<a href="#" title="Next Page">Next &raquo;</a><a href="#" title="Last Page">Last &raquo;</a>
										</div> <!-- End .pagination -->
										<div class="clear"></div>
									</td>
								</tr>
							</tfoot>
						 
							<tbody>
								
							<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Userdata']->value, 'value', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['value']->value) {
?>

								<tr><td><?php echo $_smarty_tpl->tpl_vars['value']->value['Name'];?>
</td>
									<td><?php echo $_smarty_tpl->tpl_vars['value']->value['Email'];?>
</td>
									<td><?php echo $_smarty_tpl->tpl_vars['value']->value['Address'];?>
</td>
									<td><?php echo $_smarty_tpl->tpl_vars['value']->value['Password'];?>
'</td>
									<td><?php echo $_smarty_tpl->tpl_vars['value']->value['Gender'];?>
</td>
									<td><?php echo $_smarty_tpl->tpl_vars['value']->value['Mobile'];?>
</td>
									<td><?php echo $_smarty_tpl->tpl_vars['value']->value['State'];?>
</td>
									
									<td>
										<!-- Icons -->
										 <a href="Edituser.php?eid=<?php echo $_smarty_tpl->tpl_vars['value']->value['Id'];?>
" title='Edit'><img src='resources/images/icons/pencil.png' alt='Edit' /></a -->
										 <a href='?del_id=<?php echo $_smarty_tpl->tpl_vars['value']->value['Id'];?>
' title='Delete'><img src='resources/images/icons/cross.png' alt='Delete' /></a> 
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
			
			<?php $_smarty_tpl->_subTemplateRender("file:footer.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
