<<<<<<< HEAD
<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    function is_logged_in() {
        // Get current CodeIgniter instance
        $CI =& get_instance();
        // We need to use $CI->session instead of $this->session
        $user = $CI->session->userdata('user');

        if(!$user) {

            redirect(base_url('index.php/User/Login'));

        }
=======
<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    function is_logged_in() {
        // Get current CodeIgniter instance
        $CI =& get_instance();
        // We need to use $CI->session instead of $this->session
        $user = $CI->session->userdata('user');

        if(!$user) {

            redirect(base_url('index.php/User/Login'));

        }
>>>>>>> ea634bc0baeb4d4688a09ea8485989506d1a03b1
    }