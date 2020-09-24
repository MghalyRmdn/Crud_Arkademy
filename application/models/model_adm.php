<?php

class Model_adm extends CI_Model
{

    public function ambilData($table)
    {
        return $this->db->get($table);
    }

    public function insert_data($data, $table)
    {
        $this->db->insert($table, $data);
    }
}
