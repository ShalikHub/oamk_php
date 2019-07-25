<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Exam extends CI_Controller {

 public function __construct() {

   parent::__construct();

   // load base_url
   $this->load->library('session');
   $this->load->helper('url');
   $this->load->helper('form');
   //$this->load->helper('form_validation');

   $this->load->database();
   $this->load->model('Exammodel');

 }

 public function exam_registration(){
   if ($this->input->post('exam_registration'))
   {
     $this->db->select('*');
     $this->db->from('geography');
     $data = array('txt_question' => $this->input->post('question'),'txt_choice1' => $this->input->post('choice1'),'txt_choice2' => $this->input->post('choice2'),'txt_choice3' => $this->input->post('choice3'),'txt_answer' => $this->input->post('answer'));
     $this->Exammodel->ExamRegistration($data);

     $que = $this->db->query('select * from geography');
     $row = $que->num_rows();
     if ($row)
     {
       redirect('admin/exam');
     }
     else{
       $data['error']="<h3 style='color:red'>invalid details</h3>";
     }
     $this->load->view('admin/exam,@$data');
   }


   }

/*function exam_registration()
{
  $this->load->view('admin/exam',@$data);
}

*/



   //$this->load->view('admin/Exam',@$data);


}

?>
