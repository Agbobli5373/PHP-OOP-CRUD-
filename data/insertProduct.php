<?php 
  require_once('../class/Product.php');
  if(isset($POST['pro_name']) && isset($_POST['pro_price'])){
  	$pro_name =$_POST['pro_name'];
	$pro_price =$_POST['pro_price'];
	$lastUpdate = date.now();

	$newRecord = Product->insert_product($pro_name,$pro_price,$lastUpdate);

	$return['valid'] = false;
	if($newRecord){
		$return['valid'] = true;
		$return['msg'] = 'Save Successfully!';
	}
	echo json_encode($return);
  }
?>