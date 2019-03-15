<?php
  defined('BASEPATH') OR exit('No direct script access allowed');

class Lignecmdm extends CI_Model {


    public function getAllLigneCmd() {

        $this->db->select('*');
        $this->db->from('lignecmd');
        $query = $this->db->get();

        return $query->result();

    }

    public function getSUM($column) {

        $this->db->select_sum($column);
        $this->db->from('lignecmd');
        $query = $this->db->get();

        return $query->result()[0]->Qtt;

    }

    public function insertLignecmd($list) {

        $this->db->insert('lignecmd', $list);

    }

}  