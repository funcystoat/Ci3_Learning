<?php

class User_model extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function insert_into_users_table($data_array) {
        return $this->db->insert("users", $data_array);
    }
}
