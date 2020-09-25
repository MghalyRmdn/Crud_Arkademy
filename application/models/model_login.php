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
            ->limit(1)
            ->get('admin');

        // $hasil = $this->db
        //     ->where('username', $username)
        //     ->where('password', md5($password))
        //     ->limit(1)
        //     ->get('user');

        if ($result->num_rows() == 1) {
            return $result->row();
            // } elseif ($hasil->num_rows() > 0) {
            //     return $hasil->row();
        } else {
            return array();
        }
    }
}
