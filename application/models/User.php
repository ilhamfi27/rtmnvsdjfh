<?php
class User extends CI_Model {
    private $table_name;

    public function __construct() {
        $this->table_name = 'user';
        $this->load->database();
    }

    public function create_user($data) {
        $this->db->insert($this->table_name, $data);
    }

    public function cek_user_login($where){
        return $this->db->where($where);
    }
}
