<?php

class Dashboard_owner extends CI_Controller{
    
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
        $this->load->view('templates_owner/header');
        $this->load->view('templates_owner/sidebar');
        $this->load->view('owner/dashboard');
        $this->load->view('templates_owner/footer');
    }
}