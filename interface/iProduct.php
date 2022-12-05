<?php 
interface iProduct{
	public function insert_product($name,$price,$last_update);
	public function get_product($id);
	public function getAll_products();
	public function delete_product($id);
	public function update_product($id ,$pro_name,$price ,$last_update);
	
}//end iProduct