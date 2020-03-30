<?php
session_start();
if ($_SESSION['Admin']=='') {

	header("location:login.php");
}
include("config.php");
include("sidebar.php");
require_once("./smarty-3.1.34/libs/Smarty.class.php");
$smarty = new Smarty();

$smarty->setTemplateDir('./templates/');
$smarty->setCompileDir('./templates_c/');
$smarty->setConfigDir('./configs/');
$smarty->setCacheDir('./cache/');

if (isset($_GET['del_id'])) {
	
	$sql1 = "SELECT Image FROM Products WHERE SKU=".$_GET['del_id']."";
	$res = mysqli_query($conn , $sql);
	$r = mysqli_fetch_assoc($res);
	$Iname = $r['Image'];
	unlink("uploads/".$Iname);
	$sql = "DELETE FROM User WHERE Id=".$_GET['del_id']."";
	mysqli_query($conn , $sql);
	
	header("location:manageuser.php");
}

$userdata = array();
$sql = "SELECT * FROM User";
$result = mysqli_query($conn , $sql);

if (mysqli_num_rows($result) > 0) {
    
    while($row[] = mysqli_fetch_assoc($result)) {
        $_SESSION['userdata'] = $row;
        $userdata = $_SESSION['userdata'];
    }
} 

$smarty->assign('Userdata',$userdata);
$smarty->display("manageuser.tpl");

?>

