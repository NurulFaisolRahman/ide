<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
  
  function __construct(){
		parent::__construct();
		if(!$this->session->userdata('Admin')){
			redirect(base_url('IDE/Admin'));
		}
  } 
  
  public function Surveyor(){
    $Data['Halaman'] = 'Surveyor';
    $Data['Surveyor'] = $this->db->get('Surveyor')->result_array();
    $this->load->view('Admin/Header',$Data);
    $this->load->view('Admin/Surveyor',$Data);
  }
  
  public function InputSurveyor(){
    if($this->db->get_where('Surveyor', array('NIK' => $_POST['NIK']))->num_rows() === 0){
      $this->db->insert('Surveyor',array('NIK' => htmlentities($_POST['NIK']),'Password' => password_hash($_POST['NIK'], PASSWORD_DEFAULT),'Nama' => $_POST['Nama']));
			echo '1';
    } else {
      echo 'NIK Sudah Ada!';
    }
  }

  public function EditSurveyor(){
    if($_POST['NIK'] === $_POST['NIKLama'] || ($this->db->get_where('Surveyor', array('NIK' => $_POST['NIK']))->num_rows() === 0 && $_POST['NIK'] != $_POST['NIKLama'])){			
			$this->db->where('NIK', $_POST['NIKLama']);
			$this->db->update('Surveyor',
											array('NIK' => $_POST['NIK'],
														'Nama' => $_POST['Nama']));
			echo '1';
		}
		else {
			echo 'NIK Sudah Ada!';
		}
  }
  
  public function HapusSurveyor(){
    $this->db->delete('Surveyor', array('NIK' => $_POST['NIK']));
		if ($this->db->affected_rows()){
			echo '1';
		} else {
			echo 'Gagal Menghapus';
		}
	}
}
