<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class TestModel extends CI_Model {

  function gettest(){
    $this->db->select("question,choice1,choice2,choice3,answer");
    $this->db->from("geography");
    $query = $this->db->get();

    return $query->result();

    $number_data_return = $query->num_rows;

    if ($number_data_return < 1) {

      echo "there is no data entered in database";

      exit();
    }

  }

function displaytest()
{
  $query = $this->db->query("select * from geography");
  return $query->result();
}


}




 ?>
