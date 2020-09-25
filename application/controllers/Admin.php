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
  
  public function SurveiEkraf(){ 
    $Data['Halaman'] = 'Survei Ekraf'; 
    $Data['Provinsi'] = $this->db->query("SELECT * FROM `KodeWilayah` WHERE length(Kode) = 2")->result_array();
    $Data['Kabupaten'] = $this->db->query("SELECT * FROM `KodeWilayah` WHERE Kode LIKE '11.%' AND length(Kode) = 5")->result_array();
    $Data['Kecamatan'] = $this->db->query("SELECT * FROM `KodeWilayah` WHERE Kode LIKE '11.01.%' AND length(Kode) = 8")->result_array();
    $Data['Desa'] = $this->db->query("SELECT * FROM `KodeWilayah` WHERE Kode LIKE '11.01.01.%'")->result_array();
    $this->load->view('Admin/Header',$Data);
    $this->load->view('Admin/SurveiEkraf',$Data);
  }

  function Kabupaten(){
    $Kabupaten = $this->db->query("SELECT * FROM `KodeWilayah` WHERE Kode LIKE "."'".$_POST['Kode'].".%"."' AND length(Kode) = 5")->result_array();
    $OpsiKabupaten = "";
    foreach ($Kabupaten as $key) {
      $OpsiKabupaten .= "<option value='".$key['Kode']."'>".$key['Nama']."</option>";
    }
    echo $OpsiKabupaten;
  }
  
  function Kecamatan(){
    $Kecamatan = $this->db->query("SELECT * FROM `KodeWilayah` WHERE Kode LIKE "."'".$_POST['Kode'].".%"."' AND length(Kode) = 8")->result_array();
    $OpsiKecamatan = "";
    foreach ($Kecamatan as $key) {
      $OpsiKecamatan .= "<option value='".$key['Kode']."'>".$key['Nama']."</option>";
    }
    echo $OpsiKecamatan;
  }

  function Desa(){
    $Desa = $this->db->query("SELECT * FROM `KodeWilayah` WHERE Kode LIKE "."'".$_POST['Kode'].".%"."'")->result_array();
    $OpsiDesa = "";
    foreach ($Desa as $key) {
      $OpsiDesa .= "<option value='".$key['Kode']."'>".$key['Nama']."</option>";
    }
    echo $OpsiDesa;
  }
}
