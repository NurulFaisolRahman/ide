<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Surveyor extends CI_Controller {
  
  function __construct(){
		parent::__construct();
		if(!$this->session->userdata('Surveyor')){
			redirect(base_url('IDE/Surveyor'));
		}
  } 
  
  public function Profil(){
    $Data['Halaman'] = 'Profil';
    $Data['Surveyor'] = $this->db->get_where('Surveyor', array('NIK' => $this->session->userdata('NIK')))->row_array(); 
    $this->load->view('Surveyor/Header',$Data);
    $this->load->view('Surveyor/Profil',$Data);
  }
  
  public function Survei(){
    $Data['Halaman'] = 'Survei';
    $this->load->view('Surveyor/Header',$Data);
    $this->load->view('Surveyor/Survei',$Data);
  }
}