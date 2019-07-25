<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ExamController extends CI_Controller {

 public function __construct() {

   parent::__construct();

   // load base_url
   //$this->load->library('session');
   $this->load->helper('url');
   $this->load->helper('form');
   $this->load->databse();
   $this->load->model('admin/Exammodel');

 }

 public function exam_registration(){
   $data = array('question' => $this->input->post('question'),'choice 1' => $this->input->post('choice 1'),'choice 2' => $this->input->post('choice 2'),'choice 3' => $this->input->post('choice 3'),'answer' => $this->input->post('answer'));
   $this->Exammodel->ExamRegistration($data);

   }


}
$this->load->view('admin/exam',@$data);
}



   //$this->load->view('admin/Exam',@$data);


}

?>
