<?php
class User_model extends CI_Model{
  public function register(){
    $data = array(
      'title' => $this->input->post('title'),
      'kategori' => $this->input->post('kategori'),
      'description' => $this->input->post('description'),
      'image' => $this->input->post('image'),
      'price' => $this->input->post('price')
    );
    $insert = $this->db->insert('products', $data);
    return $insert;
  }

  public function login($username,$password){
    //Validasi
    $this->db->where('username',$username);
    $this->db->where('password',$password);

    $result = $this->db->get('users');
    if($result->num_rows() == 1){
      return $result->row(0)->id;
    } else {
      return false;
    }
  }
}
