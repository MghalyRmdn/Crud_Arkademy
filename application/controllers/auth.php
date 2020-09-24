<?php

class Auth extends CI_Controller
{

    public function login()
    {
        $data['judul'] = "Form Login";
        $this->form_validation->set_rules('username', 'Username', 'required', ['required' => 'Username wajib diisi']);
        $this->form_validation->set_rules('password', 'Password', 'required', ['required' => 'Password wajib diisi']);
        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('form_login');
            $this->load->view('templates/footer');
        } else {
            $auth = $this->model_login->cek_login();

            if ($auth == false) {
                $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                Upss Username atau Password Belum Benar.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>');
                redirect('auth/login');
            } else {
                $this->session->set_userdata('id_customer', $auth->id_customer);
                $this->session->set_userdata('id_admin', $auth->id_admin);
                $this->session->set_userdata('username', $auth->username);
                $this->session->set_userdata('role_id', $auth->role_id);
                $this->session->set_userdata('nama', $auth->nama);
                $this->session->set_userdata('nama_admin', $auth->nama_admin);

                switch ($auth->role_id) {
                    case 1:
                        redirect('admin/dashboard_admin');
                        break;
                    case 2:
                        redirect('dashboard');
                        break;
                    default:
                        break;
                }
            }
        }
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('auth/login');
    }
}
