<?php

class TestModel extents CI_Model{

  function gettest(){
    $this->db->select("question,choice1,choice2,choice3,answer");
    $this->db->from('geography');
    $query = $this->db->get();
    return $query->result();
  }



}




 ?>
