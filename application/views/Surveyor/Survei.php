<div class="content-wrapper">
      <!-- Main content -->
        <section class="content">
          <div class="container-fluid border border-warning rounded bg-light mt-2">
            <div class="container-fluid border border-danger rounded bg-light my-1">
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
            </div>
            <div class="container-fluid border border-success rounded bg-light mb-1 mt-3">
            <div class="row">
              <div class="col-sm-12">
                <div class="table-resp'ons'ive mt-1">
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
                    <option value="1">Laki-Laki</option>
                    <option value="2">Perempuan</option>
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
                    <option value="4">SMP/SmlB</option>
                    <option value="5">M.Ts</option>
                    <option value="6">Paket B</option>
                    <option value="7">SMA/SmlB</option>
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
                    <option value="5">SMP/SmlB</option>
                    <option value="6">M.Ts</option>
                    <option value="7">Paket B</option>
                    <option value="8">SMA/SmlB</option>
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
            <div class="container-fluid border border-primary rounded bg-light mb-1 mt-3">
            <div class="row">
              <div class="col-sm-6 my-1">
                <div class="input-group">
                  <div class="input-group-prepend">
                    <label class="input-group-text bg-warning text-dark"><b>Usia Istri Saat Pernikahan Pertama</b></label>
                  </div>
                  <input class="form-control" type="text" id="UsiaMenikah">
                  <label class="input-group-text bg-warning text-dark"><b>Tahun</b></label>
                </div>
              </div> 
              <div class="col-sm-6 my-1">
                <div class="input-group">
                  <div class="input-group-prepend">
                    <label class="input-group-text bg-warning text-dark"><b>Jumlah Tahun Dalam Ikatan Pernikahan</b></label>
                  </div>
                  <input class="form-control" type="text" id="UsiaPernikahan">
                  <label class="input-group-text bg-warning text-dark"><b>Tahun</b></label>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-12">
                <div class="table-resp'ons'ive mt-1">
                  <table class="table table-bordered table-striped">
                    <thead class="bg-primary">
                      <tr>
                        <th class="text-center align-middle">No</th>
                        <th class="align-middle">Anak Ke</th>
                        <th class="align-middle">Anak Lahir Hidup</th>
                        <th class="align-middle">Anak Masih Hidup</th>
                        <th class="align-middle">Anak Sudah Meninggal</th>
                        <th class="align-middle">Usia</th>
                        <th class="text-center align-middle">Aksi</th>
                      </tr>
                    </thead>
                    <tbody id="Fertilitas"></tbody>
                  </table>
                </div> 
              </div>
            </div>
            <div class="row">
              <div class="col-sm-3 my-1">
                <div class="input-group">
                  <div class="input-group-prepend">
                    <label class="input-group-text bg-warning text-dark"><b>A.K Lahir Hidup</b></label>
                  </div>
                  <select class="custom-select" id="AnakLahirHidup">                    
                    <option value="1">Ya</option>
                    <option value="2">Tidak</option>
                  </select>
                </div>
              </div>
              <div class="col-sm-3 my-1">
                <div class="input-group">
                  <div class="input-group-prepend">
                    <label class="input-group-text bg-warning text-dark"><b>A.K Masih Hidup</b></label>
                  </div>
                  <select class="custom-select" id="AnakMasihHidup">                    
                    <option value="1">Ya</option>
                    <option value="2">Tidak</option>
                  </select>
                </div>
              </div>
              <div class="col-sm-3 my-1">
                <div class="input-group">
                  <div class="input-group-prepend">
                    <label class="input-group-text bg-warning text-dark"><b>A.K Sudah Wafat</b></label>
                  </div>
                  <select class="custom-select" id="AnakSudahMeninggal">                    
                    <option value="1">Ya</option>
                    <option value="2">Tidak</option>
                  </select>
                </div>
              </div>
              <div class="col-sm-3 my-1">
                <div class="input-group">
                  <div class="input-group-prepend">
                    <label class="input-group-text bg-warning text-dark"><b>Usia Anak</b></label>
                  </div>
                  <input class="form-control" type="text" id="UsiaAnak">
                  <button type="button" class="btn btn-primary text-light" id="SimpanFertilitas"><i class="fa fa-plus"></i> <b>Simpan</b></button>
                </div>
              </div>
            </div>
            </div>
            <div class="container-fluid border border-primary rounded bg-light mb-1 mt-3">
              <?php $Kesehatan = array('Dokter','Bidan Desa','Polides','Peralatan Persalinan','RS Swasta','Klinik Bersalin Swasta','Puskesmas',
                                       'Posyandu','Pemeriksaan Kehamilan','Vaksinasi','Pemberian Vitamin','Obat-Obatan','Biaya Persalinan'); 
              foreach ($Kesehatan as $key => $value) { ?>
                <div class="row">
                  <div class="col-sm-3 my-1">
                    <label class="input-group-text bg-primary text-dark justify-content-center"><b><?=$value?></b></label>
                  </div>
                  <div class="col-sm-auto my-1">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <label class="input-group-text bg-warning text-dark"><b>Ketercukupan</b></label>
                      </div>
                      <select class="custom-select" id="<?='KetercukupanKesehatan'.($key+1)?>">                    
                        <option value="1">Ya</option>
                        <option value="2">Tidak</option>
                      </select>
                      <div class="input-group-prepend">
                        <label class="input-group-text bg-warning text-dark"><b>Keterlayanan</b></label>
                      </div>
                      <select class="custom-select" id="<?='KeterlayananKesehatan'.($key+1)?>">                    
                        <option value="1">Ya</option>
                        <option value="2">Tidak</option>
                      </select>
                      <div class="input-group-prepend">
                        <label class="input-group-text bg-warning text-dark"><b>Prioritas Dikembangkan</b></label>
                      </div>
                      <select class="custom-select" id="<?='PrioritasKesehatan'.($key+1)?>">                    
                        <option value="1">Ya</option>
                        <option value="2">Tidak</option>
                      </select>
                    </div>
                  </div>
                </div>
              <?php }?>
              <div class="row">
                <div class="col-sm-auto my-1">
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <label class="input-group-text bg-warning text-dark"><b>Jelaskan Beberapa Kendala Dalam Mendapatkan Fasilitas Kesehatan</b></label>
                    </div>
                  </div>
                </div>
                <div class="col-sm-12 my-1">
                  <textarea id="KendalaKesehatan" rows="4" cols="119"></textarea>
                </div>    
              </div>
            </div>
            <div class="container-fluid border border-primary rounded bg-light mb-1 mt-3">
              <?php $Pendidikan = array('Gedung Sekolah','Ruang Kelas','Guru','Buku Pelajaran','Jarak','Sekolah Swasta','Biaya Sekolah'); 
              foreach ($Pendidikan as $key => $value) { ?>
                <div class="row">
                  <div class="col-sm-3 my-1">
                    <label class="input-group-text bg-primary text-dark justify-content-center"><b><?=$value?></b></label>
                  </div>
                  <div class="col-sm-auto my-1">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <label class="input-group-text bg-warning text-dark"><b>Ketercukupan</b></label>
                      </div>
                      <select class="custom-select" id="<?='KetercukupanPendidikan'.($key+1)?>">                    
                        <option value="1">Ya</option>
                        <option value="2">Tidak</option>
                      </select>
                      <div class="input-group-prepend">
                        <label class="input-group-text bg-warning text-dark"><b>Keterlayanan</b></label>
                      </div>
                      <select class="custom-select" id="<?='KeterlayananPendidikan'.($key+1)?>">                    
                        <option value="1">Ya</option>
                        <option value="2">Tidak</option>
                      </select>
                      <div class="input-group-prepend">
                        <label class="input-group-text bg-warning text-dark"><b>Prioritas Dikembangkan</b></label>
                      </div>
                      <select class="custom-select" id="<?='PrioritasPendidikan'.($key+1)?>">                    
                        <option value="1">Ya</option>
                        <option value="2">Tidak</option>
                      </select>
                    </div>
                  </div>
                </div>
              <?php }?>
              <div class="row">
                <div class="col-sm-auto my-1">
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <label class="input-group-text bg-warning text-dark"><b>Tingkat Pendidikan Maksimal Yang Bisa Diusahakan</b></label>
                    </div>
                    <select class="custom-select" id="KesanggupanPendidikan">                    
                      <option value="1">SD/Sederajat</option>
                      <option value="2">SMP/Sederajat</option>
                      <option value="3">SMA/Sederajat</option>
                      <option value="4">Diploma</option>
                      <option value="5">Sarjana</option>
                      <option value="6">Pasca Sarjana</option>
                    </select>
                  </div>
                </div>
                <div class="col-sm-auto my-1">
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <label class="input-group-text bg-warning text-dark"><b>Keluhan Pendidikan</b></label>
                    </div>
                    <select class="custom-select" id="KeluhanPendidikan">                    
                      <option value="1">Kurikulum Pendidikan</option>
                      <option value="2">Biaya Sekolah</option>
                      <option value="3">Ketersediaan Fasilitas Pendidikan</option>
                      <option value="4">Jarak Fasilitas Pendidikan</option>
                      <option value="5">Minat Bersekolah</option>
                    </select>
                  </div>
                </div>
              </div>
            </div>
            <div class="container-fluid border border-primary rounded bg-light mb-1 mt-3">
              <?php $Komoditas = array('Beras','Tepung terigu','Ketela pohon/singkong','Kentang','Tongkol/tuna/cakalang','Kembung','Bandeng','Mujair','Mas','Lele','Ikan segar lainnya','Daging sapi','Daging ayam ras','Daging ayam kampung','Telur ayam ras','Susu kental manis','Susu bubuk','Susu bubuk bayi','Bayam','Kangkung','Kacang panjang','Bawang merah','Bawang putih','Cabe merah','Cabe rawit','Tahu','Tempe','Jeruk','Mangga','Salak','Pisang ambon','Pisang raja','Pisang lainnya','Pepaya','Minyak kelapa','Minyak goreng lainnya','Kelapa','Gula pasir','Teh','Kopi','Garam','Kecap','Penyedap masakan/vetsin','Mie instan','Roti manis/roti lainnya','Kue kering','Kue basah','Makanan gorengan','Gado-gado/ketoprak','Nasi campur/rames','Nasi goreng','Nasi putih','Lontong/ketupat sayur','Soto/gule/sop/rawon/cincang','Sate/tongseng','Mie bakso/mie rebus/mie goreng','Makanan ringan anak','Ikang (goreng/bakar dll)','Ayam/daging (goreng dll)','Makanan jadi lainnya','Air kemasan galon','Minuman jadi lainnya','Es lainnya','Roko kretek filter','Rokok kretek tanpa filter','Rokok putih','Perawatan rumah sendiri/bebas sewa','Rumah kontrak','Rumah sewa','Rumah dinas','Listrik','Air PAM','LPG','Minyak tanah','Lainnya(batu baterai,aki,korek,obat nyamuk dll)','Perlengkapan mandi','Barang kecantikan','Perawatan kulit,muka,kuku,rambut','Sabun cuci','Biaya RS Pemerintah','Biaya RS Swasta','Puskesmas/pustu','Praktek dokter/poliklinik','SPP','Bensin','Transportasi/pengangkutan umum','Pos dan Telekomunikasi','Pakaian jadi laki-laki dewasa','Pakaian jadi perempuan dewasa','Pakaian jadi anak-anak','Alas kaki','Minyak Pelumas','Meubelair','Peralatan Rumah Tangga','Perlengkapan perabot rumah tangga','Alat-alat Dapur/Makan'); 
                    $Satuan = array('Kg','Kg','Kg','Kg','Kg','Kg','Kg','Kg','Kg','Kg','Kg','Kg','Kg','Kg','Kg','ml','Kg','Kg','Kg','Kg','Kg','Kg','Kg','Kg','Kg','Kg','Kg','Kg','Kg','Kg','Kg','Kg','Kg','Kg','Liter','Liter','Butir','ons','ons','ons','ons','ml','ons','Bungkus','Bungkus','ons','buah','Bungkus','Bungkus','Bungkus','Bungkus','Bungkus','Bungkus','Piring','Piring','Piring','Bungkus','Kg','Kg','Bungkus','Gallon','ml','ml','Bungkus','Bungkus','Bungkus','Rp','Rp','Rp','Rp','Rp','M3','Kg','Liter','Rp','Rp','Rp','Rp','Rp','Rp','Rp','Rp','Rp','Rp','Rp','Rp','Rp','Rp','Rp','Rp','Rp','Liter','Rp','Rp','Rp','Rp');
              foreach ($Komoditas as $key => $value) { ?>
                <div class="row">
                  <div class="col-sm-5 my-1">
                    <label class="input-group-text bg-primary text-dark justify-content-center"><b><?=$value.' ('.$Satuan[$key].')'?></b></label>
                  </div>
                  <div class="col-sm-auto my-1">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <label class="input-group-text bg-warning text-dark"><b>Volume</b></label>
                      </div>                
                      <input class="form-control" type="text" id="<?='VolumeKomoditas'.($key+1)?>">
                      <div class="input-group-prepend">
                        <label class="input-group-text bg-warning text-dark"><b>Harga</b></label>
                      </div>
                      <input class="form-control" type="text" id="<?='HargaKomoditas'.($key+1)?>">
                    </div>
                  </div>
                </div>
              <?php }?>
              <div class="row">
                <div class="col-sm-6 my-1">
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <label class="input-group-text bg-warning text-dark"><b>5 Komoditas Yang Memberatkan</b></label>
                    </div>
                    <input class="form-control" type="text" id="KomoditasMemberatkan">
                  </div>
                </div>
                <div class="col-sm-auto my-1">
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <label class="input-group-text bg-warning text-dark"><b>Penyebab Pengangguran</b></label>
                    </div>
                    <select class="custom-select" id="PenyebabPengangguran">                    
                      <option value="1">Rendahnya Kualitas Pendidikan</option>
                      <option value="2">Sedang Mencari Pekerjaan</option>
                      <option value="3">Minimnya Lowongan Pekerjaan</option>
                      <option value="4">Lainnya</option>
                    </select>
                  </div>
                </div>
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

        var Status = ['Suami','Istri','Anak Ke 1','Anak Ke 2','Anak Ke 3','Anak Ke 4','Anak Ke 5','Anak Ke 6','Anak Ke 7','Anak Ke 8','Anak Ke 9','Anak Ke 10','Anak Ke 11','Anak Ke 12']
        var Gender = ['Laki-Laki','Perempuan']

        var KK = []

        $("#SimpanResponden").click(function() {
          var Responden = {}
          Responden['Nama'] = $('#NamaAnggota').val()
          Responden['Status'] = $('#StatusAnggota').val()
          Responden['Gender'] = $('#Gender').val()
          Responden['Usia'] = $('#Usia').val()
          KK.push(Responden)	
          var	rows = ''
          $.each(KK, function(key,value) {
            rows = rows + '<tr>';
            rows = rows + '<td class="text-center align-middle">'+(key+1)+'</td>';
            rows = rows + '<td class="align-middle">'+value.Nama+'</td>';
            rows = rows + '<td class="align-middle">'+Status[value.Status-1]+'</td>';
            rows = rows + '<td class="align-middle">'+Gender[value.Gender-1]+'</td>';
            rows = rows + '<td class="align-middle">'+value.Usia+'</td>';
            rows = rows + '<td class="text-center align-middle">';
              rows = rows + '<button Edit="'+key+'" class="btn btn-sm btn-warning mr-1 Edit"><i class="fas fa-edit"></i></button>';
              rows = rows + '<button Hapus="'+key+'" class="btn btn-sm btn-danger ml-1 Hapus"><i class="fas fa-trash"></i></button>';
            rows = rows + '</td>';
            rows = rows + '</tr>';
          })
          $("#KK").html(rows)
        })

        $(document).on("click",".Edit",function(){
          var Edit = KK[$(this).attr('Edit')]
          $('#NamaAnggota').val(Edit.Nama)
          $('#StatusAnggota').val(Edit.Status)
          $('#Gender').val(Edit.Gender)
          $('#Usia').val(Edit.Usia)
        })

        $(document).on("click",".Hapus",function(){
          var Hapus = $(this).attr('Hapus')
					var Konfirmasi = confirm("Yakin Ingin Menghapus?")
      		if (Konfirmasi == true) {
            KK.splice(Hapus,1)
            var	rows = '';
            $.each(KK, function(key,value) {
              rows = rows + '<tr>';
              rows = rows + '<td class="text-center align-middle">'+(key+1)+'</td>';
              rows = rows + '<td class="align-middle">'+value.Nama+'</td>';
              rows = rows + '<td class="align-middle">'+Status[value.Status-1]+'</td>';
              rows = rows + '<td class="align-middle">'+Gender[value.Gender-1]+'</td>';
              rows = rows + '<td class="align-middle">'+value.Usia+'</td>';
              rows = rows + '<td class="text-center align-middle">';
                rows = rows + '<button Edit="1" class="btn btn-sm btn-warning mr-1 Edit"><i class="fas fa-edit"></i></button>';
                rows = rows + '<button Hapus="'+key+'" class="btn btn-sm btn-danger ml-1 Hapus"><i class="fas fa-trash"></i></button>';
              rows = rows + '</td>';
              rows = rows + '</tr>';
            })
            $("#KK").html(rows);
					}
        })
        
        var ModeEditFertilitas = false
        var IdEditAnak = 0
        var Fertilitas = []
        var OpsiFertilitas = ['Ya','Tidak']

        $("#SimpanFertilitas").click(function() {
          if (ModeEditFertilitas) {
            Fertilitas[IdEditAnak].AnakLahirHidup = $('#AnakLahirHidup').val()
            Fertilitas[IdEditAnak].AnakMasihHidup = $('#AnakMasihHidup').val()
            Fertilitas[IdEditAnak].AnakSudahMeninggal = $('#AnakSudahMeninggal').val()
            Fertilitas[IdEditAnak].UsiaAnak = $('#UsiaAnak').val()
            var	rows = ''
            $.each(Fertilitas, function(key,value) {
              rows = rows + '<tr>';
              rows = rows + '<td class="text-center align-middle">'+(key+1)+'</td>';
              rows = rows + '<td class="text-center align-middle">'+(key+1)+'</td>';
              rows = rows + '<td class="align-middle">'+OpsiFertilitas[value.AnakLahirHidup-1]+'</td>';
              rows = rows + '<td class="align-middle">'+OpsiFertilitas[value.AnakMasihHidup-1]+'</td>';
              rows = rows + '<td class="align-middle">'+OpsiFertilitas[value.AnakSudahMeninggal-1]+'</td>';
              rows = rows + '<td class="align-middle">'+value.UsiaAnak+'</td>';
              rows = rows + '<td class="text-center align-middle">';
                rows = rows + '<button EditFertilitas="'+key+'" class="btn btn-sm btn-warning mr-1 EditFertilitas"><i class="fas fa-edit"></i></button>';
                rows = rows + '<button HapusFertilitas="'+key+'" class="btn btn-sm btn-danger ml-1 HapusFertilitas"><i class="fas fa-trash"></i></button>';
              rows = rows + '</td>';
              rows = rows + '</tr>';
            })
            $("#Fertilitas").html(rows) 
            $('#AnakLahirHidup').val(1)
            $('#AnakMasihHidup').val(1)
            $('#AnakSudahMeninggal').val(1)
            $('#UsiaAnak').val('')
            ModeEditFertilitas = false
          } else {
            var Anak = {}
            Anak['AnakLahirHidup'] = $('#AnakLahirHidup').val()
            Anak['AnakMasihHidup'] = $('#AnakMasihHidup').val()
            Anak['AnakSudahMeninggal'] = $('#AnakSudahMeninggal').val()
            Anak['UsiaAnak'] = $('#UsiaAnak').val()
            Fertilitas.push(Anak)	
            var	rows = ''
            $.each(Fertilitas, function(key,value) {
              rows = rows + '<tr>';
              rows = rows + '<td class="text-center align-middle">'+(key+1)+'</td>';
              rows = rows + '<td class="text-center align-middle">'+(key+1)+'</td>';
              rows = rows + '<td class="align-middle">'+OpsiFertilitas[value.AnakLahirHidup-1]+'</td>';
              rows = rows + '<td class="align-middle">'+OpsiFertilitas[value.AnakMasihHidup-1]+'</td>';
              rows = rows + '<td class="align-middle">'+OpsiFertilitas[value.AnakSudahMeninggal-1]+'</td>';
              rows = rows + '<td class="align-middle">'+value.UsiaAnak+'</td>';
              rows = rows + '<td class="text-center align-middle">';
                rows = rows + '<button EditFertilitas="'+key+'" class="btn btn-sm btn-warning mr-1 EditFertilitas"><i class="fas fa-edit"></i></button>';
                rows = rows + '<button HapusFertilitas="'+key+'" class="btn btn-sm btn-danger ml-1 HapusFertilitas"><i class="fas fa-trash"></i></button>';
              rows = rows + '</td>';
              rows = rows + '</tr>';
            })
            $("#Fertilitas").html(rows) 
          }
        })

        $(document).on("click",".EditFertilitas",function(){
          var Edit = Fertilitas[$(this).attr('EditFertilitas')]
          $('#AnakLahirHidup').val(Edit.AnakLahirHidup)
          $('#AnakMasihHidup').val(Edit.AnakMasihHidup)
          $('#AnakSudahMeninggal').val(Edit.AnakSudahMeninggal)
          $('#UsiaAnak').val(Edit.UsiaAnak)
          IdEditAnak = $(this).attr('EditFertilitas')
          ModeEditFertilitas = true
        })

        $(document).on("click",".HapusFertilitas",function(){
          var Hapus = $(this).attr('HapusFertilitas')
					var Konfirmasi = confirm("Yakin Ingin Menghapus?")
      		if (Konfirmasi == true) {
            Fertilitas.splice(Hapus,1)
            var	rows = ''
          $.each(Fertilitas, function(key,value) {
            rows = rows + '<tr>';
            rows = rows + '<td class="text-center align-middle">'+(key+1)+'</td>';
            rows = rows + '<td class="text-center align-middle">'+(key+1)+'</td>';
            rows = rows + '<td class="align-middle">'+OpsiFertilitas[value.AnakLahirHidup-1]+'</td>';
            rows = rows + '<td class="align-middle">'+OpsiFertilitas[value.AnakMasihHidup-1]+'</td>';
            rows = rows + '<td class="align-middle">'+OpsiFertilitas[value.AnakSudahMeninggal-1]+'</td>';
            rows = rows + '<td class="align-middle">'+value.UsiaAnak+'</td>';
            rows = rows + '<td class="text-center align-middle">';
              rows = rows + '<button EditFertilitas="'+key+'" class="btn btn-sm btn-warning mr-1 EditFertilitas"><i class="fas fa-edit"></i></button>';
              rows = rows + '<button HapusFertilitas="'+key+'" class="btn btn-sm btn-danger ml-1 HapusFertilitas"><i class="fas fa-trash"></i></button>';
            rows = rows + '</td>';
            rows = rows + '</tr>';
          })
          $("#Fertilitas").html(rows)
					}
        })

      })
    </script>
  </body>
</html>