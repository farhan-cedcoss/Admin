<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

	{include file="header.php"}

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
										<input class="text-input small-input" type="text" id="small-input" name="name" value="{$Row.Name}" required/>
								</p>
								
								<p>
									<label>EMAIL :</label>
									<input class="text-input small-input datepicker" type="email" id="medium-input" name="email" value="{$Row.Email}" required/> 
								</p>
								
								<p>
									<label>ADDRESS :</label>
									<input class="text-input small-input" type="text" id="large-input" name="address" value="{$Row.Address}" required/>
								</p>

								<p>
									<label>PASSWORD :</label>
									<input class="text-input small-input" type="text" id="large-input" name="password" value="{$Row.Password}" required/>
								</p>

								<p>
									<label>GENDER</label>
									<select class="text-input small-input" name="gender">
										<option>SELECT</option>
										<option {if $Row.Gender == 'MALE'}
											selected="selected"
										{/if} >MALE</option>
										<option  {if $Row.Gender == "female"}
											selected="selected"
										{/if} >female</option>
										<option {if $Row.Gender == "others"}
											selected="selected"
										{/if} >others</option>
									</select>
								</p>

								<p>
									<label>Phone number:</label>
									<input class="text-input small-input" type="tel" id="large-input" name="mobile" value="{$Row.Mobile}" required />
								</p>

								<p>
									<label>STATE</label>
									<select class="text-input small-input" name="state">
										<option>SELECT</option>
										<option {if $Row.Gender=="others"}
											selected="selected"
										{/if} >UP</option>
										<option {if $Row.State =="MP"}
											selected="selected"
										{/if} >MP</option>
										<option {if $Row.State =="AP"}
											selected="selected"
										{/if} >AP</option>
										<option {if $Row.State =="Bihar"}
											selected="selected"
										{/if} >Bihar</option>
										<option {if $Row.State =="Jharkhand"}
											selected="selected"
										{/if} >Jharkhand</option>
										<option {if $Row.State =="Karnataka"}
											selected="selected"
										{/if} >Karnataka</option>
										<option {if $Row.State =="Rajasthan"}
											selected="selected"
										{/if} >Rajasthan</option>
										<option {if $Row.State =="Unstable"}
											selected="selected"
										{/if} >Unstable</option>
										<option {if $Row.State =="Not willing"}
											selected="selected"
										{/if} >Not willing</option>
										<option {if $Row.State =="Nhi batayenge"}
											selected="selected"
										{/if} >Nhi batayenge</option>
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
			{include file="footer.php"}
