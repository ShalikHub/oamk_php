<?php

public function Exam(){
    $this->load->helper('form');
    $this->load->library('form_validation');

    $data['title'] = 'Create a Exam';

    $this->form_validation->set_rules('title', 'Title', 'required');
    $this->form_validation->set_rules('question', 'question', 'required');

    if ($this->form_validation->run() === FALSE)
    {
        $this->load->view('templates/header', $data);
        $this->load->view('admin/Exam');
        $this->load->view('templates/footer');

    }
    else
    {
        $this->news_model->set_news();
        $this->load->view('admin/success');
    }
}

?>
