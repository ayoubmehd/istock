<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Fournisseurc extends CI_Controller {


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

		$this->load->model('Fournisseurm');
		$config['base_url'] = base_url('index.php/Fournisseurc/page');

		//Number of rows to show in a single page
		$config['per_page'] = 10;

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

			'class'		=> 		'page-link'

		);

		return $config;

	}

	function listing() {

		//Total rows
		$config = $this->configPagination();
		
		$config['total_rows'] = $this->Fournisseurm->getCount();


		//url of the first page
		$config['first_url'] = base_url('index.php/Fournisseurc');

		//int pagination
		$this->pagination->initialize($config);

		//Get the page per parametre
		$page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
		//$page=5;
		$data['Fournisseur'] = $this->Fournisseurm->getfournisseur($config['per_page'], $page);

		//echo $this->pagination->create_links();
		$data['link'] =  $this->pagination->create_links();
		
		$this->loadView('Fournisseurv', $data);

	}

	public function index() {

		$this->listing();

	}

	public function page() {

		$this->listing();
	
	}

	public function search() {

		$this->load->model('Fournisseurm');

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

		$config['total_rows'] = $this->Fournisseurm->searchCount($search);
		$config['base_url'] = base_url('index.php/Fournisseurc/search/');
		$this->pagination->initialize($config);

		//Get the page per parametre
		$page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;

		$data['Fournisseur'] = $this->Fournisseurm->searchAll($search, $config['per_page'], $page);
		$data['link'] =  $this->pagination->create_links();
		$this->loadView('Fournisseurv', $data);
		//var_dump($config['per_page']);
	}
  //Get les donnes de Fournisseur Database

//Ajouter le donnes de Fournisseur dans la Database
public function AjoutF()
{
  $data['pagetitle'] = "Fournisseur";
 $this->load->view('header',$data);
  $this->load->view('Ajoutf');
  $this->load->view('footer');
}
public function AjouterFournisseur()
{
  $this->load->model('Fournisseurm');
        $Fournisseur = array(
          "NumFor"=>$this->input->post("NumFor"),
          "AdressFor"=>$this->input->post("AdressFor"),
          "TéleFor"=>$this->input->post("TéleFor"),
          "VilleFor"=>$this->input->post("VilleFor"),
          "PaysFor"=>$this->input->post("PaysFor"),
          "FaxFor"=>$this->input->post("FaxFor"),
          "ResSFor"=>$this->input->post("ResSFor"),
          "DateCreationFor"=>$this->input->post("DateCreationFor"),
          "RemarqueFor"=>$this->input->post("RemarqueFor"),
          "UserFor"=>$this->input->post("UserFor"),
        );
       $this->Fournisseurm->insertFournisseur($Fournisseur);
        redirect ('Fournisseurc');
}
//Modifier le donnes de Fournisseur
public function Modif($id)
{
  $this->load->view('header');
  $this->load->model('Fournisseurm');
  $data['getfrn']=$this->Fournisseurm->getfour($id);
  $this->load->view('Modif',$data);
  $this->load->view('footer');
}
public function MagFournisseur($id)
{
  $this->load->model('Fournisseurm');
	$Fournisseur = array(
		"AdressFor"=>$this->input->post("AdressFor"),
		"TéleFor"=>$this->input->post("TéleFor"),
		"VilleFor"=>$this->input->post("VilleFor"),
		"PaysFor"=>$this->input->post("PaysFor"),
		"FaxFor"=>$this->input->post("FaxFor"),
		"ResSFor"=>$this->input->post("ResSFor"),
		"DateCreationFor"=>$this->input->post("DateCreationFor"),
		"RemarqueFor"=>$this->input->post("RemarqueFor"),
		"UserFor"=>$this->input->post("UserFor"),
	);
	$this->Fournisseurm->Modifour($Fournisseur,$id);
	redirect('Fournisseurc');
}
//supprimer les donnes de Fournisseur

	public function Suprimer($id) {

		$this->load->model('Fournisseurm');
		$this->Fournisseurm->deleteProduit($id);
    redirect ('Fournisseurc');


	}

}
