

<?php

/*
 * webprepration.com
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Login extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $session = $this->session->userdata('is_loggged_in');
        $this->load->database();
        $this->load->library('session');
        $this->load->helper('url');
        $this->load->model('Loginmodel');
    }


    public function index() {

        if ($this->session->userdata('user_id'))
            redirect(base_url('dashboard'));
        $this->load->helper('form');
        $this->load->view('admin/admin_login');
    }

    public function admin_login() {
        $this->load->library('form_validation');
        if ($this->form_validation->run('admin_login')) {
            $username = $this->input->post('username');
            $password = $this->input->post('password');

            $this->load->model('loginmodel');
            $login_id = $this->loginmodel->login_valid($username, $password);
            if ($login_id) {
                $this->session->set_userdata('user_id', $login_id);
                redirect(base_url('admin/dashboard'));
            } else {

                $this->session->set_flashdata('login_failed', 'Invalid Username/Password');
                redirect(base_url('login'));
            }
        } else {
            $this->load->view('admin/admin_login',@$data);
        }
    }

    public function logout() {
        $this->session->unset_userdata('user_id');
        redirect(base_url('login'));
    }

}
