<?php
/* Smarty version 3.1.34-dev-7, created on 2020-03-27 10:24:37
  from '/opt/lampp/htdocs/Smartyproject/Admin/templates/login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e7dc6558af4c5_73578833',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '113a1ba2ed581ccbd248e498dd9d96d9286830a9' => 
    array (
      0 => '/opt/lampp/htdocs/Smartyproject/Admin/templates/login.tpl',
      1 => 1585300781,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e7dc6558af4c5_73578833 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

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
  
	<body id="login">
		
		<div id="login-wrapper" class="png_bg">
			<div id="login-top">
			
				<h1>Simpla Admin</h1>
				<!-- Logo (221px width) -->
				<img id="logo" src="resources/images/logo.png" alt="Simpla Admin logo" />
			</div> <!-- End #logn-top -->
			
			<div id="login-content">
				
				<form action="" method="POST">
				
					<div class="notification information png_bg">
						<div>
							Just click "Sign In". No password needed.
						</div>
					</div>
					
					<p>
						<label>Username</label>
						<input class="text-input" type="text" name="name" />
					</p>
					<div class="clear"></div>
					<p>
						<label>Password</label>
						<input class="text-input" type="password" name="password" />
					</p>
					<div class="clear"></div>
					<p id="remember-password">
						<input type="checkbox" />Remember me
					</p>
					<div class="clear"></div>
					<p>
						<input class="button" name="login" type="submit" value="Sign In" />
					</p>
					
				</form>
			</div> <!-- End #login-content -->
			
		</div> <!-- End #login-wrapper -->
  </body>
</html>
<?php }
}
