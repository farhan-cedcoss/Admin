<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

	{include file="header.tpl"}

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
								
							{foreach $row as $key => $value }

								<tr><td>{$value.SKU}</td>
									<td>{$value.Name}</td>
									<td>{$value.Price}</td>
									<td>{$value.Quantity}</td>
									<td>{$value.Category}</td>
									<td>{$value.Brand}</td>
									<td>{$value.Color}</td>
									</tr>";
							{/foreach}
								
							</tbody>
							
						</table>
						
					</div> <!-- End #tab1 -->	
					
				</div> <!-- End .content-box-content -->
				
			</div> <!-- End .content-box -->
			
			<!-- End Notifications -->
			
			{include file="footer.tpl"}

