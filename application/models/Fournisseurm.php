<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Fournisseurm extends CI_Model {

    public function getfournisseur($limit = 0, $start = 0) {

        $this->db->select('*');
        $this->db->limit($limit, $start);
        $this->db->from('fournniseur');
        $query = $this->db->get();
        $r = $query->result();

        return $r;

    }

    public function searchAll($search, $limit, $start) {

        $array = array(
            'NumFor'           => $search,
            'AdressFor	'          => $search,
            'TéleFor'        => $search,
            'VilleFor'         => $search,
            'PaysFor'    => $search,
            'FaxFor' => $search,
            'ResSFor'         => $search,
            'DateCreationFor'     => $search,
            'RemarqueFor'     => $search,
            'UserFor'     => $search
        );


        $this->db->or_like($array);
        $this->db->limit($limit, $start);
        $this->db->from('fournniseur');
        $query = $this->db->get();
        return $query->result();

    }

    public function searchCount($search) {

        $array = array(
          'AdressFor	'          => $search,
          'TéleFor'        => $search,
          'VilleFor'         => $search,
          'PaysFor'    => $search,
          'FaxFor' => $search,
          'ResSFor'         => $search,
          'DateCreationFor'     => $search,
          'RemarqueFor'     => $search,
          'UserFor'     => $search
        );


        $this->db->or_like($array);

        $this->db->from('fournniseur');
        $query = $this->db->get();

        return $query->num_rows();

    }

    public function getCount() {

      return $this->db->count_all('fournniseur');
    }
public function insertFournisseur($list)
  {
    $this->db->insert('fournniseur',$list);
  }
public function getfour($id){
/*  $r=$this->db->get_where('Fournisseur',array('NumFor'=>$id));
  return $r->result();*/
  $this->db->select('*');
  $this->db->from('fournniseur');
  $this->db->where('NumFor',$id);
  $query = $this->db->get();
  $r=$query->result();
  return $r;
}
public function Modifour($data,$id){
  $this->db->where('NumFor',$id);
  $query = $this->db->update('fournniseur',$data);
}
public function deleteProduit($id) {

    $this->db->where('NumFor', $id);
    $this->db->delete('fournniseur');

}


/*  public function testlogin($username,$pass){
    $this->db->where('Username',$username);
    $this->db->where('Password',$pass);
    $this->db->select('*');
    $this->db->from('users');
    $query = $this->db->get();
    $r = $query->num_rows();
  // return $r;
//  var_dump($r);
if($query->num_rows()>0){
return $query->result();
}
return false;

}*/

public function can_login($username,$password){

$this->db->where('Username',$username);
$this->db->where('Password',$password);
$this->db->select('*');
$this->db->from('users');
$query = $this->db->get();
//var_dump($query->num_rows());
if($query->num_rows()>0){
  return true;
}
else{
  return false;
}
}


}
