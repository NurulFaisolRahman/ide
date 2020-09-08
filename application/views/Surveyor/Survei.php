<div class="content-wrapper">
      <!-- Main content -->
        <section class="content">
          <div class="container-fluid border border-warning rounded bg-light mt-2">
            <div class="row">
              <div class="col-sm-3 my-1">
                <div class="input-group">
                  <div class="input-group-prepend">
                    <label class="input-group-text bg-warning text-dark"><b>KK</b></label>
                  </div>
                  <input class="form-control" type="text" id="NomorKK" placeholder="Nomor KK">
                </div>
              </div> 
              <div class="col-sm-3 my-1">
                <div class="input-group">
                  <div class="input-group-prepend">
                    <label class="input-group-text bg-warning text-dark"><b>Kecamatan</b></label>
                  </div>
                  <select class="custom-select" id="Kecamatan">  
                    <?php foreach ($Kecamatan as $key) { ?>
                      <option value="<?=$key['Kode']?>"><?=$key['Nama']?></option>
                    <?php } ?>                  
                  </select>
                </div>
              </div>
              <div class="col-sm-3 my-1">
                <div class="input-group">
                  <div class="input-group-prepend">
                    <label class="input-group-text bg-warning text-dark"><b>Desa/Kelurahan</b></label>
                  </div>
                  <select class="custom-select" id="Desa">                    
                    <?php foreach ($Desa as $key) { ?>
                      <option value="<?=$key['Kode']?>"><?=$key['Nama']?></option>
                    <?php } ?>                  
                  </select>
                </div>
              </div>
              <div class="col-sm-3 my-1">
                <div class="input-group">
                  <div class="input-group-prepend">
                    <label class="input-group-text bg-warning text-dark"><b>Alamat</b></label>
                  </div>
                  <input class="form-control" type="text" id="Alamat" placeholder="Jl/Gg, RT/RW, Dusun">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-12">
                <div class="table-responsive my-1">
                  <table id="TabelSurveyor" class="table table-bordered table-striped">
                    <thead class="bg-primary">
                      <tr>
                        <th class="text-center align-middle">No</th>
                        <th class="align-middle">Nama</th>
                        <th class="align-middle">Status</th>
                        <th class="align-middle">Jenis Kelamin</th>
                        <th class="align-middle">Usia</th>
                        <th class="text-center align-middle">Aksi</th>
                      </tr>
                    </thead>
                    <tbody id="KK"></tbody>
                  </table>
                </div> 
              </div>
            </div>
            <div class="row">
              <div class="col-sm-4 my-1">
                <div class="input-group">
                  <div class="input-group-prepend">
                    <label class="input-group-text bg-warning text-dark"><b>Nama Anggota</b></label>
                  </div>
                  <input class="form-control" type="text" id="NamaAnggota">
                </div>
              </div>
              <div class="col-sm-3 my-1">
                <div class="input-group">
                  <div class="input-group-prepend">
                    <label class="input-group-text bg-warning text-dark"><b>Status Anggota</b></label>
                  </div>
                  <select class="custom-select" id="StatusAnggota">                    
                    <option value="1">Suami</option>
                    <option value="2">Istri</option>
                    <option value="3">Anak Ke 1</option>
                    <option value="4">Anak Ke 2</option>
                    <option value="5">Anak Ke 3</option>
                    <option value="6">Anak Ke 4</option>
                    <option value="7">Anak Ke 5</option>
                    <option value="8">Anak Ke 6</option>
                    <option value="9">Anak Ke 7</option>
                    <option value="10">Anak Ke 8</option>
                    <option value="11">Anak Ke 9</option>
                    <option value="12">Anak Ke 10</option>
                    <option value="13">Anak Ke 11</option>
                    <option value="14">Anak Ke 12</option>
                  </select>
                </div>
              </div>
              <div class="col-sm-3 my-1">
                <div class="input-group">
                  <div class="input-group-prepend">
                    <label class="input-group-text bg-warning text-dark"><b>Jenis Kelamin</b></label>
                  </div>
                  <select class="custom-select" id="Gender">                    
                    <option value="">Laki-Laki</option>
                    <option value="">Perempuan</option>
                  </select>
                </div>
              </div>
              <div class="col-sm-2 my-1">
                <div class="input-group">
                  <div class="input-group-prepend">
                    <label class="input-group-text bg-warning text-dark"><b>Usia</b></label>
                  </div>
                  <input class="form-control" type="text" id="Usia">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-4 my-1">
                <div class="input-group">
                  <div class="input-group-prepend">
                    <label class="input-group-text bg-warning text-dark"><b>Pendapatan Bersih Per Bulan</b></label>
                  </div>
                  <input class="form-control" type="text" id="Pendapatan">
                </div>
              </div>
              <div class="col-sm-4 my-1">
                <div class="input-group">
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
              </div>
              <div class="col-sm-4 my-1">
                <div class="input-group">
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
              </div>
            </div>
            <div class="row">
              <div class="col-sm-5 my-1">
                <div class="input-group">
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
              <div class="col-sm-3 my-1">
                <div class="input-group">
                  <div class="input-group-prepend">
                    <label class="input-group-text bg-warning text-dark"><b>Pernah diberi ASI</b></label>
                  </div>
                  <select class="custom-select" id="Asi">                    
                    <option value="1">Ya</option>
                    <option value="2">Tidak</option>
                  </select>
                </div>
              </div>
              <div class="col-sm-4 my-1">
                <div class="input-group">
                  <div class="input-group-prepend">
                    <label class="input-group-text bg-warning text-dark"><b>Pernah mendapat Imunisasi</b></label>
                  </div>
                  <select class="custom-select" id="Imunisasi">                    
                    <option value="1">Ya</option>
                    <option value="2">Tidak</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-4 my-1">
                <div class="input-group">
                  <div class="input-group-prepend">
                    <label class="input-group-text bg-warning text-dark"><b>Partisipasi Sekolah</b></label>
                  </div>
                  <select class="custom-select" id="PartisipasiSekolah">                    
                    <option value="1">Tidak Sekolah</option>
                    <option value="2">Masih Sekolah</option>
                    <option value="3">Pernah Sekolah</option>
                  </select>
                </div>
              </div>
              <div class="col-sm-4 my-1">
                <div class="input-group">
                  <div class="input-group-prepend">
                    <label class="input-group-text bg-warning text-dark"><b>Pendidikan Tertinggi</b></label>
                  </div>
                  <select class="custom-select" id="PendidikanTertinggi">                    
                    <option value="1">SD/SDLB</option>
                    <option value="2">MI</option>
                    <option value="3">Paket A</option>
                    <option value="4">SMP/SMLB</option>
                    <option value="5">M.Ts</option>
                    <option value="6">Paket B</option>
                    <option value="7">SMA/SMLB</option>
                    <option value="8">MA</option>
                    <option value="9">SMK</option>
                    <option value="10">Paket C</option>
                    <option value="11">D1/D2</option>
                    <option value="12">D3</option>
                    <option value="13">D4/S1</option>
                    <option value="14">S2</option>
                    <option value="15">S3</option>
                  </select>
                </div>
              </div>
              <div class="col-sm-4 my-1">
                <div class="input-group">
                  <div class="input-group-prepend">
                    <label class="input-group-text bg-warning text-dark"><b>Ijazah Tertinggi</b></label>
                  </div>
                  <select class="custom-select" id="IjazahTertinggi">                    
                    <option value="1">Tdk Punya Ijazah</option>
                    <option value="2">SD/SDLB</option>
                    <option value="3">MI</option>
                    <option value="4">Paket A</option>
                    <option value="5">SMP/SMLB</option>
                    <option value="6">M.Ts</option>
                    <option value="7">Paket B</option>
                    <option value="8">SMA/SMLB</option>
                    <option value="9">MA</option>
                    <option value="10">SMK</option>
                    <option value="11">Paket C</option>
                    <option value="12">D1/D2</option>
                    <option value="13">D3</option>
                    <option value="14">D4/S1</option>
                    <option value="15">S2</option>
                    <option value="16">S3</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-3 my-1">
                <div class="input-group">
                  <div class="input-group-prepend">
                    <label class="input-group-text bg-warning text-dark"><b>Santri Aktif</b></label>
                  </div>
                  <select class="custom-select" id="Santri">                    
                    <option value="1">Ya</option>
                    <option value="2">Tidak</option>
                  </select>
                </div>
              </div>
              <div class="col-sm-3 my-1">
                <div class="input-group">
                  <div class="input-group-prepend">
                    <label class="input-group-text bg-warning text-dark"><b>Status Sekolah</b></label>
                  </div>
                  <select class="custom-select" id="Kelas">                    
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">Tamat</option>
                  </select>
                </div>
              </div>
              <div class="col-sm-3 my-1">
                <div class="input-group">
                  <div class="input-group-prepend">
                    <label class="input-group-text bg-warning text-dark"><b>Baca Tulis</b></label>
                  </div>
                  <select class="custom-select" id="BacaTulis">                    
                    <option value="1">Huruf Latin</option>
                    <option value="2">Huruf Arab</option>
                    <option value="3">Huruf Lain</option>
                    <option value="4">All</option>
                  </select>
                </div>
              </div>
              <div class="col-sm-3 my-1">
                <div class="input-group">
                  <div class="input-group-prepend">
                    <label class="input-group-text bg-warning text-dark"><b>SD</b></label>
                  </div>
                  <input class="form-control" type="text" id="SD" placeholder="Nama Sekolah/Lokasi">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-3 my-1">
                <div class="input-group">
                  <div class="input-group-prepend">
                    <label class="input-group-text bg-warning text-dark"><b>SMP</b></label>
                  </div>
                  <input class="form-control" type="text" id="SMP" placeholder="Nama Sekolah/Lokasi">
                </div>
              </div>
              <div class="col-sm-3 my-1">
                <div class="input-group">
                  <div class="input-group-prepend">
                    <label class="input-group-text bg-warning text-dark"><b>SMA</b></label>
                  </div>
                  <input class="form-control" type="text" id="SMA" placeholder="Nama Sekolah/Lokasi">
                </div>
              </div>
              <div class="col-sm-3 my-1">
                <div class="input-group">
                  <div class="input-group-prepend">
                    <label class="input-group-text bg-warning text-dark"><b>Kampus</b></label>
                  </div>
                  <input class="form-control" type="text" id="Universitas" placeholder="Nama Kampus/Lokasi">
                </div>
              </div>
              <div class="col-sm-3 my-1">
              <button type="button" class="btn btn-primary text-light" id="SimpanResponden"><i class="fa fa-plus"></i> <b>Simpan</b></button> 
              </div>
            </div>
          </div>
        </section>
      </div>
    </div>
    <script src="../bootstrap/js/jquery.min.js"></script>
    <script src="../bootstrap/js/popper.min.js" ></script>
    <script src="../bootstrap/js/bootstrap.min.js"></script>
    <script src="../bootstrap/js/adminlte.min.js"></script>
    <script type="text/javascript">
      $(document).ready(function(){
        
        var BaseURL = '<?=base_url()?>'
        
        $("#Kecamatan").change(function (){
          var Desa = { Kode: $("#Kecamatan").val() }
          $.post(BaseURL+"Surveyor/Desa", Desa).done(function(Respon) {
            $('#Desa').html(Respon)
          })    
        })

        var KK = []
        var Responden = {}
        Responden['Nama'] = $('#NamaAnggota').val()
        Responden['Status'] = $('#StatusAnggota').val()
        Responden['Gender'] = $('#Gender').val()
        Responden['Usia'] = $('#Usia').val()
        KK.push(Responden)	

        var	rows = '';
        $.each(KK.reverse(), function(key,value) {
          rows = rows + '<tr>';
          rows = rows + '<td class="text-center align-middle">'+(key+1)+'</td>';
          rows = rows + '<td class="align-middle">'+value.Nama+'</td>';
          rows = rows + '<td class="align-middle">'+value.Status+'</td>';
          rows = rows + '<td class="align-middle">'+value.Gender+'</td>';
          rows = rows + '<td class="align-middle">'+value.Usia+'</td>';
          rows = rows + '<td class="text-center align-middle">';
            rows = rows + '<button Edit="1" class="btn btn-sm btn-warning Edit"><i class="fas fa-edit"></i></button>';
            rows = rows + '<button Hapus="1" class="btn btn-sm btn-danger Hapus"><i class="fas fa-trash"></i></button>';
          rows = rows + '</td>';
          rows = rows + '</tr>';
        })
        $("#KK").html(rows);
      })
    </script>
  </body>
</html>