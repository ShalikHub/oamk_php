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
    public function quizdisplay()
    	{
    		$this->load->model('questionmodel');
    		$this->data['questions'] = $this->quizmodel->getQuestions();
    		$this->load->view('play_quiz', $this->data);
    	}
    		public function resultdisplay()
    	{
    		$this->data['checks'] = array(
    		     'ques1' => $this->input->post('quizid1'),
    		     'ques2' => $this->input->post('quizid2'),
    			 'ques3' => $this->input->post('quizid3'),
    			 'ques4' => $this->input->post('quizid4'),
    		     'ques5' => $this->input->post('quizid5'),
    			 'ques6' => $this->input->post('quizid6'),
    			 'ques7' => $this->input->post('quizid7'),
    			 'ques8' => $this->input->post('quizid8'),
    		     'ques9' => $this->input->post('quizid9'),
    			 'ques10' => $this->input->post('quizid10'),
    		);
            $this->load->model('questionmodel');
    		$this->data['results'] = $this->getQuestionsmodel->getQuestions();
    		$this->load->view('result_display', $this->data);
    	}
    }

 ?>
