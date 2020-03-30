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

$order_id = $_GET['pid'];
$sql = "SELECT * FROM Cart WHERE Order_ID='$order_id'";
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_all($result,MYSQLI_ASSOC);

$smarty->assign('row',$row);
$smarty->display("vieworders.tpl");

?>

