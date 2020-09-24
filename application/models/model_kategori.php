<?php

class Model_kategori extends CI_Model
{

    public function data_buku()
    {
        return $this->db->get_where("produk", ['kategori' => 'buku/novel']);
    }
    public function data_elektronik()
    {
        return $this->db->get_where("produk", ['kategori' => 'elektronik']);
    }

    public function data_pakaian_pria()
    {
        return $this->db->get_where("produk", ['kategori' => 'pakaian pria']);
    }

    public function data_pakaian_wanita()
    {
        return $this->db->get_where("produk", ['kategori' => 'pakaian wanita']);
    }

    public function data_pakaian_anak2()
    {
        return $this->db->get_where("produk", ['kategori' => 'pakaian anak2']);
    }

    public function data_peralatan_olahraga()
    {
        return $this->db->get_where("produk", ['kategori' => 'peralatan olahraga']);
    }
}
