<?php
/* Smarty version 3.1.34-dev-7, created on 2020-03-28 05:01:15
  from '/opt/lampp/htdocs/Smartyproject/Admin/templates/Manageproduct.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e7ecc0b2f08c3_56749294',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ec0550a68777dbf441db2518bc3a56a0732a87ba' => 
    array (
      0 => '/opt/lampp/htdocs/Smartyproject/Admin/templates/Manageproduct.tpl',
      1 => 1585368066,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e7ecc0b2f08c3_56749294 (Smarty_Internal_Template $_smarty_tpl) {
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Simpla Admin</title>
<link rel="stylesheet" href="resources/css/reset.css" type="text/css" media="screen" />
<link rel="stylesheet" href="resources/css/style.css" type="text/css" media="screen" />
<link rel="stylesheet" href="resources/css/invalid.css" type="text/css" media="screen" />	
<?php echo '<script'; ?>
 type="text/javascript" src="resources/scripts/jquery-1.3.2.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="resources/scripts/simpla.jquery.configuration.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="resources/scripts/jquery-3.4.1.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="resources/scripts/facebox.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="resources/scripts/jquery.wysiwyg.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="resources/scripts/jquery.datePicker.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="resources/scripts/jquery.date.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="../task/jquery-3.4.1.min.js"><?php echo '</script'; ?>
>
<link href="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/css/select2.min.css" rel="stylesheet" />
<?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/js/select2.min.js"><?php echo '</script'; ?>
>
 <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.css">
 <?php echo '<script'; ?>
 type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.js"><?php echo '</script'; ?>
>
</head>

	<?php echo '<script'; ?>
 type="text/javascript">

		$(document).ready(function(){

			$("#example").DataTable();
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
					
					<h3>Manage Product</h3>
					
					
					<div class="clear"></div>
					
				</div> <!-- End .content-box-header -->
				
				<div class="content-box-content">
					
				<div class="tab-content default-tab" id="tab1"> <!-- This is the target div. id must match the href of this div's tab -->
						
						
						<table id="example" class="display">
							
							<thead>
								<tr>
								   <th>Product SKU</th>
								   <th>Product NAME</th>
								   <th>Product PRICE</th>
								   <th>Product Image</th>
								   <th>Product Category</th>
								   <th>Product Brand</th>
								   <th>Product Size</th>
								   <th>Product Color</th>
								   <th>Product Tag</th>
								   <th>Product Stock</th>
								   <th>Action</th>
								</tr>	
							</thead>

                            
                         
							<tbody>
								<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Cart']->value, 'value', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['value']->value) {
?>

                                <tr>
                                	<td><?php echo $_smarty_tpl->tpl_vars['value']->value['SKU'];?>
</td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['value']->value['NAME'];?>
</td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['value']->value['PRICE'];?>
</td>
                                    <td><img style="width:30px;height:30px;" alt="no image" src="uploads/<?php echo $_smarty_tpl->tpl_vars['value']->value['Image'];?>
" > </td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['value']->value['Category'];?>
</td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['value']->value['Brand'];?>
</td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['value']->value['Size'];?>
</td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['value']->value['Color'];?>
</td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['value']->value['Tags'];?>
</td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['value']->value['Stock'];?>
</td>
                                    <td>
                                        <!-- Icons -->
                                         <a href="Editproduct.php?eid=<?php echo $_smarty_tpl->tpl_vars['value']->value['SKU'];?>
" title="Edit"><img src="resources/images/icons/pencil.png" alt="Edit"/></a>
                                         <a href="?del_id=$value.SKU" title="Delete"><img src="resources/images/icons/cross.png" alt="Delete"/></a> 
                                    </td>
                                </tr>
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
			<div class="clear"></div>
        </td>
    </tr>
</tfoot> 
			
			<div id="footer">
				<small> <!-- Remove this notice or replace it with whatever you want -->
						&#169; Copyright 2009 Your Company | Powered by <a href="http://themeforest.net/item/simpla-admin-flexible-user-friendly-admin-skin/46073">Simpla Admin</a> | <a href="#">Top</a>
				</small>
			</div><!-- End #footer -->
			
		</div> <!-- End #main-content -->
	</div></body>
</html>


  <?php }
}
