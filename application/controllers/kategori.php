<?php

class Kategori extends CI_Controller{

    public function __construct(){
        parent::__construct();

        if($this->session->userdata('role_id') != '2'){
            $this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
            Silahkan Login Terlebih Dahulu
             <button type="button" class="close" data-dismiss="alert" aria-label="Close">
               <span aria-hidden="true">&times;</span>
             </button>
           </div>');
           redirect('auth/login');
        }
    }

    public function pakaian_pria(){
        $data['pakaian_pria'] = $this->model_kategori->data_pakaian_pria()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/navbar');
        $this->load->view('templates/footer');
        $this->load->view('pakaian_pria', $data);
    }

    public function pakaian_wanita(){
        $data['pakaian_wanita'] = $this->model_kategori->data_pakaian_wanita()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/navbar');
        $this->load->view('templates/footer');
        $this->load->view('pakaian_wanita', $data);
    }

    public function aksesoris(){
        $data['aksesoris'] = $this->model_kategori->data_aksesoris()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/navbar');
        $this->load->view('templates/footer');
        $this->load->view('aksesoris', $data);
    }

    public function pakaian_anak_laki(){
        $data['pakaian_anak_laki'] = $this->model_kategori->data_pakaian_anak_laki()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/navbar');
        $this->load->view('templates/footer');
        $this->load->view('pakaian_anak_laki', $data);
    }

    public function pakaian_anak_perempuan(){
        $data['pakaian_anak_perempuan'] = $this->model_kategori->data_pakaian_anak_perempuan()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/navbar');
        $this->load->view('templates/footer');
        $this->load->view('pakaian_anak_perempuan', $data);
    }

    public function logout(){
        $this->session->sess_destroy();
        redirect('auth/login');
    }
}