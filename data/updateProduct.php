<?php 
require_once('../class/Product.php');
if(isset($_POST['pro_id'])){
	$pro_id = $_POST['pro_id'];
	$pro_name =$_POST['pro_name'];
	$pro_price =$_POST['pro_price'];
	$lastUpdate = date.now();

	$updateRecord = $product->update_product($pro_id,$pro_name,$pro_price,$lastUpdate);
	$return['valid'] = false;
	if($updateRecord){
		$return['valid'] = true;
		$return['msg'] = 'Edit Successfully!';
	}
	echo json_encode($return);
}//end isset
$product->Disconnect();