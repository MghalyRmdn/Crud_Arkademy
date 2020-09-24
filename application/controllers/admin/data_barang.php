<?php

class Data_barang extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        if (!isset($this->session->userdata['username'])) {
            $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
					Maaf Login Dulu sebagai Admin
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					  <span aria-hidden="true">&times;</span>
					</button>
				  </div>');
            redirect('auth/login');
        }
    }

    public function index()
    {

        $data['judul'] = "Halaman Data Produk";
        $data['produk'] = $this->model_barang->tampil_data()->result();
        $this->load->view('templates_admin/header', $data);
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/data_barang');
        $this->load->view('templates_admin/footer');
    }

    public function tambah_aksi()
    {
        $this->rules();
        if ($this->form_validation->run() == false) {
            $data['judul'] = "Halaman Data Produk";
            $data['produk'] = $this->model_barang->tampil_data()->result();
            $this->load->view('templates_admin/header', $data);
            $this->load->view('templates_admin/sidebar');
            $this->load->view('admin/data_barang');
            $this->load->view('templates_admin/footer');
        } else {
            $nama_produk   = $this->input->post('nama_produk');
            $keterangan = $this->input->post('keterangan');
            $kategori   = $this->input->post('kategori');
            $harga      = $this->input->post('harga');
            $jumlah       = $this->input->post('jumlah');
            $gambar     = $_FILES['gambar']['name'];
            if ($gambar = '') {
            } else {
                $config['upload_path'] = './upload';
                $config['allowed_types'] = 'jpg|jpeg|png|gif';

                $this->load->library('upload', $config);
                if (!$this->upload->do_upload('gambar')) {
                    echo "Gambar Gagal Diupload";
                } else {
                    $gambar = $this->upload->data('file_name');
                }
            }
            $data = [
                "nama_produk"   => $nama_produk,
                "keterangan" => $keterangan,
                "kategori"   => $kategori,
                "harga"     => $harga,
                "jumlah"      => $jumlah,
                "gambar"      => $gambar
            ];

            $this->model_barang->tambah_barang($data, 'produk');
            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            Data Barang Berhasil Ditambahkan!.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>');
            redirect('admin/data_barang');
        }
    }

    public function edit($id)
    {
        $where = ["id" => $id];
        $data['judul'] = "Edit Data Barang";
        $data['produk'] = $this->model_barang->edit_barang($where, 'produk')->result();
        $this->load->view('templates_admin/header', $data);
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/edit_barang', $data);
        $this->load->view('templates_admin/footer');
    }

    public function detail_brg($id)
    {
        $data['produk'] = $this->model_barang->detail_brg($id);
        $data['judul'] = "Halaman Admin Detail Produk";
        $this->load->view('templates_admin/header', $data);
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/detail_barang', $data);
        $this->load->view('templates/footer');
    }

    public function update()
    {

        $id             = $this->input->post('id');
        $nama_produk    = $this->input->post('nama_produk');
        $keterangan     = $this->input->post('keterangan');
        $kategori       = $this->input->post('kategori');
        $harga          = $this->input->post('harga');
        $jumlah           = $this->input->post('jumlah');
        $gambar     = $_FILES['gambar']['name'];
        if ($gambar = '') {
        } else {
            $config['upload_path'] = './upload';
            $config['allowed_types'] = 'jpg|jpeg|png|gif';

            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('gambar')) {
                echo "Gambar Gagal Diupload";
            } else {
                $gambar = $this->upload->data('file_name');
            }
        }



        $data =
            [
                "nama_produk" => $nama_produk,
                "keterangan" => $keterangan,
                "kategori" => $kategori,
                "harga" => $harga,
                "jumlah" => $jumlah,
                "gambar"      => $gambar
            ];

        $where = [
            "id" => $id
        ];

        $this->model_barang->update_data($where, $data, 'produk');
        $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
        Data Barang Berhasil Diupdate!.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>');
        redirect('admin/data_barang');
    }

    public function hapus($id)
    {
        $where = ["id" => $id];
        $this->model_barang->hapus_data($where, 'produk');
        $this->session->set_flashdata('pesan', '<div class="alert alert-warning alert-dismissible fade show" role="alert">
            Data Barang Berhasil Dihapus!.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>');
        redirect('admin/data_barang');
    }

    public function rules()
    {
        $this->form_validation->set_rules('nama_produk', 'Nama Produk', 'required');
        $this->form_validation->set_rules('keterangan', 'Nama Produk', 'required');
        $this->form_validation->set_rules('kategori', 'Kategori', 'required');
        $this->form_validation->set_rules('harga', 'Harga', 'required');
        $this->form_validation->set_rules('jumlah', 'Jumlah', 'required');
    }
}
