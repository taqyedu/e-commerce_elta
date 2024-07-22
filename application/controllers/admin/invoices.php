<?php

class Invoices extends CI_Controller{

    public function __construct(){
        parent::__construct();

        if($this->session->userdata('role_id') != '1'){
            $this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
            Silahkan Login Terlebih Dahulu
             <button type="button" class="close" data-dismiss="alert" aria-label="Close">
               <span aria-hidden="true">&times;</span>
             </button>
           </div>');
           redirect('auth/login');
        }
    }
    
    public function index(){
        $data['invoices'] = $this->model_invoices->tampil_data();
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/navbar');
        $this->load->view('templates_admin/footer');
        $this->load->view('admin/invoices',$data);
    }

    public function detail($id_invoices){
        $data['invoices'] = $this->model_invoices->ambil_id_invoices($id_invoices);
        $data['pesanan'] = $this->model_invoices->ambil_id_pesanan($id_invoices);
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/navbar');
        $this->load->view('templates_admin/footer');
        $this->load->view('admin/detail_invoices',$data);
    }
}