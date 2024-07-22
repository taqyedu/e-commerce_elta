<?php

class Auth extends CI_Controller {

    public function logout(){
        $this->session->sess_destroy();
        redirect('auth/login');
    }
}