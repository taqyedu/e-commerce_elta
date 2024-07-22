<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index() {
        $data['barang'] = $this->model_barang->tampil_data()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/navbar_guest');
        $this->load->view('templates/footer');
        $this->load->view('dashboard_guest', $data);
    }
}
