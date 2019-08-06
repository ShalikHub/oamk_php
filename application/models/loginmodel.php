<?php

/*
 * webprepration
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

Class Loginmodel extends CI_Model {

  public function login_valid($username, $password)
  {
    //
    $password = md5($password);
    $q = $this->db->where(['username'=>$username,'password'=>$password])
                  ->get('admin');



    if ($q->num_rows) {

        return $q->row()->id;
      //return TRUE;
     } else {
         return FALSE;
     }
    }


    
}


   //return TRUE;

    //$this->db->query('SELECT * FROM admin where username * $username and password * $password');

    //count($q->rows)

    ?>
