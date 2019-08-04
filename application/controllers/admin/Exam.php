<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/*class Exam extends CI_Controller {

 public function __construct() {

   parent::__construct();

   // load base_url
   $this->load->library('session');
   $this->load->helper('url');
   $this->load->library('form_validation');
   //$this->load->helper('form');
   //$this->load->helper('form_validation');


   $this->load->database();
   $this->load->model('Exammodel');
   $this->load->view('admin/exam');

 }

 public function index(){

   $query = $this->db->get('geography');
   $data['records'] = $query->result();
   $this->load->helper('url');
   $this->load->view('admin/exam',$data);
   //$this->load->library('form_validation');


 }

 public function exam_registration(){

 if ($this->input->post('submit'))
   {
 $q=$this->input->post('question');
 $c1=$this->input->post('choice1');
 $c2=$this->input->post('choice2');
 $c3=$this->input->post('choice3');
 $a=$this->input->post('answer');
     //$this->db->select('*');
     //$this->db->from('geography');
     //$data = array('txt_question' => $this->input->post('question'),'txt_choice1' => $this->input->post('choice1'),'txt_choice2' => $this->input->post('choice2'),'txt_choice3' => $this->input->post('choice3'),'txt_answer' => $this->input->post('answer'));
     //$this->Exammodel->ExamRegistration($data);

     $que = $this->db->query("SELECT * FROM  geography where question='".$q."'");
     $row = $que->num_rows();
     if ($row)
     {
       $data['error']="<h3 style='color:red'>This is invalid details</h3>";
     }
     else{
       $que=$this->db->query("insert * into geography values('','$q','$c1','$c2','$c3','$a')");

       $data['error']="<h3 style='color:blue'>Your question created successfully</h3>";
     }
     //$this->load->view('admin/exam.php,$data');
   }


   }

/*function exam_registration()
{
  $this->load->view('admin/exam',@$data);
}



  //$this->load->view('admin/exam',$data);


}
*/
class Exam extends CI_Controller {

        public function index()
        {
                $this->load->helper(array('form', 'url'));
                $this->load->model('admin/Exammodel');

                $this->load->library('form_validation');
                $this->form_validation->set_rules('question', 'question', 'required');
                $this->form_validation->set_rules('choice1', 'choice1', 'required');
                $this->form_validation->set_rules('choice2', 'choice2', 'required');
                $this->form_validation->set_rules('choice3', 'choice3', 'required');
                $this->form_validation->set_rules('answer', 'answer', 'required');
                //$this->form_validation->set_rules('username', 'Username', 'required');


                if ($this->form_validation->run() == FALSE)
                {
                        $this->load->view('admin/exam');
                }
                else
                {
                        $this->load->view('admin/formsuccess');
                }
        }
}



?>
