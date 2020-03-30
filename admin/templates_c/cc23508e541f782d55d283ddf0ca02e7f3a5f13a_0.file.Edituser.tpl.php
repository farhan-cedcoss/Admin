<?php
/* Smarty version 3.1.34-dev-7, created on 2020-03-27 13:37:58
  from '/opt/lampp/htdocs/Smartyproject/Admin/templates/Edituser.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e7df3a6996d10_88894264',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cc23508e541f782d55d283ddf0ca02e7f3a5f13a' => 
    array (
      0 => '/opt/lampp/htdocs/Smartyproject/Admin/templates/Edituser.tpl',
      1 => 1585312674,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.php' => 1,
    'file:footer.php' => 1,
  ),
),false)) {
function content_5e7df3a6996d10_88894264 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

	<?php $_smarty_tpl->_subTemplateRender("file:header.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
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
			
			<ul class="shortcut-buttons-set">
			
			<div class="clear"></div> <!-- End .clear -->
			
			<div class="content-box"><!-- Start Content Box -->
				
				<div class="content-box-header">
					
					<h3>Add USER</h3>
					
					<div class="clear"></div>
					
				</div> <!-- End .content-box-header -->
				
				<div class="content-box-content">
					
					
					<div class="tab-content default-tab" id="tab2">
					
						<form method="POST" enctype="multipart/form-data">
							
							<fieldset> <!-- Set class to "column-left" or "column-right" on fieldsets to divide the form into columns -->
								
								<p>
									<label>NAME :</label>
										<input class="text-input small-input" type="text" id="small-input" name="name" value="<?php echo $_smarty_tpl->tpl_vars['Row']->value['Name'];?>
" required/>
								</p>
								
								<p>
									<label>EMAIL :</label>
									<input class="text-input small-input datepicker" type="email" id="medium-input" name="email" value="<?php echo $_smarty_tpl->tpl_vars['Row']->value['Email'];?>
" required/> 
								</p>
								
								<p>
									<label>ADDRESS :</label>
									<input class="text-input small-input" type="text" id="large-input" name="address" value="<?php echo $_smarty_tpl->tpl_vars['Row']->value['Address'];?>
" required/>
								</p>

								<p>
									<label>PASSWORD :</label>
									<input class="text-input small-input" type="text" id="large-input" name="password" value="<?php echo $_smarty_tpl->tpl_vars['Row']->value['Password'];?>
" required/>
								</p>

								<p>
									<label>GENDER</label>
									<select class="text-input small-input" name="gender">
										<option>SELECT</option>
										<option <?php if ($_smarty_tpl->tpl_vars['Row']->value['Gender'] == 'MALE') {?>
											selected="selected"
										<?php }?> >MALE</option>
										<option  <?php if ($_smarty_tpl->tpl_vars['Row']->value['Gender'] == "female") {?>
											selected="selected"
										<?php }?> >female</option>
										<option <?php if ($_smarty_tpl->tpl_vars['Row']->value['Gender'] == "others") {?>
											selected="selected"
										<?php }?> >others</option>
									</select>
								</p>

								<p>
									<label>Phone number:</label>
									<input class="text-input small-input" type="tel" id="large-input" name="mobile" value="<?php echo $_smarty_tpl->tpl_vars['Row']->value['Mobile'];?>
" required />
								</p>

								<p>
									<label>STATE</label>
									<select class="text-input small-input" name="state">
										<option>SELECT</option>
										<option <?php if ($_smarty_tpl->tpl_vars['Row']->value['Gender'] == "others") {?>
											selected="selected"
										<?php }?> >UP</option>
										<option <?php if ($_smarty_tpl->tpl_vars['Row']->value['State'] == "MP") {?>
											selected="selected"
										<?php }?> >MP</option>
										<option <?php if ($_smarty_tpl->tpl_vars['Row']->value['State'] == "AP") {?>
											selected="selected"
										<?php }?> >AP</option>
										<option <?php if ($_smarty_tpl->tpl_vars['Row']->value['State'] == "Bihar") {?>
											selected="selected"
										<?php }?> >Bihar</option>
										<option <?php if ($_smarty_tpl->tpl_vars['Row']->value['State'] == "Jharkhand") {?>
											selected="selected"
										<?php }?> >Jharkhand</option>
										<option <?php if ($_smarty_tpl->tpl_vars['Row']->value['State'] == "Karnataka") {?>
											selected="selected"
										<?php }?> >Karnataka</option>
										<option <?php if ($_smarty_tpl->tpl_vars['Row']->value['State'] == "Rajasthan") {?>
											selected="selected"
										<?php }?> >Rajasthan</option>
										<option <?php if ($_smarty_tpl->tpl_vars['Row']->value['State'] == "Unstable") {?>
											selected="selected"
										<?php }?> >Unstable</option>
										<option <?php if ($_smarty_tpl->tpl_vars['Row']->value['State'] == "Not willing") {?>
											selected="selected"
										<?php }?> >Not willing</option>
										<option <?php if ($_smarty_tpl->tpl_vars['Row']->value['State'] == "Nhi batayenge") {?>
											selected="selected"
										<?php }?> >Nhi batayenge</option>
									</select>
								</p>

							
								<p>
									<input class="button" name="submit" type="submit" value="Submit" />
								</p>
								
							</fieldset>
							
							<div class="clear"></div><!-- End .clear -->
							
						</form>
						
					</div> <!-- End #tab2 -->        
					
				</div> <!-- End .content-box-content -->
				
			</div> <!-- End .content-box -->
			
			
			<div class="clear"></div>
			
			<!-- End Notifications -->
			<?php $_smarty_tpl->_subTemplateRender("file:footer.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
