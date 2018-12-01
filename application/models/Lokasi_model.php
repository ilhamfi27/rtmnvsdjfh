<?php
class Lokasi_model extends CI_Model{

    public function __construct() {
        parent::__construct();
    }

    public function all_provinsi() {
        $sql = "
        SELECT
            `id`,
            `name`
        FROM
            `provinsi`
        ";
        return $this->db->query($sql);
    }
}
