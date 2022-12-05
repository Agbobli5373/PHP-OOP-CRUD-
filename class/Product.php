<?php
require_once('../database/Database.php');
require_once('../interface/iProduct.php');

class Product extends Database implements iProduct {
	

	public function getAll_products(){
		$sql = "SELECT *
		        FROM product";
		return $this->getRows($sql);
	}

	public function get_product($id){
		$sql = "SELECT *
		        FROM product
		        WHERE product_id = ?";
		return $this->getRow($sql,[$id]);
	}

	public function delete_product($id){
		$sql = "DELETE 
		        FROM product 
		        WHERE product_id = ?";
		return $this->deleteRow($sql,[$id]) ;
	}

	public function insert_product($name,$price,$last_update){
		$sql = "INSERT INTO product(product_name,price,last_update)value(?,?,?)";
		return $this->insertRow($sql,[$name,$price,$last_update]);
	}

	public function update_product($id ,$pro_name,$price ,$last_update){
		$sql = "UPDATE product
		        SET(product_name=?,price =? , last_update =?) 
		        WHERE product_id = ?";
		return $this->updateRow($sql,[$id,$pro_name,$price,$last_update]) ;
	}

}//end class
$product = new Product();
/* End of file Product.php */
/* Location: .//D/xampp/htdocs/php_oop/class/Product.php */