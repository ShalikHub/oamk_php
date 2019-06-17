<<?php
class Question extends CI_Controller{

  public function index() {

      if ($this->session->userdata('user_id'))
          redirect(base_url('dashboard'));
      $this->load->helper('form');
      $this->load->view('admin_login');

    }

    public function Question()
    {
      $this->load->model('Question')
      $records = $this->Question->Create_questions();
      echo '<pre>';
          print_r($records);
      echo '<pre>'
      $this->load->view('admin/dashboard', ['records'=>$records])
   }
  }
}

 ?>
