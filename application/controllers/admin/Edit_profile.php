<?php

class Edit_profile extends CI_Controller{
    
    public function __construct(){
        parent::__construct();

        if($this->session->userdata('role') != 'admin'){
            $this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
            Anda belum Login
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>');
          redirect('admin/auth/login');
        }
        $this->load->model('ProfileModel');
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
    }
    // public function index($id=null)
    // {
    //     $user = $this->ProfileModel;
    //     $validation = $this->form_validation;
    //     $validation->set_rules($user->rules());

    //     if ($validation->run()) {
    //         $user->update();
    //         $this->session->set_flashdata('success', 'Berhasil disimpan');
    //         redirect(site_url('index.php/admin/edit_profile/'));
    //     }

    //     $data["user"] = $user->getById($id);
    //     $this->load->view('templates_admin/header');
    //     $this->load->view('templates_admin/sidebar');
    //     $this->load->view('admin/edit_profile', $data);
    //     $this->load->view('templates_admin/footer');
    // }

    public function index()
    {
        $data['user'] = $this->model_user->tampil_data()->result();
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/edit_profile', $data);
        $this->load->view('templates_admin/footer');
    }

    public function update()
    {
        $this->form_validation->set_rules('nama', 'Nama', 'required', array('required' => '%s masih kosong'));
        $this->form_validation->set_rules('username', 'Username', 'required', array('required' => '%s masih kosong'));
        $this->form_validation->set_rules('password', 'Password', 'required', array('required' => '%s masih kosong'));

        if ($this->form_validation->run() == FALSE) {
            $errors = validation_errors();
            $this->session->set_flashdata('form_error', $errors);
            redirect('admin/edit_profile');
        }

        if ($this->form_validation->run()) {
            $id = $this->input->post('id');
            $nama = $this->input->post('nama');
            $username = $this->input->post('username');
            $password = md5($this->input->post('password'));
            $role = $this->input->post('role');
        

        $data = array(
            'id' => $id,
            'nama' => $nama,
            'username' => $username,
            'password' => $password,
            'role' => $role,
        );
            $where = array('id' => $id);
            $this->model_user->update_data($where, $data, 'tb_user');
            redirect('admin/edit_profile');
        }
        
    }
}