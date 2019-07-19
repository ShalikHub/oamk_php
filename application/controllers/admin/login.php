

<?php

/*
 * webprepration.com
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Login extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $session = $this->session->userdata('is_loggged_in');
        $this->load->database();
        $this->load->library('session');
        $this->load->helper('url');
        #$this->load->model('Loginmodel');
        #$this->load->model('Registrationmodel');
    }

    public function index()
    {

if ($this->input->post('admin_registration'))
{
  $n=$this->input->post('admin_name');
  $p=$this->input->post('$admin_password');

  $que=$this->db->query("select * from admin where admin_name='".$n."'");

  $row = $que->num_rows();
 if($row)
 {
 $data['error']="<h3 style='color:red'>This user already exists</h3>";
 }
 else
 {
 $que=$this->db->query("insert into admin values('','$n','$p')");

 $data['error']="<h3 style='color:blue'>Your account created successfully</h3>";
 }

 }
 $this->load->view('admin/admin_registration',@$data);
 }


public function admin_login()

{
  if($this->input->post('admin_login'))
  {
    $n=$this->input->post('admin_name');
    $p=$this->input->post('$admin_password');

    $que=$this->db->query("select * from admin where admin_name='".$n."' and admin_password='$p'");
    $rows = $que->num_rows();
    if ($rows)
    {
      redirect('admin/dashboard');

    }
    else
    {
      $data['error']="<h3 style='color:red'>invalid login details</h3>";
    }
  }

  $this->load->view('admin/admin_login',@$data);
}

function dashboard()
{
  $this->load->view('admin/dashboard_view');
}
}



/*
    public function index() {

        if ($this->session->userdata('is_loggged_in'))
            redirect(base_url('dashboard'));
        $this->load->helper('form');
        $this->load->view('admin/admin_login');
    }

    Public function admin_register() {
      $this->load->library('form_validation');
      if ($this->form_validation->run('admin_registration')) {
        $username = $this->input->post('admin_name');
        $password = $this->input->post('admin_password');

        $this->load->model('Registrationmodel');
        $registration_id = $this->Registrationmodel->registration_valid($adminname, $adminpassword);
        if ($registration_id) {
            $this->session->set_userdata('user_id', $registration_id);
            redirect(base_url('admin/dashboard'));
        } else {

            $this->session->set_flashdata('registration_failed', 'Invalid Username/Password');
            redirect(base_url('login'));
        }
    } else {
        $this->load->view('admin/admin_registration',@$data);
    }
}




    public function admin_login() {
        $this->load->library('form_validation');
        if ($this->form_validation->run('admin_login')) {
            $admin_name = $this->input->post('admin_name');
            $admin_password = $this->input->post('admin_password');

            $que=$this->db->query("select * from admin where admin_name='$admin_name' and password='$admin_password'");
            $row = $que->num_rows();

            $this->load->model('loginmodel');
            $login_id = $this->loginmodel->login_valid($admin_name, $admin_password);
            if ($login_id) {
                $this->session->set_userdata('user_id', $login_id);
                redirect(base_url('admin/dashboard'));
            } else {

                $this->session->set_flashdata('login_failed', 'Invalid Username/Password');
                redirect(base_url('login'));
            }
        } else {
            $this->load->view('admin/admin_login',@$data);
        }
    }

    public function logout() {
        $this->session->unset_userdata('user_id');
        redirect(base_url('login'));
    }
    function dashboard()
    {
    $this->load->view('admin/dashboard');
    }
    }
    */
?>
