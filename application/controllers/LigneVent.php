<?php
    defined('BASEPATH') OR exit('No direct script access allowed');


class LigneVent extends CI_Controller
{

    public function __construct() {

        parent::__construct();
        is_logged_in();

    }


    public function index() {



    }

    public function Store() {

        $this->load->model('LigneVentm');
        $this->load->model('Clientm');
        $this->load->model('Produitm');
        
        $idVent = $this->LigneVentm->insertVent(array(

            'IdC'       =>  $this->input->post('IdC'),
            'dateVent'  =>  getdate()[0]

        ));
        for($i = 0; $i < sizeof($this->input->post('IdP')); $i++) {
            $this->LigneVentm->insertLigneVent(array(
                'IdVent'     =>  $idVent,
                'IdP'        =>  $this->input->post('IdP')[$i],
                'Qtt'        =>  $this->input->post('Qtt')[$i],
                'PrixHT'     =>  $this->input->post('PrixHT')[$i],
                'PrixTTC'    =>  $this->LigneVentm->CalculPrixTTC($this->input->post('PrixHT')[$i])
            ));
            $this->Produitm->DecrimentQtt($this->input->post('IdP')[$i], $this->input->post('Qtt')[$i]);
        }

        $LigneVent = $this->LigneVentm->getLigneVentByIdVent($idVent);
        $data['Client'] = $this->Clientm->getclnt($this->input->post('IdC'));
        $data["LigneVent"] = $LigneVent;
        $this->load->view('facture', $data);
    }

}