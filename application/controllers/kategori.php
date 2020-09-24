<?php

class Kategori extends CI_Controller
{

    public function elektronik()
    {
        $data['judul'] = "Kategori Elektronik";
        $data['elektronik'] = $this->model_kategori->data_elektronik()->result();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('customer/elektronik', $data);
        $this->load->view('templates/footer');
    }

    public function buku()
    {
        $data['judul'] = "Kategori Buku/Novel";
        $data['buku'] = $this->model_kategori->data_buku()->result();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('customer/buku', $data);
        $this->load->view('templates/footer');
    }
    public function pakaian_pria()
    {
        $data['judul'] = "Kategori Pakaian Pria";
        $data['pakaian_pria'] = $this->model_kategori->data_pakaian_pria()->result();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('customer/pakaian_pria', $data);
        $this->load->view('templates/footer');
    }


    public function pakaian_wanita()
    {
        $data['judul'] = "Kategori Pakaian Wanita";
        $data['pakaian_wanita'] = $this->model_kategori->data_pakaian_wanita()->result();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('customer/pakaian_wanita', $data);
        $this->load->view('templates/footer');
    }

    public function pakaian_anak2()
    {
        $data['judul'] = "Kategori Pakaian Anak-anak";
        $data['pakaian_anak2'] = $this->model_kategori->data_pakaian_anak2()->result();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('customer/pakaian_anak2', $data);
        $this->load->view('templates/footer');
    }

    public function peralatan_olahraga()
    {
        $data['judul'] = "Kategori Pakaian Anak-anak";
        $data['peralatan_olahraga'] = $this->model_kategori->data_peralatan_olahraga()->result();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('customer/peralatan_olahraga', $data);
        $this->load->view('templates/footer');
    }
}
