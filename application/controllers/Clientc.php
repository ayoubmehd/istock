<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Clientc extends CI_Controller {

  
	public function __construct() {

		parent::__construct();
		is_logged_in();

  }
  
  public function loadView($view, $data = array()) {

    $this->load->view('header', $data);
    $this->load->view($view, $data);
    $this->load->view('footer', $data);

  }

  function configPagination() {

    $this->load->library('pagination');

    $this->load->model('Clientm');
    $config['base_url'] = base_url('index.php/Clientc/page/');

    //Number of rows to show in a single page
    $config['per_page'] = 5;

    //Designe

    //firs Link html parent
    $config['first_tag_open'] = '<li class="page-item">';
    $config['first_tag_close'] = '</li>';

    //Last link html parent
    $config['last_tag_open'] = '<li class="page-item">';
    $config['last_tag_close'] = '</li>';

    //Preview page link html parent
    $config['prev_tag_open'] = '<li class="page-item">';
    $config['prev_tag_close'] = '</li>';

    //Next page link html parent
    $config['next_tag_open'] = '<li class="page-item">';
    $config['next_tag_close'] = '</li>';

    //Number of page html parent
    $config['num_tag_open'] = '<li class="page-item">';
    $config['num_tag_close'] = '</li>';

    //Selected Link
    $config['cur_tag_open'] = '<li class="page-item active"><a class="page-link">';
    $config['cur_tag_close'] = '</a></li>';
    //Add atribut to links all
    $config['attributes'] = array(

      'class'   =>    'page-link'

    );

    return $config;

  }

  function pagination() {

    //Total rows

    $config = $this->configPagination();

    $config['total_rows'] = $this->Clientm->getCount();

    //url of the first page
    $config['first_url'] = base_url('index.php/Clientc/');
    //int pagination
    $this->pagination->initialize($config);

    //Get the page per parametre
    $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;

    $data['client'] = $this->Clientm->getClient($config['per_page'], $page);

    //echo $this->pagination->create_links();

    $data['link'] =  $this->pagination->create_links();

    $this->loadView('Clientv', $data);
  }

  public function index()
  {
    $this->pagination();

  }

  public function page()
  {
    $this->pagination();
  }

  public function search() {

    $this->load->model('Clientm');

    //Get The search Input
    $search = $this->input->post('search');

    if($search) {
      $this->session->unset_userdata('search');
    }

    if(!$this->session->userdata('search')) {
      $this->session->set_userdata(array('search' => $search));
    } else {
      $search = $this->session->userdata('search');
    }

    $config = $this->configPagination();

    $config['total_rows'] = $this->Clientm->searchCount($search);
    $config['base_url'] = base_url('index.php/Clientc/search/');
    $this->pagination->initialize($config);

    //Get the page per parametre
    $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;

    $data['client'] = $this->Clientm->searchAllClient($search, $config['per_page'], $page);
    $data['link'] =  $this->pagination->create_links();
    $this->loadView('Clientv', $data);
    
}
public function Ajouterc()
{
  $this->load->view('Header');
  $this->load->view('Ajouterc');
  $this->load->view('Footer');
}
public function Ajouterclient()
{
        $this->load->model('clientm');
        $client = array(
          "CinC"=>$this->input->post("CinC"),
          "NomC"=>$this->input->post("NomC"),
          "PrenomC"=>$this->input->post("PrenomC"),
          "EmailC"=>$this->input->post("EmailC"),
          "Adressc"=>$this->input->post("Adressc"),
          "TeleC"=>$this->input->post("TeleC"),
          "SexC"=>$this->input->post("SexC"),
          "ResSoC"=>$this->input->post("ResSoC"),
          "RemarqueC"=>$this->input->post("RemarqueC")
        );
       $this->clientm->insertclient($client);
        redirect('Clientc');
}
public function Modif($id)
{
  $this->load->view('Header');
  $this->load->model('clientm');
  $data['clnt']=$this->clientm->getclnt($id);
  $this->load->view('Modifc',$data);
  $this->load->view('Footer');
}
public function Magclient($id)
{
        $this->load->model('clientm');
        $client = array(
          
          "NomC"=>$this->input->post("NomC"),
          "PrenomC"=>$this->input->post("PrenomC"),
          "EmailC"=>$this->input->post("EmailC"),
          "Adressc"=>$this->input->post("Adressc"),
          "TeleC"=>$this->input->post("TeleC"),
          "SexC"=>$this->input->post("SexC"),
          "ResSoC"=>$this->input->post("ResSoC"),
          "Datedecreation"=>$this->input->post("Datedecreation"),
          "RemarqueC"=>$this->input->post("RemarqueC")
        );
       $this->clientm->Modifc($client,$id);
        redirect ('Clientc');

}

  public function Suprimer ($CinC) 
{
    $this->load->model('Clientm');
    $this->Clientm->deleteclient($CinC);
    
    redirect('Clientc');
  }
  
 
}


        
       
      
  



