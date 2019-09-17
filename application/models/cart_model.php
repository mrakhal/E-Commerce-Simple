<?php
class Cart_model extends CI_Model{
  public function tambah(){
    $data =array(
    'product_id ' => $this->input->post('item_code'),
    'username' => $this->input->post('username'),
    'qty' => $this->input->post('item_qty'),
    'price' => $this->input->post('item_price'),
    'address' => $this->input->post('address'),
    'city' => $this->input->post('city'),
    'state' => $this->input->post('state'),
    'zipcode' => $this->input->post('zipcode'),
    'address2' => $this->input->post('address2'),
    'nama_barang' => $this->input->post('item_name')
    );
    $insert = $this->db->insert('orders', $data);
    return $insert;
  }


}
