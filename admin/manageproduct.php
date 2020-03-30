<?php
session_start();
$cur_loc = basename($_SERVER['REQUEST_URI']);

require_once("./smarty-3.1.34/libs/Smarty.class.php");
include("config.php");
include("sidebar.php");
$smarty = new Smarty();

$smarty->setTemplateDir('./templates/');
$smarty->setCompileDir('./templates_c/');
$smarty->setConfigDir('./configs/');
$smarty->setCacheDir('./cache/');

if ($_SESSION['Admin']=='') {

	header("location:login.php");
}


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

    $sql = "SELECT * FROM Products";
	$query = mysqli_query($conn,$sql);

    while($row[] = mysqli_fetch_assoc($query)) {
        $_SESSION['product'] = $row;
        $cart = $_SESSION['product'];
    }

	$smarty->assign('Cart',$cart);

	$smarty->display("Manageproduct.tpl");
?>
