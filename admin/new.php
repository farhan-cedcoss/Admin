<?php 
 session_start();
if(isset($_POST['length'])){
	$_SESSION['length'] = $_POST['length'];
}


//
// $_SESSION['length'] = $_POST['length'];