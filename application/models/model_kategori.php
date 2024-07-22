<?php

class Model_kategori extends CI_Model{
    public function data_pakaian_pria(){
        return $this->db->get_where("tb_barang",array('kategori' => 'pakaian pria'));
    }

    public function data_pakaian_wanita(){
        return $this->db->get_where("tb_barang",array('kategori' => 'pakaian wanita'));
    }

    public function data_aksesoris(){
        return $this->db->get_where("tb_barang",array('kategori' => 'aksesoris'));
    }

    public function data_pakaian_anak_laki(){
        return $this->db->get_where("tb_barang",array('kategori' => 'pakaian anak laki'));
    }

    public function data_pakaian_anak_perempuan(){
        return $this->db->get_where("tb_barang",array('kategori' => 'pakaian anak perempuan'));
    }
}