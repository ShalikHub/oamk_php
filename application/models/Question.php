<<?php
 class Question extends CI_Model{

   public function Create_questions(){
    $query->$this->db->get('geography');

    if($query->num_rows()>0 ) {
      return $query->row();
    }

   }
 }

 ?>
