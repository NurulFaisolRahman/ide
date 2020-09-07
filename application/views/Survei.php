<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <!-- <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <title>Survei</title>
  </head>
  <body>
    <div class="container-fluid mt-1">
      <div class="row">
        <div class="col-sm-auto">
    	    <div class="card border-success">
            <div class="card-header bg-warning border-success"><b>Lokasi Responden</b></div>
            <div class="container-fluid">
              <div class="row">
                <div class="col-sm-auto">
                  <div class="input-group my-1">
                    <div class="input-group-prepend">
                      <label class="input-group-text bg-warning text-dark"><b>Kecamatan</b></label>
                    </div>
                    <select class="custom-select" id="Kecamatan">                    
                      <option value=""></option>
                    </select>
                  </div>
                  <div class="input-group my-1">
                    <div class="input-group-prepend">
                      <label class="input-group-text bg-warning text-dark"><b>Desa/Kelurahan</b></label>
                    </div>
                    <select class="custom-select" id="Desa">                    
                      <option value=""></option>
                    </select>
                  </div>
                  <div class="input-group mb-1">
                    <div class="input-group-prepend">
                      <label class="input-group-text bg-warning text-dark"><b>Alamat</b></label>
                    </div>
                    <input class="form-control" type="text" id="Alamat" placeholder="Jalan/Gang, RT/RW, Dusun">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
      <div class="col-sm-auto mt-1">
          <div class="card border-success">
            <div class="card-header bg-warning border-success"><b>Anggota Rumah Tangga</b></div>
            <div class="container-fluid">
              <div class="row">
                <div class="col-sm-auto">
                  <div class="input-group my-1">
                    <div class="input-group-prepend">
                      <label class="input-group-text bg-warning text-dark"><b>Nama Anggota</b></label>
                    </div>
                    <input class="form-control" type="text" id="NamaAnggota">
                  </div>
                  <div class="input-group my-1">
                    <div class="input-group-prepend">
                      <label class="input-group-text bg-warning text-dark"><b>Status Anggota</b></label>
                    </div>
                    <input class="form-control" type="text" id="StatusAnggota">
                  </div>
                  <div class="input-group mb-1">
                    <div class="input-group-prepend">
                      <label class="input-group-text bg-warning text-dark"><b>Jenis Kelamin</b></label>
                    </div>
                    <select class="custom-select" id="Gender">                    
                      <option value="">Laki-laki</option>
                      <option value="">Perempuan</option>
                    </select>
                  </div>
                  <div class="input-group mb-1">
                    <div class="input-group-prepend">
                      <label class="input-group-text bg-warning text-dark"><b>Usia</b></label>
                    </div>
                    <input class="form-control" type="text" id="Usia">
                  </div>
                  <div class="input-group mb-1">
                    <div class="input-group-prepend">
                      <label class="input-group-text bg-warning text-dark"><b>Pendapatan Bersih Per Bulan</b></label>
                    </div>
                    <input class="form-control" type="text" id="Pendapatan">
                  </div>
                  <div class="input-group mb-1">
                    <div class="input-group-prepend">
                      <label class="input-group-text bg-warning text-dark"><b>Pekerjaan</b></label>
                    </div>
                    <select class="custom-select" id="Pekerjaan">                    
                      <option value="1">Pegawai level bawah (staff, Pegawai negeri gol II, Tentara gol letnan bawah)</option>
                      <option value="2">Pegawai golongan menengah (Kabag, Manager, Direktur, PNS gol III Keatas, Tentara Pangkat Kapten Keatas, Dosen)</option>
                      <option value="3">Profesional (Dokter, Pengacara, Notaris, Seniman dll)</option>
                      <option value="4">Wiraswasta / Pedagang Besar (Karyawan > 10 orang)</option>
                      <option value="5">Wiraswasta / Pedagang Besar (Karyawan > 10 orang)</option>
                      <option value="6">Mahasiswa / Pelajar</option>
                      <option value="7">Pekerja Terlatih (Salesman, Teknisi, montir, Tukang bangunan, tukang kayu, dll)</option>
                      <option value="8">Pekerjaan tidak terlatih (Buruh tani, tukang becak, penjaga toko dll)</option>
                      <option value="9">Pemilik usaha (Petani, petambak, Peternak dll)</option>
                      <option value="10">Pensiunan</option>
                      <option value="11">Tidak Bekerja</option>
                    </select>
                  </div>
                  <div class="input-group mb-1">
                    <div class="input-group-prepend">
                      <label class="input-group-text bg-warning text-dark"><b>Pertolongan Saat Di Lahirkan</b></label>
                    </div>
                    <select class="custom-select" id="PertolonganKelahiran">                    
                      <option value="1">Dokter</option>
                      <option value="2">Bidan</option>
                      <option value="3">Tenaga Medis Lainnya</option>
                      <option value="4">Dukun Bersalin</option>
                      <option value="5">Family</option>
                      <option value="6">lainnya</option>
                    </select>
                  </div>
                  <div class="input-group mb-1">
                    <div class="input-group-prepend">
                      <label class="input-group-text bg-warning text-dark"><b>Pernah diberi ASI</b></label>
                    </div>
                    <select class="custom-select" id="Asi">                    
                      <option value="1">Ya</option>
                      <option value="2">Tidak</option>
                    </select>
                  </div>
                  <div class="input-group mb-1">
                    <div class="input-group-prepend">
                      <label class="input-group-text bg-warning text-dark"><b>Pernah mendapat Imunisasi</b></label>
                    </div>
                    <select class="custom-select" id="Imunisasi">                    
                      <option value="1">Ya</option>
                      <option value="2">Tidak</option>
                    </select>
                  </div>
                  <div class="input-group mb-1">
                    <div class="input-group-prepend">
                      <label class="input-group-text bg-warning text-dark"><b>Memiliki Kartu jaminan Kesehatan</b></label>
                    </div>
                    <select class="custom-select" id="KJK">                    
                      <option value="0">NA</option>
                      <option value="1">BPJS</option>
                      <option value="2">Jamkesda</option>
                      <option value="3">Asuransi Swasta</option>
                      <option value="4">lainnya</option>
                    </select>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script src="bootstrap/js/jquery.min.js"></script>
    <script src="bootstrap/js/popper.min.js" ></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript">
      $(document).ready(function(){

        var Kecamatan = document.getElementById("Kecamatan")
        $.getJSON("https://dev.farizdotid.com/api/daerahindonesia/kecamatan?id_kota=3510", function(result){
          Kecamatan.length = 1
          $.each(result, function(i, field){
            $.each(field, function(j,data){
              Kecamatan.options[j]=new Option(data.nama,data.id)
            })
          })
        })

        var Desa = document.getElementById("Desa")
        $.getJSON("https://dev.farizdotid.com/api/daerahindonesia/kelurahan?id_kecamatan=3510010", function(result){
          Desa.length = 1
          $.each(result, function(i, field){
            $.each(field, function(j,data){
              Desa.options[j]=new Option(data.nama,data.id)
            })
          })
        })

        $("#Kecamatan").change(function(){
          var Kecamatan = $("#Kecamatan").val();
          var Desa = document.getElementById("Desa")
          $.getJSON("https://dev.farizdotid.com/api/daerahindonesia/kelurahan?id_kecamatan="+Kecamatan, function(result){
            Desa.length = 1
            $.each(result, function(i, field){
              $.each(field, function(j,data){
                Desa.options[j]=new Option(data.nama,data.id)
              })
            })
          })
        })
      })
    </script>
  </body>
</html>