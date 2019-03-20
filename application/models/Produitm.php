<<<<<<< HEAD
<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

class Produitm extends CI_Model {
    
    public function getProduit($limit = 0, $start = 0) {

        $this->db->select('*');
        $this->db->limit($limit, $start);
        $this->db->from('produit');
        $query = $this->db->get();
        $r = $query->result();

        return $r;

    }

    public function searchAll($search, $limit, $start) {

        $array = array(
            'IdP'           => $search,
            'NomP'          => $search,
            'DateEP'        => $search,
            'QuteP'         => $search,
            'PrixdachaP'    => $search,
            'DateCreationP' => $search,
            'UserP'         => $search,
            'RemarqueP'     => $search
        );


        $this->db->or_like($array);
        $this->db->limit($limit, $start);
        $this->db->from('produit');
        $query = $this->db->get();
        return $query->result();

    }

    public function searchCount($search) {

        $array = array(
            'NomP'          => $search,
            'DateEP'        => $search,
            'QuteP'         => $search,
            'DateCreationP' => $search,
            'UserP'         => $search,
            'RemarqueP'     => $search
        );


        $this->db->or_like($array);

        $this->db->from('produit');
        $query = $this->db->get();

        return $query->num_rows();

    }

    public function getCount() {

        return $this->db->count_all('produit');

    }

    public function insertProduit($list) {

        $this->db->insert('produit', $list);

    }

    public function getProduitById($IdP) {

        $this->db->select('*');
        $this->db->from('produit');
        $this->db->where('IdP', $IdP);
        $query = $this->db->get();
        $r = $query->result();

        return $r;

    }

    public function updateProduit($IdP, $list) {

        $this->db->where('IdP', $IdP);
        $this->db->update('produit', $list);

    }

    public function deleteProduit($IdP) {

        $this->db->where('IdP', $IdP);
        $this->db->delete('produit');

    }


    public function IncrimentQtt($IdP, $qtt) {

        $oldQtt = $this->getProduitById($IdP)[0]->QuteP;

        $newQtt = $oldQtt + $qtt;

        $this->updateProduit($IdP, array(

            'QuteP' => $newQtt

        ));

    }

    public function getSUM($column) {

        $this->db->select_sum($column);
        $this->db->from('produit');
        $query = $this->db->get();

        return $query->result()[0]->QuteP;

    }

    public function DecrimentQtt($IdP, $qtt) {

        $oldQtt = $this->getProduitById($IdP)[0]->QuteP;
        if($oldQtt > 0)
            $newQtt = $oldQtt - $qtt;

        $this->updateProduit($IdP, array(

            'QuteP' => $newQtt

        ));

    }

}
=======
<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

class Produitm extends CI_Model {
    
    public function getProduit($limit = 0, $start = 0) {

        $this->db->select('*');
        $this->db->limit($limit, $start);
        $this->db->from('produit');
        $query = $this->db->get();
        $r = $query->result();

        return $r;

    }

    public function searchAll($search, $limit, $start) {

        $array = array(
            'IdP'           => $search,
            'NomP'          => $search,
            'DateEP'        => $search,
            'QuteP'         => $search,
            'PrixdachaP'    => $search,
            'DateCreationP' => $search,
            'UserP'         => $search,
            'RemarqueP'     => $search
        );


        $this->db->or_like($array);
        $this->db->limit($limit, $start);
        $this->db->from('produit');
        $query = $this->db->get();
        return $query->result();

    }

    public function searchCount($search) {

        $array = array(
            'NomP'          => $search,
            'DateEP'        => $search,
            'QuteP'         => $search,
            'DateCreationP' => $search,
            'UserP'         => $search,
            'RemarqueP'     => $search
        );


        $this->db->or_like($array);

        $this->db->from('produit');
        $query = $this->db->get();

        return $query->num_rows();

    }

    public function getCount() {

        return $this->db->count_all('produit');

    }

    public function insertProduit($list) {

        $this->db->insert('produit', $list);

    }

    public function getProduitById($IdP) {

        $this->db->select('*');
        $this->db->from('produit');
        $this->db->where('IdP', $IdP);
        $query = $this->db->get();
        $r = $query->result();

        return $r;

    }

    public function updateProduit($IdP, $list) {

        $this->db->where('IdP', $IdP);
        $this->db->update('produit', $list);

    }

    public function deleteProduit($IdP) {

        $this->db->where('IdP', $IdP);
        $this->db->delete('produit');

    }


    public function IncrimentQtt($IdP, $qtt) {

        $oldQtt = $this->getProduitById($IdP)[0]->QuteP;

        $newQtt = $oldQtt + $qtt;

        $this->updateProduit($IdP, array(

            'QuteP' => $newQtt

        ));

    }

    public function getSUM($column) {

        $this->db->select_sum($column);
        $this->db->from('produit');
        $query = $this->db->get();

        return $query->result()[0]->QuteP;

    }

    public function DecrimentQtt($IdP, $qtt) {

        $oldQtt = $this->getProduitById($IdP)[0]->QuteP;
        if($oldQtt > 0)
            $newQtt = $oldQtt - $qtt;

        $this->updateProduit($IdP, array(

            'QuteP' => $newQtt

        ));

    }

}
>>>>>>> ea634bc0baeb4d4688a09ea8485989506d1a03b1
