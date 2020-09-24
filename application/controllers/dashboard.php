<?php

class Dashboard extends CI_Controller
{

    public function index()
    {
        $data['judul'] = "Toko CodeIgniter";
        $data['produk'] = $this->model_barang->tampil_data()->result();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('customer/dashboard', $data);
        $this->load->view('templates/footer');
    }


    public function to_chart($id)
    {
        if (!isset($this->session->userdata['username'])) {
            $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
					Maaf Anda Belum Login
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					  <span aria-hidden="true">&times;</span>
					</button>
				  </div>');
            redirect('auth/login');
        } else {
            $produk = $this->model_barang->find($id);

            $data = array(
                'id'      => $produk->id,
                'qty'     => 1,
                'price'   => $produk->harga,
                'name'    => $produk->nama_produk

            );

            $this->cart->insert($data);
            redirect('dashboard');
        }
    }

    public function detail_cart()
    {
        $data['judul'] = "Detail Keranjang";
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('customer/keranjang');
        $this->load->view('templates/footer');
    }
    public function delete_chart()
    {
        $this->cart->destroy();
        $this->session->set_flashdata('pesan', '<div class="alert alert-warning alert-dismissible fade show" role="alert">
           Item Keranjang Berhasil Dihapus!.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>');
        redirect('dashboard/index');
    }

    public function pembayaran()
    {
        $data['judul'] = "Pembayaran";
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('customer/pembayaran');
        $this->load->view('templates/footer');
    }

    public function proses_pesanan()
    {
        $data['judul'] = "Order";
        $is_proses = $this->model_invoice->index();
        if ($is_proses) {
            $this->cart->destroy();
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar');
            $this->load->view('customer/proses_pesanan');
            $this->load->view('templates/footer');
        } else {
            echo "<div class='alert alert-danger ' role='alert'>
            Maaf ,Pesanan Anda Gagal Diproses!</div>";
        }
    }

    public function detail($id)
    {
        $data['produk'] = $this->model_barang->detail_brg($id);
        $data['judul'] = "Halaman Detail Barang";
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('customer/detail_barang', $data);
        $this->load->view('templates/footer');
    }
}
