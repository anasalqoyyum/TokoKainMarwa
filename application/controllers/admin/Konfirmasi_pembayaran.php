<?php

class Konfirmasi_pembayaran extends CI_Controller{
    public function __construct()
    {
        parent::__construct();

        if($this->session->userdata('role') != 'admin')
        {
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
        $data['invoice'] = $this->model_invoice->tampil_data();
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/konfirmasi_pembayaran',$data);
        $this->load->view('templates_admin/footer');
    }

    public function detail($id_invoice)
    {
        $data['invoice'] = $this->model_invoice->ambil_id_invoice($id_invoice);
        $data['pesanan'] = $this->model_invoice->ambil_id_pesanan($id_invoice);
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/detail_invoice',$data);
        $this->load->view('templates_admin/footer');
    }

    
    public function merubah_status($id_invoice)
    {
        $data = array(
            'status'       => 'Diterima'
        );
    
        $where = array(
            'id_invoice' => $id_invoice
        );
    
        $this->model_invoice->update_data($where,$data,'tb_pesanan');
        redirect('admin/konfirmasi_pembayaran');
    }

    public function merubah_status2($id_invoice)
    {
        $data = array(
            'status'       => 'Ditolak'
        );
    
        $where = array(
            'id_invoice' => $id_invoice
        );
    
        $this->model_invoice->update_data($where,$data,'tb_pesanan');
        redirect('admin/konfirmasi_pembayaran');
    }
}