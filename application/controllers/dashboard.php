<?php

class Dashboard extends CI_Controller{

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

    public function index() {
        $data['barang'] = $this->model_barang->tampil_data()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/navbar');
        $this->load->view('templates/footer');
        $this->load->view('dashboard', $data);
    }

    public function tambah_keranjang($id){
        $barang = $this->model_barang->find($id);

        $data = array(
            'id'      => $barang->id_brg,
            'qty'     => 1,
            'price'   => $barang->harga,
            'name'    => $barang->nama_brg,
        );
        
    $this->cart->insert($data);
    redirect('dashboard');
    }

    public function detail_keranjang(){
        $this->load->view('templates/header');
        $this->load->view('templates/navbar');
        $this->load->view('templates/footer');
        $this->load->view('keranjang');
    }

    public function hapus_keranjang(){
        $this->cart->destroy();
        redirect('dashboard/detail_keranjang');
    }

    public function pembayaran(){
        $this->load->view('templates/header');
        $this->load->view('templates/navbar');
        $this->load->view('templates/footer');
        $this->load->view('pembayaran');
    }

    public function proses_pesanan(){
        $is_processed = $this->model_invoices->index();
        if($is_processed){
            $this->cart->destroy();
            $this->load->view('templates/header');
            $this->load->view('templates/navbar');
            $this->load->view('templates/footer');
            $this->load->view('proses_pesanan');
        } else{
            echo "Maaf, Pesanan Anda Gagal di Proses";
        }
        
    }

    public function detail($id_brg){
        $data['barang'] = $this->model_barang->detail_brg($id_brg);
        $this->load->view('templates/header');
        $this->load->view('templates/navbar');
        $this->load->view('templates/footer');
        $this->load->view('detail_barang',$data);
    }

    public function logout(){
        $this->session->sess_destroy();
        redirect('auth/login');
    }
}