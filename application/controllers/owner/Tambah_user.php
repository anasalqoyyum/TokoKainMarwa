<?php

class Tambah_user extends CI_Controller{
    public function __construct(){
        parent::__construct();

        if($this->session->userdata('role') != 'owner'){
            $this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
            Anda belum Login
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>');
          redirect('admin/auth/login');
        }
    }
    public function index()
    {
        $data['user'] = $this->model_user->tampil_data()->result();
        $this->load->view('templates_owner/header');
        $this->load->view('templates_owner/sidebar');
        $this->load->view('owner/tambah_user', $data);
        $this->load->view('templates_owner/footer');
    }

    public function tambah_aksi()
    {
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
        $this->form_validation->set_rules('nama', 'Nama', 'required', array('required' => '%s masih kosong'));
        $this->form_validation->set_rules('username', 'Username', 'required', array('required' => '%s masih kosong'));
        $this->form_validation->set_rules('password', 'Password', 'required', array('required' => '%s masih kosong'));

        if ($this->form_validation->run() == FALSE) {
            $errors = validation_errors();
            $this->session->set_flashdata('form_error', $errors);
            redirect('owner/tambah_user');
        }

        if ($this->form_validation->run()) {
            $nama = $this->input->post('nama');
            $username = $this->input->post('username');
            $password = md5($this->input->post('password'));
            $role = $this->input->post('role');
        

        $data = array(
            'nama' => $nama,
            'username' => $username,
            'password' => $password,
            'role' => $role,
        );

            $this->model_user->tambah_user($data, 'tb_user');
            redirect('owner/tambah_user');
        }
        
    }

    public function hapus($id)
    {
        $where = array('id' => $id);
        $this->model_user->hapus_data($where, 'tb_user');
        redirect('owner/tambah_user');
    }
}