<?php 
interface iOrder{
	public function insert_order($name,$qty,$product_id);
	public function get_order($id);
	public function getAll_order();
	public function delete_order($id);
	public function update_order($id);
	
}//end iOrder