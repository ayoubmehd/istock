<<<<<<< HEAD
<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');

    class Userm extends CI_Model {
    
        public function CheckUser($userName, $password) {

            $this->db->where('username', $userName);
            $this->db->where('password', $password);
            $this->db->select("*");
            $this->db->from('user');

            $query = $this->db->get();
            $num_rows = $query->num_rows();
            
            if ($num_rows > 0) {

                return $query->result();

            }

            return false;
        }

=======
<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');

    class Userm extends CI_Model {
    
        public function CheckUser($userName, $password) {

            $this->db->where('username', $userName);
            $this->db->where('password', $password);
            $this->db->select("*");
            $this->db->from('user');

            $query = $this->db->get();
            $num_rows = $query->num_rows();
            
            if ($num_rows > 0) {

                return $query->result();

            }

            return false;
        }

>>>>>>> ea634bc0baeb4d4688a09ea8485989506d1a03b1
    }