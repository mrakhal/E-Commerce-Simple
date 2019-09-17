<?php
class Products extends CI_Controller{
	public function index(){
		if($this->session->userdata('logged_in')){
		//get products
		$this->load->model('admin/Product_model');
		$data['products'] = $this->Product_model->get_products();

		//Load View
		$data['main_content'] = 'admin/products';
		$this->load->view('admin/layouts/main', $data);}
		else{
			redirect(admin/users);
		}
	}

	public function delete($id)
	{
		$this->load->model('product_model');
		$this->product_model->delete($id);
		redirect('admin/products');
	}
	public function edit()
    {
				$this->load->model('Product_model');
        $data = $this->input->post(null,TRUE);
        $edit = $this->Product_model->edit_data($data);
        if($edit){
            $this->session->set_flashdata('alert', 'sukses_edit');
            redirect('admin/products');
        }else{
            echo "<script>alert('Gagal Edit Data');</script>";

        }
    }


}
