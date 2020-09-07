<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class IDE extends CI_Controller {

	public function index(){
    echo password_hash('3512021507960004', PASSWORD_DEFAULT);
		// $this->load->view('Survei');
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

  public function Surveyor(){
    if($this->session->userdata('Surveyor')){
			redirect(base_url('Surveyor/Profil'));
		} else{
      $this->load->view('Surveyor/SignIn');
    }
  }
  
  public function SurveyorSignIn(){ 
    $Surveyor = $this->db->get_where('Surveyor', array('NIK' => htmlentities($_POST['NIK'])));
		if($Surveyor->num_rows() == 0){
			echo "NIK Salah!";
		}
		else{
			$Akun = $Surveyor->result_array();
			if (password_verify($_POST['Password'], $Akun[0]['Password'])) {
        $Session = array('Surveyor' => true,
                         'NIK' => $_POST['NIK'],
                         'Nama' => $Akun[0]['Nama']);
				$this->session->set_userdata($Session);
				echo '1';
			} else {
				echo "Password Salah!";
			}
		}
  }
  
  public function SurveyorSignOut(){
		$this->session->sess_destroy();
		redirect(base_url('IDE/Surveyor'));
	}
}
