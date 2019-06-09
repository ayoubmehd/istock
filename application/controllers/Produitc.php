<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produitc extends CI_Controller {

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

		$this->load->model('Produitm');
		$config['base_url'] = base_url('index.php/Produitc/ajaxPagination/');

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

	function pagination($view = 'ProduitListing') {

		//Total rows

		$config = $this->configPagination();

		$config['total_rows'] = $this->Produitm->getCount();

		//int pagination
		$this->pagination->initialize($config);

		//Get the page per parametre
		$page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;

		$data['produit'] = $this->Produitm->getProduit($config['per_page'], $page);

		//echo $this->pagination->create_links();

		$data['link'] =  $this->pagination->create_links();
		$this->load->model('Clientm');

        $this->session->set_userdata('Produits', array(

            'IdP'        =>  $this->input->post('IdP'),
            'Qtt'        =>  $this->input->post('Qtt'),
			'PrixHT'     =>  $this->input->post('PrixHT')
			
        ));
        
		$data['Clientm'] = $this->Clientm->getClient();
		
		$this->load->view($view, $data);
	}

	public function index()
	{
		$this->load->view('header');
		$this->pagination();
		$this->load->view('footer');
	}

	public function ajaxPagination() {

		$this->pagination('response_prod');

	}

	public function search() {

		$this->load->model('Produitm');

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

		$config['total_rows'] = $this->Produitm->searchCount($search);
		$config['base_url'] = base_url('index.php/Produitc/search/');
		$this->pagination->initialize($config);

		//Get the page per parametre
		$page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;

		$data['produit'] = $this->Produitm->searchAll($search, $config['per_page'], $page);
		$data['link'] =  $this->pagination->create_links();
		$this->loadView('ProduitListing', $data);
		//var_dump($config['per_page']);
	}

	public function Ajouter() {

		$this->load->view('header');
		$this->load->view('produit_ajouter');
		$this->load->view('footer');

	}

	public function Enregistrer() {

		$this->load->model('Produitm');
		$produit = array(
			'NomP' => $this->input->post('NomP'),
			'DateEP' => $this->input->post('DateEP'),
			'QuteP' => $this->input->post('QuteP'),
			'PrixdachaP' => $this->input->post('PrixdachaP'),
			'DateCreationP' => $this->input->post('DateCreationP'),
			'UserP' => $this->input->post('UserP'),
			'RemarqueP' => $this->input->post('RemarqueP')
		);

		$this->Produitm->insertProduit($produit);

		echo 'success';
		
	}

	public function Modifier($IdP) {

		$this->load->model('Produitm');
		$data['produit'] = $this->Produitm->getProduitById($IdP);
		//var_dump($data);
		$this->load->view('header');
		$this->load->view('produit_modifier', $data);
		$this->load->view('footer');

	}

	public function ModEnre($IdP) {

		$this->load->model('Produitm');
		$produit = array(
			'NomP' => $this->input->post('NomP'),
			'DateEP' => $this->input->post('DateEP'),
			'QuteP' => $this->input->post('QuteP'),
			'PrixdachaP' => $this->input->post('PrixdachaP'),
			'DateCreationP' => $this->input->post('DateCreationP'),
			'UserP' => $this->input->post('UserP'),
			'RemarqueP' => $this->input->post('RemarqueP')
		);

		$this->Produitm->updateProduit($IdP, $produit);

		echo 'success';

	}


	public function Suprimer($IdP) {

		$this->load->model('Produitm');
		$this->Produitm->deleteProduit($IdP);

		redirect(base_url('index.php/Produitc'));
	}
}
