<?php
class Test extends CI_controller{

  function ___construct(){
    parent::__construct();
    $this->load->database(); //loading database
    $this->load->model('TestModel'); //model load
    $this->load->helper('url');

  }

  public function gettest(){
    $this->load->model('TestModel');
    $this->data['tests'] = $this->TestModel->gettest();
    $this->load->view('test', @$data);
  }

  public function displaytest(){
    $this->load->model('TestModel');
    $result['tests']=$this->TestModel->displaytest();
    $this->load->view('test',$result);
  }
}


 ?>
