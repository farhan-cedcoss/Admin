<?php
session_start();
$cur_loc = basename($_SERVER['REQUEST_URI']);
if ($_SESSION['Admin']=='') {

	header("location:login.php");
}
include("config.php");

$cart = array();

if (isset($_GET['del_id'])) {
	
	$sql1 = "SELECT Image FROM Products WHERE SKU = ".$_GET['del_id']."";

	$res = mysqli_query($conn , $sql);
	if (mysqli_num_rows($result) > 0) {
	while($r[] = mysqli_fetch_assoc($res)){
		$ro = $r;
		}}
		foreach ($ro as $key => $value) {
			if ($value['SKU'] == $_GET['del_id']) {
				$Iname = $value['Image'];
				unlink("uploads/".$Iname);
			}
		}
	$sql = "DELETE FROM Products WHERE SKU=".$_GET['del_id']."";
	mysqli_query($conn , $sql);
	header("location:manageproduct.php");
}     

if (isset($_GET['pid'])) {
    $pageno = $_GET['pid'];
	} 
else {
    $pageno = 1;
    }
    $no_of_records_per_page = 5;
    $offset = ($pageno-1) * $no_of_records_per_page;

    $total_pages_sql = "SELECT COUNT(*) FROM Products";
    $query = mysqli_query($conn,$total_pages_sql);
    $total_rows = mysqli_fetch_array($query)[0];
    $total_pages = ceil($total_rows / $no_of_records_per_page);
    $sql = "SELECT * FROM Products LIMIT $offset, $no_of_records_per_page";
    $res_data = mysqli_query($conn,$sql);

    while($row[] = mysqli_fetch_assoc($res_data)) {
        $_SESSION['product'] = $row;
        $cart = $_SESSION['product'];
    }
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

	<?php include("header.php"); ?>

	<body><div id="body-wrapper"> <!-- Wrapper for the radial gradient background -->
		
		<?php include("sidebar.php"); ?>
		
		<div id="main-content"> <!-- Main Content Section with everything -->
			
			<noscript> <!-- Show a notification if the user has disabled javascript -->
				<div class="notification error png_bg">
					<div>
						Javascript is disabled or is not supported by your browser. Please <a href="http://browsehappy.com/" title="Upgrade to a better browser">upgrade</a> your browser or <a href="http://www.google.com/support/bin/answer.py?answer=23852" title="Enable Javascript in your browser">enable</a> Javascript to navigate the interface properly.
					</div>
				</div>
			</noscript>
			<script type="text/javascript">
				$(document).ready(function(){
					$("#table-id").DataTable();
				});
			</script>
			
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
						
						
						<table id="table-id" class="display">
							
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
								</tr>	
							</thead>
						 
							<tfoot>
								<tr>
									<td colspan="6">
										<div class="pagination">
											<a href="?pid=1" title="First Page">&laquo; First</a><a href="<?php if($pageno <= 1){ echo '#'; } else { echo "?pid=".($pageno - 1); } ?>" title="Previous Page">&laquo; Previous</a>
											<a href="?pid=1" class="number <?php if($_GET['pid'] == 1 || $cur_loc =='manageproduct.php') echo "current"; ?>" title="1">1</a>

										<?php for ($i=2; $i <= $total_pages; $i++):?>
											<a href="?pid=<?php echo $i ?>" class="number <?php if($_GET['pid'] == $i) echo "current"; ?>" title="1"><?php echo $i ?> </a>
										<?php endfor; ?>
											<a href="<?php if($pageno >= $total_pages){ echo '#'; } else { echo "?pid=".($pageno + 1); } ?>" title="Next Page">Next &raquo;</a><a href="?pid=<?php echo $total_pages; ?>" title="Last Page">Last &raquo;</a>
										</div> <!-- End .pagination -->
										<div class="clear"></div>
									</td>
								</tr>
							</tfoot>
						 
							<tbody>
								
							<?php foreach ($cart as $key => $value):

								echo "<tr><td>".$value['SKU']."</td>
									<td>".$value['NAME']."</td>
									<td>".$value['PRICE']."</td>
									<td><img style='width:30px;height:30px;' alt='no image' src='uploads/".$value['Image']."'</td>
									<td>".$value['Category']."</td>
									<td>".$value['Brand']."</td>
									<td>".$value['Size']."</td>
									<td>".$value['Color']."</td>
									<td>".$value['Tags']."</td>
									<td>".$value['Stock']."</td>
									
									<td>
										<!-- Icons -->
										 <a href='Editproduct.php?eid=".$value['SKU']."' title='Edit'><img src='resources/images/icons/pencil.png' alt='Edit' /></a>
										 <a href='?del_id=".$value['SKU']."' title='Delete'><img src='resources/images/icons/cross.png' alt='Delete' /></a> 
									</td></tr>";
								endforeach; ?>
								
							</tbody>
							
						</table>
						
					</div> <!-- End #tab1 -->	
					
				</div> <!-- End .content-box-content -->
				
			</div> <!-- End .content-box -->
			
			<!-- End Notifications -->
			
			<?php include("footer.php"); ?>

