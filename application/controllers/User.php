<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

    public function index() {

        var_dump($this->session->userdata());

    }

    public function Login() {

        $this->load->library('form_validation');

        if($this->session->userdata('user')['logedin']) {

            redirect('/', 'location', 302);

        }

        $data['pageTitle'] = 'Login';

        $this->load->view('Login');

    } 

    public function Check() {

        $this->load->library('form_validation');

        $this->form_validation->set_rules("username", "Username", "required");
        $this->form_validation->set_rules("password", "Password", "required");

        $result = false;

        if(!$this->form_validation->run()) {

            redirect(base_url('index.php/User/Login'), 'location', 303);

            $data['pageTitle'] = 'Login';

            $this->loadView('Login', $data);

        } else {

            $this->load->model('Userm');
        
            $result = $this->Userm->CheckUser(
                $this->input->post('username'),
                $this->input->post('password')
            );
            
            if($result) {
                $user_data = array(
                    'user_id'   => $result[0]->id,
                    'username'  => $result[0]->username,
                    'email'     => $result[0]->email,
                    'logedin'   => true
                );
                $this->session->set_userdata('user', $user_data);
                redirect('/', 'location', 302);

            } else {

                //var_dump($result);
                redirect(base_url('index.php/User/Login'), 'location', 302);
                
                //echo '<pre><strong>Form Validation won\'t Work</strong></pre>';

            }
        }

    }

    public function Logout() {

        $this->session->unset_userdata('user');

        redirect('/User/Login');

    }

    /**
     * 
     *  Private function for reduce code
     * 
     */
    
    private function loadView($view = "Home", $data = array()) {

        $this->load->view($view);

    }

    public function Edite() {

        if($this->session->userdata('user')['logedin'])
            $this->loadView('UserEdite',array('pageTitle' => 'Modifier le Profile'));
        else 
            redirect( base_url('index.php/User/Login'));
    }

}