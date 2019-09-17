<?php
class Users extends CI_Controller{
    public function register(){
          //validasi
          $this->form_validation->set_rules('first_name','First Name','trim|required');
          $this->form_validation->set_rules('last_name','Last Name','trim|required');
          $this->form_validation->set_rules('email','Email','trim|required|valid_email');
          $this->form_validation->set_rules('username','Username','trim|required|min_length[4]|max_length[16]');
          $this->form_validation->set_rules('password','Password','trim|required|min_length[4]|max_length[50]');
          $this->form_validation->set_rules('password2','Confrim Password','trim|required|matches[password]');


      if ($this->form_validation->run() == FALSE){
                //show view
                $data['main_content'] = 'register';
                $this->load->view('layouts/main', $data);
              }
              else{
                if($this->User_model->register()){
                  $this->session->set_flashdata('registered','Berhasil Melakukan Registrasi');
                  redirect('products');
            }
        }
    }

    public function login(){
          $this->form_validation->set_rules('username','Username','trim|required|min_length[4]|max_length[16]');
          $this->form_validation->set_rules('password','Password','trim|required|min_length[4]|max_length[50]');

          $username = $this->input->post('username');
          $password = md5($this->input->post('password'));

          $user_id = $this->User_model->login($username, $password);
          //validasi admin
          if($username=='admin' & $password==md5('admin')){
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
          }
          //Validasi User
          elseif($user_id){
            //Create array of user data
            $data = array(
                'user_id' => $user_id,
                'username' => $username,
                'logged_in' => true
            );
            //Untuk Melakukan Set session Userdata
            $this->session->set_userdata($data);

            //Set Message
            $this->session->set_flashdata('pass_login','Berhasil Login');
            redirect('products');
          } else {
              //Set Error
              $this->session->set_flashdata('fail_login','Login Gagal');
              redirect('products');
          }
      }

      public function logout(){
        //unset use data
        $this->session->unset_userdata('logged_in');
        $this->session->unset_userdata('user_id');
        $this->session->unset_userdata('username');
        $this->session->sess_destroy();

        redirect('products');
    }
}
