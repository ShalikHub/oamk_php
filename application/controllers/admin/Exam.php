<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

 public function __construct() {

   parent::__construct();

   // load base_url
   $this->load->library('session');
   $this->load->helper('url');
 }

 public function index(){
   $data = array();
   // Check form submit or not
   if($this->input->post('submit') != NULL ){

     // POST data
     $postData = $this->input->post();

     $data['response'] = $postData;

   }

   // load view
   $this->load->view('admin/Exam',$data);

 }

}
