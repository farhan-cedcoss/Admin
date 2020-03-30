<?php 
session_start();

if ($_SESSION['Admin']=='') {

	header("location:login.php");
}

require_once("./smarty-3.1.34/libs/Smarty.class.php");
include("config.php");
include("sidebar.php");

$smarty = new Smarty();
$smarty->setTemplateDir('./templates/');
$smarty->setCompileDir('./templates_c/');
$smarty->setConfigDir('./configs/');
$smarty->setCacheDir('./cache/');

$arr = array();
if (isset($_POST['submit'])) {
	$arr['name'] = $_POST['name'];
	$arr['email'] = $_POST['email'];
	$arr['address'] = $_POST['address'];
	$arr['password'] = $_POST['password'];
	$arr['gender'] = $_POST['gender'];
	$arr['mobile'] = $_POST['mobile'];
	$arr['state'] = $_POST['state'];

	$sql = "INSERT INTO User (Name,Email,Address,Password,Gender,Mobile,State) VALUES ('$name','$email','$address','$password','$gender','$mobile','$state')";

	mysqli_query($conn, $sql);
	
}
$smarty->display("Adduser.tpl");
?>