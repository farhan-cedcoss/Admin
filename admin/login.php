<?php
session_start();
include("config.php");
require_once("./smarty-3.1.34/libs/Smarty.class.php");
	$smarty = new Smarty();
if (isset($_POST['login'])) {
	
	$name = $_POST['name'];
	$pass = $_POST['password'];
	
	$sql = "SELECT * from User WHERE Name ='$name' AND Password ='$pass'";
	$result = mysqli_query($conn , $sql);

	if (mysqli_num_rows($result) > 0) {
		$row = mysqli_fetch_assoc($result);

		if ($row['Name']==$name && $row['Password']==$pass) {
			$_SESSION['Admin'] = "logged in";
			header("location:index.php");
		}
	}
}

$smarty->setTemplateDir('./templates/');
$smarty->setCompileDir('./templates_c/');
$smarty->setConfigDir('./configs/');
$smarty->setCacheDir('./cache/');

$smarty->display("login.tpl");

?>

