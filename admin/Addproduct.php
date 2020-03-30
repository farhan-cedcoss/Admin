<?php 
session_start();

$_SESSION['url'] = basename($_SERVER['REQUEST_URI']);
if ($_SESSION['Admin']=='') {

	header("location:login.php");
}

include "config.php";
include("sidebar.php");
require_once("./smarty-3.1.34/libs/Smarty.class.php");
$smarty = new Smarty();

//**************************************** FILE UPLOAD ***************************************************
$dir = "uploads/";

if (isset($_FILES['img']['name'])) {
	$new = rand(1,1000);
	$target = $dir . basename($new.$_FILES['img']['name']);
	if (move_uploaded_file($_FILES['img']['tmp_name'],$target)) {
	
		$imgname=$new.$_FILES['img']['name'];	
		
	}
	
}

$success = 0; // flags for notification
$error = 0;

//**************************************** ADD PRODUCT ***************************************************

if (isset($_POST['submit'])) {

	$sku = $_POST['pro_sku'];
	$name = str_replace("'","\'",$_POST['pro_name']);
	$price = $_POST['pro_price'];
	$category = $_POST['category'];
	$brand = $_POST['pro_brand'];
	$size = $_POST['pro_size'];
	$color = $_POST['pro_color'];
	$tags = $_POST['pro_tags'];
	$Stock = $_POST['pro_stock'];
	$L_desc = $_POST['long_des'];
	$S_desc = $_POST['short_des'];
	$category = json_encode($category);


	for ($i=1; $i <= $_SESSION['length'] ; $i++) { 
		
		$Price = $_POST['var_price'.$i];
		$Color = $_POST['var_color'.$i];
		$Size = $_POST['var_size'.$i];

		$sql1 ="INSERT INTO variation (Id,Price,Color,Size) VALUES ('$sku','$Price','$Color','$Size')";
		mysqli_query($conn, $sql1);
	}

	$sql = "INSERT INTO Products (SKU,NAME,PRICE,Image,Category,Brand,Size,Color,Tags,Stock,Long_Des,Short_des) VALUES ('$sku','$name','$price','$imgname','$category','$brand','$size','$color','$tags','$Stock','$L_desc','$S_desc')";

	if(mysqli_query($conn, $sql)){
		$success=1;
	}
	elseif($sku == "" ||$name == "" || $price == ""){

		$error=1;
	}
	
}

$smarty->setTemplateDir('./templates/');
$smarty->setCompileDir('./templates_c/');
$smarty->setConfigDir('./configs/');
$smarty->setCacheDir('./cache/');

$smarty->display("Addproduct.tpl");

?>


