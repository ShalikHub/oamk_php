<?php
class Test extends CI_controller{

  function ___construct(){
    parent::__construct();
    $this->load->database(); //loading database
    $this->load->model('TestModel'); //model load
  }

  public function index(){
    $this->data['tests'] = $this->TestModel->gettest();
    $this->load->view('test', $this->data);
  }
}


 ?>
