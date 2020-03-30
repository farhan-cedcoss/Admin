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
											<a href="?pid=1" title="First Page">&laquo; First</a><a href="{if $pageno <= 1} '#' {else} ?pid={$pageno - 1} {/if}" title="Previous Page">&laquo; Previous</a>
											<a href="?pid=1" class="number {if $pageno == 1 || $pageno == ""}
											 current {/if}" title="1">1</a>

										{for $i=2 to $total_pages}
											<a href="?pid={$i}" class="number {if $pageno == $i} current {/if}" title="1"> {$i} </a>
										{/for}
											<a href="{if $pageno >= $total_pages} # {else} ?pid={$pageno + 1} {/if}" title="Next Page">Next &raquo;</a><a href="?pid={$total_pages}" title="Last Page">Last &raquo;</a>
										</div> <!-- End .pagination -->
										<div class="clear"></div>
									</td>
								</tr>
							</tfoot>
						 
							<tbody>
								
							{foreach $cart as $key => $value}

								<tr><td>{$value.Id}</td>
									<td>{$value.First_Name}</td>
									<td>{$value.Last_Name}</td>
									<td>{$value.Company}</td>
									<td>{$value.Country}</td>
									<td>{$value.Address}</td>
									<td>{$value.Postcode}</td>
									<td>{$value.Email}</td>
									<td>{$value.Phone}</td>
									<td>{$value.Date_time}</td>
									
									<td>
										<!-- Icons -->
										 <a href='view_orders.php?pid={$value.Id}s' title='Edit'><img src='resources/images/icons/pencil.png' alt='Edit' /></a>
									</td></tr>";
								{/foreach}
								
							</tbody>
							
						</table>
						
					</div> <!-- End #tab1 -->	
					
				</div> <!-- End .content-box-content -->
				
			</div> <!-- End .content-box -->
			
			<!-- End Notifications -->
			
			{include file="footer.tpl"}