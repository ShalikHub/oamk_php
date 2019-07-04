<<?php
class Question extends CI_Controller{

  function __construct() {
		parent::__construct();
		$this->load->database();
	}

  public function index() {

      if ($this->session->userdata('user_id'))
          redirect(base_url('dashboard'));
      $this->load->helper('form');
      $this->load->view('admin_login');

    }
  

 ?>
