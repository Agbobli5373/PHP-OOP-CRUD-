<?php 
  require_once('../class/product.php');
  if(isset($_POST['pro_id'])){
  	 $pro_id = $_POST['pro_id'];

  	 $result = product-> delete_product($pro_id);
  	 echo json_encode($result);
  }

  $product->Disconnect();


?>