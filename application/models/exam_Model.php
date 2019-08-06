<?php
defined('BASEPATH') OR exit('No direct script access allowed');


Class Exam_Model extends CI_Model{

  /*

  //public //

  function __construct(){

    parent:: __construct();
  }
    //this function is for inserting the records

    public function insert_question(){
      $this->question = $_POST['question'];
      $this->choice1 = $_POST['choice1'];
      $this->choice2 = $_POST['choice2'];
      $this->choice3 = $_POST['choice3'];
      $this->answer = $_POST['answer'];

      $this->db->insert('geography', $this);
    }

    public function get_last_ten_entries(){
      $query = $this->db->get('geography', 10);
      return $query->result();


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
*/
function saverecords($question,$choice1,$choice2,$choice3,$answer)
{
  $query= "INSERT into geography values('','$question','$choice1','$choice2','$choice3','$answer')";
  $this->db->query($query);
}



}



?>
