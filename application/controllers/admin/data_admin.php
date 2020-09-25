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
        $nama_admin     = $this->input->post('nama_admin');
        $username       = $this->input->post('username');
        $email          = $this->input->post('email');
        $password       = md5($this->input->post('password'));
        $no_rekening    = $this->input->post("no_rekening");
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
            "nama_admin"    => $nama_admin,
            "username"      => $username,
            "password"      => $password,
            "email"         => $email,
            "no_rekening"   => $no_rekening,
            "role_id"       => 1,
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

    public function edit($id)
    {
        $where = ["id" => $id];
        $data['judul'] = "Edit Data Admin";
        $data['admin'] = $this->model_adm->editData($where, 'admin')->result();
        $this->load->view('templates_admin/header', $data);
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/edit_dataAdmin', $data);
        $this->load->view('templates_admin/footer');
    }

    public function update()
    {

        $id         = $this->input->post('id');
        $nama_admin = $this->input->post('nama_admin');
        $username   = $this->input->post('username');
        $password   = MD5($this->input->post('password'));
        $email      = $this->input->post('email');
        $no_rek     = $this->input->post('no_rekening');
        $photo = $_FILES['photo']['name'];
        if ($photo = '') {
        } else {
            $config['upload_path'] = './upload';
            $config['allowed_types'] = 'jpg|jpeg|png|gif';

            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('photo')) {
                echo "Photo Gagal Diupload";
            } else {
                $photo = $this->upload->data('file_name');
            }
        }
        $data = array(
            'nama_admin' => $nama_admin,
            'username'   => $username,
            'password'   => $password,
            'email'      =>  $email,
            'no_rekening' => $no_rek,
            'role_id' => 1,
            'photo' => $photo
        );
        $where = ["id" => $id];
        $this->model_adm->update_data($where, $data, 'admin');
        $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            Data Admin Berhasil Diupdate!.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>');
        redirect('admin/data_admin');
    }

    public function detail($id)
    {
        $data['admin'] = $this->model_adm->detail($id);
        $data['judul'] = "Halaman Admin Detail admin";
        $this->load->view('templates_admin/header', $data);
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/detail_admin', $data);
        $this->load->view('templates/footer');
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
