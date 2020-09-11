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
    $Data['Provinsi'] = $this->db->query("SELECT * FROM `KodeWilayah` WHERE length(Kode) = 2")->result_array();
    $Data['Kabupaten'] = $this->db->query("SELECT * FROM `KodeWilayah` WHERE Kode LIKE '11.%' AND length(Kode) = 5")->result_array();
    $Data['Kecamatan'] = $this->db->query("SELECT * FROM `KodeWilayah` WHERE Kode LIKE '11.01.%' AND length(Kode) = 8")->result_array();
    $Data['Desa'] = $this->db->query("SELECT * FROM `KodeWilayah` WHERE Kode LIKE '11.01.01.%'")->result_array();
    // $Data['Kecamatan'] = $this->db->query("SELECT * FROM `KodeWilayah` WHERE Kode LIKE '35.10.%' AND length(Kode) = 8")->result_array();
    // $Data['Desa'] = $this->db->query("SELECT * FROM `KodeWilayah` WHERE Kode LIKE '35.10.01.%'")->result_array();
    $this->load->view('Surveyor/Header',$Data);
    $this->load->view('Surveyor/Survei',$Data);
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