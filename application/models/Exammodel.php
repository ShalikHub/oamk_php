<?php
defined('BASEPATH') OR exit('No direct script access allowed');


Class Exammodel extends CI_Model{

  function __construct(){

    parent:: __construct();
  }
    //this function is for inserting the records
    public function insert($data){
      if($this->db->insert("geography",$data))
      return true;


    }
     //this function for the delete
    public function delete($question_id){
      if($this->db->delete("geography","question_id=".$question_id))
      return true;
    }
  //this function is for the updating




  Public function ExamRegistration($data){
    $this->question = $_POST['question'];
    $this->choice1 = $_POST['choice1'];
    $this->choice2 = $_POST['choice2'];
    $this->choice3 = $_POST['choice3'];
    $this->answer = $_POST['answer'];

   $query=$this->db->insert('geography',$data);
 }
}

?>
