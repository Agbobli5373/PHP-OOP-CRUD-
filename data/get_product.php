<?php 
require_once('../class/Product.php');
if(isset($_POST['pro_id'])){
	$pro_id = $_POST['pro_id'];

	$getProduct = product->get_product($pro_id);
	echo json_encode($getProduct);	
}//end isset
$product->Disconnect();