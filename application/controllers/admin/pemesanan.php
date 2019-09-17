<?php
class Pemesanan extends CI_Controller{
  public $tax;
  public $shipping;
  public $total;
  public $grand_total;


  /*
  * Cart Index
  */
  public function index(){
    //Untuk Load View
    if($this->session->userdata('logged_in')){
    //get products
    $this->load->model('admin/pemesanan_model');
    $data['orders'] = $this->pemesanan_model->get_products();

    //Load View
    $data['main_content'] = 'admin/pemesanan';
    $this->load->view('admin/layouts/main', $data);}
    else{
      redirect('admin/users');
    }

  }
  public function delete($id)
	{
    $this->load->model('admin/pemesanan_model');
		$this->pemesanan_model->delete($id);
		redirect('admin/pemesanan');
	}

}
