<?php

class Model_login extends CI_Model
{
    public function cek_login()
    {
        $username = set_value('username');
        $password = set_value('password');

        $result = $this->db
            ->where('username', $username)
            ->where('password', md5($password))
            ->limit(2)
            ->get('user');

        $hasil = $this->db
            ->where('username', $username)
            ->where('password', md5($password))
            ->limit(3)
            ->get('admin');

        if ($result->num_rows() > 0) {
            return $result->row();
        } elseif ($hasil->num_rows() > 0) {
            return $hasil->row();
        } else {
            return FALSE;
        }
    }
}
