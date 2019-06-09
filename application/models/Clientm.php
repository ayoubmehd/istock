 <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Clientm extends CI_Model {

	public function testmoodel()
	{
        return "test model ok !";
	}
  

    public function getClient($limit = 0, $start = 0) {

        $this->db->select('*');
        $this->db->limit($limit, $start);
        $this->db->from('client');
        $query = $this->db->get();
        $r = $query->result();

        return $r;

    }

    public function searchAllClient($search, $limit, $start) {

        $array = array(
            'CinC'           => $search,
            'NomC'           => $search,
            'PrenomC'        => $search,
            'EmailC'         => $search,
            'Adressc'        => $search,
            'TeleC'          => $search,
            'SexC'           => $search,
            'ResSoC'         => $search,
            'Datedecreation' => $search,
            'RemarqueC'      => $search
        );


        $this->db->or_like($array);
        $this->db->limit($limit, $start);
        $this->db->from('client');
        $query = $this->db->get();
        return $query->result();

    }

    public function searchCount($search) {

        $array = array(
            'NomC'           => $search,
            'PrenomC'        => $search,
            'EmailC'         => $search,
            'Adressc'        => $search,
            'TeleC'          => $search,
            'SexC'           => $search,
            'ResSoC'         => $search,
            'RemarqueC'      => $search
        );


        $this->db->or_like($array);

        $this->db->from('client');
        $query = $this->db->get();

        return $query->num_rows();

    }

    public function getCount() {

        return $this->db->count_all('client');

    }
 public function insertclient($list){
    $this->db->insert('client',$list);

  }
public function getclnt($id){
   $this->db->select('*');
   $this->db->from('client');
   $this->db->where('CinC',$id);
   $query = $this->db->get();
   $r=$query->result();
   return $r;
}
public function Modifc($data,$id){
    $this->db->where('CinC',$id);
     $query = $this->db->update('client',$data);
  }
  public function deleteclient($CinC) {

    $this->db->where('CinC', $CinC);
    $this->db->delete('client');

}
  
function can_login($username, $password)  
      {     $this->db->select("*");
            $this->db->from('users');
           $this->db->where('username', $username);  
           $this->db->where('password', $password);  
           $query = $this->db->get();  
           //SELECT * FROM users WHERE username = '$username' AND password = '$password'  
           $num_rows = $query->num_rows();
            
            if ($num_rows > 0) {

                return $query->result();

            }

            return false;
        }
       

}





