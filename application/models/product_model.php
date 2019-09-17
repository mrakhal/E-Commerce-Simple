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

	/*
	* Get Single Product
	*/

	public function get_product_details($id){
		$this->db->select('*');
		$this->db->from('products');
		$this->db->where('id', $id);

		$query = $this->db->get();
		return $query->row();
	}

	/*
	* Get Categories
	*/

		public function get_categories(){
			$this->db->select('*');
			$this->db->from('categories');
			$query = $this->db->get();
			return $query->result();
		}

		public function get_popular(){
				$this->db->select('P.*,COUNT(O.product_id) as total');
				$this->db->from('orders AS O');
				$this->db->join('products AS P', 'O.product_id = P.id', 'INNER');
				$this->db->group_by('O.product_id');
				$this->db->order_by('total','desc');
				$query = $this->db->get();
				return $query->result();
		}

		/*
		*Add Order To Database
		*/
		public function add_order($order_data){
			$insert = $this->db->insert('orders', $order_data);
			return $insert;
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
