<?php
session_start();
if ($_SESSION['Admin']=='') {

	header("location:login.php");
}

include("config.php");
require_once("./smarty-3.1.34/libs/Smarty.class.php");
include("sidebar.php");

$smarty = new Smarty();

$smarty->setTemplateDir('./templates/');
$smarty->setCompileDir('./templates_c/');
$smarty->setConfigDir('./configs/');
$smarty->setCacheDir('./cache/');

if (isset($_GET['pid'])) {
    $pageno = $_GET['pid'];
} 
else {
    $pageno = 1;
}


$no_of_records_per_page = 2;
$offset = ($pageno-1) * $no_of_records_per_page;

$total_pages_sql = "SELECT COUNT(*) FROM orders";
$query = mysqli_query($conn,$total_pages_sql);
$total_rows = mysqli_fetch_array($query)[0];
$total_pages = ceil($total_rows / $no_of_records_per_page);
$sql = "SELECT * FROM orders LIMIT $offset, $no_of_records_per_page";
$res_data = mysqli_query($conn,$sql);

while($row[] = mysqli_fetch_assoc($res_data)) {
	$cart = $row;
}
$smarty->assign("cart",$cart);
$smarty->assign("pageno",$pageno);
$smarty->assign("total_pages",$total_pages);
$smarty->display("Orders.tpl");

?>



