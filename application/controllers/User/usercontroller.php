<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller
{
 public function __construct()
 {
 parent::__construct();
 $this->load->database();
 $this->load->helper('url');
 }

 public function index()
 {
 if($this->input->post('register'))
 {
 //first check user's email id already exists or not
$query=$this->db->get_where("student",array('email'=>$this->input->post('email')));

//count number of matching rows
$row=$query->num_rows();

 if($row)
 {
 $data['error']="<h3 style='color:red'>This user already exists</h3>";
 }
 else
 {
 $data=array('student_id'=>'',
 'name'=>$this->input->post('name'),
 'email'=>$this->input->post('email'),
 'password'=>$this->input->post('pass'),
 'mobile'=>$this->input->post('mobile'),
 'course'=>$this->input->post('course'));

 $this->db->insert('student',$data);

 $data['error']="<h3 style='color:blue'>Your account created successfully</h3>";
 }

   }
 $this->load->view('student_registration', @$data);
 }

}
?>
