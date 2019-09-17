<?php
class Cart extends CI_Controller{
  public $tax;
  public $shipping;
  public $total;
  public $grand_total;


  /*
  * Cart Index
  */
  public function index(){
    //Untuk Load View
    $data['main_content'] = 'cart';
    $this->load->view('layouts/main', $data);
  }
  public function sukses(){
    $data['main_content'] = 'cart_berhasil';
    $this->load->view('layouts/main', $data);
  }
  /*
  * Add to Cart
  */
  public function add(){
    //item data
    $data = array(
      'id' => $this->input->post('item_number'),
      'qty' => $this->input->post('qty'),
      'price' => $this->input->post('price'),
      'name' => $this->input->post('title')
  );
  //print_r($data);die();

  //insert Cart
  $this->cart->insert($data);

  redirect('products');
}
  /*
  *Untuk update cart
  */
  public function update($in_cart = null){
    $data = $_POST;
    $this->cart->update($data);

    //Untuk Show Pagenya
    redirect('cart', 'refresh');
  }
  public function process(){
        //validasi
        $this->form_validation->set_rules('address','Address','required');
        $this->form_validation->set_rules('address2','Pesan Untuk Penjual','required');
        $this->form_validation->set_rules('city','Kota','trim|required');
        $this->form_validation->set_rules('state','Negara','trim|required');
        $this->form_validation->set_rules('zipcode','Kode Pos','trim|required');

        //load model
        $this->load->model('cart_model');
    if ($this->form_validation->run() == FALSE){
              //show view
              $data['main_content'] = 'cart';
              $this->load->view('layouts/main', $data);
            }
            else{
              if($this->cart_model->tambah()){
                $this->session->set_flashdata('Berhasil','Berhasil Melakukan Pemesanan');
                $this->cart->destroy();
                redirect('cart/sukses');
          }
      }
  }
}
