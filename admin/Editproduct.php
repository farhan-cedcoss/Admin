<?php 
session_start();
if ($_SESSION['Admin']=='') {

	header("location:login.php");
}

include "config.php";
require_once("./smarty-3.1.34/libs/Smarty.class.php");
include("sidebar.php");

$smarty = new Smarty();

$smarty->setTemplateDir('./templates/');
$smarty->setCompileDir('./templates_c/');
$smarty->setConfigDir('./configs/');
$smarty->setCacheDir('./cache/');

$product = array();
$cart = $_SESSION['product'];

$dir = "uploads/";
$imgname="";

if (isset($_FILES['img']['name'])) {
	$new = rand(10,100);
	$target = $dir . basename($new.$_FILES['img']['name']);
	if (move_uploaded_file($_FILES['img']['tmp_name'],$target)) {
		
		$imgname=$new.$_FILES['img']['name'];	
	}	
}
$cat=array();
if (isset($_GET['eid'])) {
	$vid = $_GET['eid'];
	$new_sql = "SELECT * FROM variation WHERE Id='$vid'";
	$res = mysqli_query($conn,$new_sql);
	$row = mysqli_fetch_all($res,MYSQLI_ASSOC);

	foreach ($cart as $key => $value) {
		if ($value['SKU'] == $_GET['eid']) {
			$cat= json_decode($value['Category']);
			$product = $value;
		}
	}
}
if (isset($_POST['update'])) {

	foreach ($row as $key => $value) {
		$p_color= $value['Color'];
		$p_size= $value['Size'];
		$p_price= $value['Price'];
		$var_color = $_POST['var_color-'.$key];
		$var_size = $_POST['var_size-'.$key];
		$var_price = $_POST['var_price-'.$key];
		
		$query = "UPDATE variation SET Color='$var_color',Size='$var_size',Price='$var_price' WHERE Color='$p_color' AND Size='$p_size' AND Price='$p_price'";
		mysqli_query($conn , $query);

	}

	$sku = $_POST['pro_sku'];
	$name = $_POST['pro_name'];
	$price = $_POST['pro_price'];
	$category = $_POST['category'];
	$brand = $_POST['pro_brand'];
	$size = $_POST['pro_size'];
	$color = $_POST['pro_color'];
	$tag = $_POST['pro_tags'];
	$Stock = $_POST['pro_stock'];
	$L_desc = $_POST['long_des'];
	$S_desc = $_POST['short_des'];

	$category = json_encode($category);
	
	if ($imgname=="") {

		$sql = "UPDATE Products SET SKU='$sku',NAME='$name',PRICE='$price',Category='$category',Brand='$brand',Size='$size',Color='$color',Tags='$tag',Stock='$Stock',Long_des='$L_desc',Short_des='$S_desc' WHERE SKU = ".$product['SKU']."";
	   mysqli_query($conn , $sql);
		
	}else{
		$sql = "UPDATE Products SET SKU='$sku',NAME='$name',PRICE='$price',Image='$imgname',Category='$category',Brand='$brand',Size='$size',Color='$color',Tags='$tag',Stock='$Stock',Long_des='$L_desc',Short_des='$S_desc' WHERE SKU = ".$product['SKU']."";
	   mysqli_query($conn , $sql);
	}
	
	header("location:manageproduct.php");	
}

$smarty->assign('Product',$product);
$smarty->assign('Row',$row);
$smarty->assign('Cat',$cat);
$smarty->display("EditProduct.tpl"); 
 
?>

