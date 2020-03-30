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
								
							{foreach $Userdata as $key => $value}

								<tr><td>{$value.Name}</td>
									<td>{$value.Email}</td>
									<td>{$value.Address}</td>
									<td>{$value.Password}'</td>
									<td>{$value.Gender}</td>
									<td>{$value.Mobile}</td>
									<td>{$value.State}</td>
									
									<td>
										<!-- Icons -->
										 <a href="Edituser.php?eid={$value.Id}" title='Edit'><img src='resources/images/icons/pencil.png' alt='Edit' /></a -->
										 <a href='?del_id={$value.Id}' title='Delete'><img src='resources/images/icons/cross.png' alt='Delete' /></a> 
									</td></tr>";
								{/foreach}
								
							</tbody>
							
						</table>
						
					</div> <!-- End #tab1 -->	
					
				</div> <!-- End .content-box-content -->
				
			</div> <!-- End .content-box -->
			
			<!-- End Notifications -->
			
			{include file = "footer.php"}

