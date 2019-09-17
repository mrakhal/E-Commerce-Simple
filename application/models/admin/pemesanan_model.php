<?php
class Pemesanan_model extends CI_Model{
  public function get_products(){
			$this->db->select('*');
			$this->db->from('orders');
			$query = $this->db->get();
			return $query->result();
	}
  public function delete($id)
	{
		$this->db->where('id',$id)->delete('orders');
	}

}
