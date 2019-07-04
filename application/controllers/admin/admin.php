<?php
class Admin extends CI_Controller
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
 $n=$this->input->post('name');
 $e=$this->input->post('email');
 $p=$this->input->post('pass');


 $que=$this->db->query("select * from admin where email='".$e."'");
 $row = $que->num_rows();
 if($row)
 {
 $data['error']="<h3 style='color:red'>This user already exists</h3>";
 }
 else
 {
 $que=$this->db->query("insert into admin values('','$n','$e','$p')");

 $data['error']="<h3 style='color:blue'>Your account created successfully</h3>";
 }

 }
 $this->load->view('admin_registration',@$data);
 }


public function login()
{

if($this->input->post('login'))
{
$e=$this->input->post('email');
$p=$this->input->post('pass');

$que=$this->db->query("select * from admin where email='".$e."' and password='$p'");
$row = $que->num_rows();
if($row)
{
redirect('admin/dashboard');
}
else
{
$data['error']="<h3 style='color:red'>Invalid login details</h3>";
}
}
$this->load->view('admin_login',@$data);
}

function dashboard()
{
$this->load->view('admin/dashboard');
}
}
?>
