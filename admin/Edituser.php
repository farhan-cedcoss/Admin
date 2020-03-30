<?php 
session_start();

include "config.php";
require_once("./smarty-3.1.34/libs/Smarty.class.php");
include("sidebar.php");

$smarty = new Smarty();

$smarty->setTemplateDir('./templates/');
$smarty->setCompileDir('./templates_c/');
$smarty->setConfigDir('./configs/');
$smarty->setCacheDir('./cache/');

if ($_SESSION['Admin']=='') {

	header("location:login.php");
}
if(isset($_GET['eid'])){
	$id = $_GET['eid'];
	$sql = "SELECT * FROM User WHERE Id='$id'";
	$res = mysqli_query($conn,$sql);
	$row = mysqli_fetch_assoc($res);
}
$arr = array();
if (isset($_POST['submit'])) {
	$name = $_POST['name'];
	$email = $_POST['email'];
	$address = $_POST['address'];
	$password = $_POST['password'];
	$gender = $_POST['gender'];
	$mobile = $_POST['mobile'];
	$state = $_POST['state'];

$sql = "UPDATE User SET Name='$name',Email='$email',Address='$address',Password='$password',Gender='$gender',Mobile='$mobile',State='$state' WHERE Id='$id'";

mysqli_query($conn, $sql);
	
}

$smarty->assign('Row',$row);
$smarty->display("Edituser.tpl");

?>
