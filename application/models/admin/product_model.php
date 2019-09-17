<?php
class Product_model extends CI_Model{
	/*
	* Get All Product
	*/

	public function get_products(){
			$this->db->select('*');
			$this->db->from('products');
			$query = $this->db->get();
			return $query->result();
	}

	public function delete($id)
	{
		$this->db->where('id',$id)->delete('products');
	}

	public function edit_data($data){
	$table = 'products';
		$param = array(
				"title"=>$data['title'],
				"id"=>$data['id'],
				"kategori"=>$data['kategori'],
				"description"=>$data['description'],
				"price"=>$data['price'],
				"image"=>$data['image'],
		);
		$this->db->where('id', $data['id']);
		$update = $this->db->update($table,$param);
		if ($update){
				return TRUE;
		}else{
				return FALSE;
		}

}
}
