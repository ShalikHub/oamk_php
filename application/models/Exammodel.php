<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Exammodel extends CI_Model{
  Public function ExamRegistration($data){
   $query=$this->db->insert('geography',$data);
 }
}

?>
