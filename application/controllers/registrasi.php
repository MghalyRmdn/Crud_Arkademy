<?php

class Registrasi extends CI_Controller
{
    public function index()
    {
        $this->form_validation->set_rules('nama', 'Nama', 'required', ['required' => 'Nama Wajib diisi']);
        $this->form_validation->set_rules('username', 'Username', 'required', ['required' => 'Username Wajib diisi']);
        $this->form_validation->set_rules('password_1', 'Password', 'required|matches[password_2]', ['required' => 'Password Wajib diisi', 'matches' => 'password tidak sama']);
        $this->form_validation->set_rules('password_2', 'Password', 'required|matches[password_1]', ['required' => 'Password Wajib diisi']);
        $data['judul'] = 'Halaman Registrasi';
        if ($this->form_validation->run() == false) {

            $this->load->view('templates/header', $data);
            $this->load->view('registrasi');
            $this->load->view('templates/footer');
        } else {
            $data =  [
                "id_user" => '',
                "nama" => $this->input->post("nama"),
                "username" => $this->input->post("username"),
                "password" => MD5($this->input->post("password_1")),
                "role_id" => "",
            ];

            $this->db->insert('user', $data);
            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            Akun Berhasil Dibuat Silahkan Login!.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>');
            redirect('auth/login');
        }
    }
}
