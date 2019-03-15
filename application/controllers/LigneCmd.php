<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class LigneCmd extends CI_Controller {

		function loadView($view, $data = array()) {

			$this->load->view('header', $data);
			$this->load->view($view, $data);
			$this->load->view('footer', $data);

		}

		public function index() {

			$this->loadView('lignecomandsv');

		}

		public function ajouter() {

			$this->load->model('Lignecmdm');
			$Lcmd = array(
				"IdP"=>$this->input->post("IdP"),
				"IdF"=>$this->input->post("Idf"),
				"PrixUni"=>$this->input->post("prixU"),
				"Qtt"=>$this->input->post("Qtt"),
				"DateCmd"=>$this->input->post("DCom"),
				"PrixAch"=>$this->input->post("PrixAch"),
				"PrixVent"=>$this->input->post("PrixVen"),
				

			);
			$this->load->model('Produitm');
			$this->Produitm->E_Product($this->input->post("IdP"),array(
				"QuteP"=>$this->input->post("Qtt"),
				"PrixAchat"=>$this->input->post("PrixAch"),
				"PrixVent"=>$this->input->post("Prixven"),
			));
			
			//var_dump($this->input->post("PrixAch"));
			$this->Lignecmdm->insertLignecmd($Lcmd);
			redirect(base_url('index.php/Produitc'));
		}

		public function Modifier() {



		}

		public function Suprimer() {



		}

	}