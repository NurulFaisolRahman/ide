<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class IDE extends CI_Controller {

	public function index(){
		$this->load->view('Survei');
	}

	public function Admin(){
    if($this->session->userdata('Admin')){
			redirect(base_url('Admin/Surveyor'));
		} else{
      $this->load->view('Admin/SignIn');
    }
	}
	
	public function AdminSignIn(){ 
    $Password = '$2y$10$tgJFrr038kzVlWS0ZFIFPOpe2iyUQHJYTz7EqGs6tFG5Z3o17UFoC';
    if ($_POST['Username'] == 'admin') {
      if (password_verify($_POST['Password'], $Password)) {
        $Session = array('Admin' => true);
        $this->session->set_userdata($Session);
        echo '1';
      }
      else {
        echo 'Password Salah!';
      }
    }
    else {
      echo 'Username Salah!';
    }
  }
  
  public function AdminSignOut(){
		$this->session->sess_destroy();
		redirect(base_url('IDE/Admin'));
	}
}
