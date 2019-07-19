<?php

/*
 * webprepration
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Registrationmodel extends CI_Model {

  function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function registration_valid($username, $password) {

        $password = md5($password);
        $q = $this->db->where(['admin_name' => $admin_name, 'admin_password' => $admin_password])
                ->get('admin');
        if ($q->num_rows) {

            return $q->row()->id;
              #return TRUE .... ;
        } else {
            return FALSE;
        }
    }

}
