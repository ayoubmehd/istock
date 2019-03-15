<?php

    defined('BASEPATH') OR exit('No direct script access allowed');


class LigneVentm extends CI_Model
{

    public function insertLigneVent($list)
    {
        $this->db->insert('lignevent', $list);

    }

    public function getLigneVentByIdVent($IdVent) {


        $this->db->select('*');
        $this->db->where('IdVent', $IdVent);
        $this->db->from('lignevent');
        $query = $this->db->get();

        return $query->result();

    }

    public function getSUM($column) {

        $this->db->select_sum($column);
        $this->db->from('lignevent');
        $query = $this->db->get();

        return $query->result()[0]->Qtt;

    }

    public function insertVent($list) {

        $this->db->insert('vent', $list);

        return $this->db->insert_id();

    }

    public function CalculPrixTTC($PrixHT) {
        $s = 0.2;
        $PrixHT = strval($PrixHT) + (strval($PrixHT) * $s);
        return $PrixHT;

    }

}