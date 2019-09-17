<?php
class Users extends CI_Controller{
    public function index(){
      $data['main_content'] = 'admin/login';
      $this->load->view('admin/layouts/main', $data);
    }

    public function register(){
          //validasi
          $this->form_validation->set_rules('title','Nama','required');
          $this->form_validation->set_rules('kategori','Kategori','required');
          $this->form_validation->set_rules('description','Deskripsi','required');
          $this->form_validation->set_rules('price','Harga','required');


      if ($this->form_validation->run() == FALSE){
                //show view
                $data['main_content'] = 'admin/register';
                $this->load->view('admin/layouts/main', $data);
              }
              else{
                if($this->User_model->register_produk()){
                  $this->session->set_flashdata('registered','Berhasil Menambah Produk');
                  redirect('admin/products');
            }
        }
    }

    public function login(){
          $this->form_validation->set_rules('username','Username','trim|required|min_length[4]|max_length[16]');
          $this->form_validation->set_rules('password','Password','trim|required|min_length[4]|max_length[50]');

          $username = $this->input->post('username');
          $password = $this->input->post('password');

          //Validasi User
          if($username=='admin' & $password=='admin'){
            //Create array of user data
            $data = array(
                'username' => $username,
                'logged_in' => true
            );
            //Untuk Melakukan Set session Admin
            $this->session->set_userdata($data);

            //Set Message
            $this->session->set_flashdata('pass_login','Berhasil Login');
            redirect('admin/products');
          } else {
              //Set Error
              $this->session->set_flashdata('fail_login','Login Gagal');
              redirect('users');
          }
      }

      public function logout(){
        //unset use data
        $this->session->unset_userdata('logged_in');
        $this->session->unset_userdata('user_id');
        $this->session->unset_userdata('username');
        $this->session->sess_destroy();

        redirect('users');
    }
}
