<?php

class Data_admin extends CI_Controller
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
        $data['judul'] =  "Halaman Data Admin";
        $data['admin'] = $this->model_adm->ambilData('admin')->result();
        $this->load->view('templates_admin/header', $data);
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/data_adm', $data);
        $this->load->view('templates_admin/footer');
    }

    public function tambah_aksi()
    {
        $this->_rules();
        if ($this->form_validation->run() == false) {
        } else {
            $nama           = $this->input->post('nama');
            $username       = $this->input->post('username');
            $email          = $this->input->post('email');
            $password       = md5($this->input->post('password'));
            $no_rekening    = $this->input->post("no_rekening");
            $role_id        = $this->input->post("role_id");
            $photo          = $_FILES['photo']['name'];
            if ($photo = "") {
            } else {
                $config["upload_path"] = './upload';
                $config["allowed_types"] = 'jpg|jpeg|png|tiff';

                $this->load->library('upload', $config);
                if (!$this->upload->do_upload('photo')) {
                    echo "<div class='alert alert-danger'>
                    <strong>Danger!</strong> Gambar Gagal Terupload.
                  </div>";
                } else {
                    $photo = $this->upload->data("file_name");
                }
            }


            $data = [
                "nama"          => $nama,
                "username"      => $username,
                "password"      => $password,
                "email"         => $email,
                "no_rekening"   => $no_rekening,
                "role_id"       => $role_id,
                "photo"         => $photo
            ];
            $this->model_adm->insert_data($data, "admin");
            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            Data Admin Berhasil Ditambahkan!.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>');
            redirect('admin/data_admin');
        }
    }

    public function edit($id)
    {
    }

    public function _rules()
    {
        $this->form_validation->set_rules("nama", "Nama", "required", ["required" => "nama wajib diisi"]);
        $this->form_validation->set_rules("username", "Username", "required", ["required" => "username wajib diisi"]);
        $this->form_validation->set_rules("password", "Password", "required|min_length[5]", ["required" => "Password wajib diisi"]);
        $this->form_validation->set_rules("email", "Email", "required", ["required" => "Email wajib diisi"]);
        $this->form_validation->set_rules("no_rekening", "no_rekening", "required", ["required" => "no_rekening wajib diisi"]);
    }
}
