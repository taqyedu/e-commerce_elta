<?php

class Registrasi extends CI_Controller{
    public function index(){

        $this->form_validation->set_rules('no_telepon','No_telepon', 'required', ['required' => 'No telepon tidak boleh kosong']);
        $this->form_validation->set_rules('nama','Nama', 'required', ['required' => 'Nama tidak boleh kosong']);
        $this->form_validation->set_rules('username','Username', 'required', ['required' => 'Username tidak boleh kosong']);
        $this->form_validation->set_rules('password_1','Password', 'required|matches[password_2]', [
            'required'  => 'Password tidak boleh kosong',
            'matches'   => 'Password tidak cocok'
        ]);
        $this->form_validation->set_rules('password_2','Password', 'required|matches[password_1]', [
            'required'  => 'Password tidak boleh kosong',
            'matches'   => 'Password tidak cocok'
        ]);

        if($this->form_validation->run() == FALSE){
            $this->load->view('templates/header');
            $this->load->view('registrasi');
            $this->load->view('templates/footer');
        }else{
            $data = array(
                'id'            => '',
                'no_telepon'    => $this->input->post('no_telepon'),
                'nama'          => $this->input->post('nama'),
                'username'      => $this->input->post('username'),
                'password'      => $this->input->post('password_1'),
                'role_id'       => 2,
            );
            $this->db->insert('tb_user',$data);
            redirect('auth/login');
        }
        
    }
}