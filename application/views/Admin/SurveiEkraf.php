<div class="content-wrapper">
      <!-- Main content -->
        <section class="content">
          <div class="card mt-2">
            <div class="card-header bg-success my-0">
              <b>Informasi Survei</b>
            </div>
            <div class="card-body border border-success">
              <div class="container bg-light">
                <div class="row my-3">
                  <div class="col-sm-4 my-1">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <label class="input-group-text bg-primary text-dark"><b>Tanggal Survei</b></label>
                      </div>
                      <input class="form-control" type="date" id="TanggalSurvei">
                    </div>
                  </div> 
                  <div class="col-sm-8 my-1">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <label class="input-group-text bg-primary text-dark"><b>Jenis Usaha Kreatif</b></label>
                      </div>
                      <select class="custom-select" id="JenisUsahaKreatif">  
                        <?php 
                          $JenisUsahaKreatif = array('Fashion','Kriya','Kuliner','Film,Animasi,Video','Desain Desain','Desain Komunikasi visual','Desain Interior','Arsitektur',
                                                     'Aplikasi Game Developer','TV dan Radio','Seni Rupa','Seni Pertunjukan','Periklanan','Periklanan','Musik','Musik');
                          foreach ($JenisUsahaKreatif as $key => $value) { ?>
                          <option value="<?=$key?>"><?=$value?></option>
                        <?php } ?>                  
                      </select>
                    </div>
                  </div>
                  <div class="col-sm-4 my-1">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <label class="input-group-text bg-primary text-dark"><b>Kode Surveyor</b></label>
                      </div>
                      <input class="form-control" type="text" id="KodeSurveyor">
                    </div>
                  </div>
                  <div class="col-sm-4 my-1">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <label class="input-group-text bg-primary text-dark"><b>Kode Responden</b></label>
                      </div>
                      <input class="form-control" type="text" id="KodeResponden">
                    </div>
                  </div>
                  <div class="col-sm-4 my-1">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <label class="input-group-text bg-primary text-dark"><b>Kode KBLI</b></label>
                      </div>
                      <input class="form-control" type="text" id="KodeKBLI">
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header bg-success my-0">
              <b>Identitas Responden</b>
            </div>
            <div class="card-body border border-success">
              <div class="container bg-light">
                <div class="row my-3">
                  <div class="col-sm-6 my-1">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <label class="input-group-text bg-primary text-dark"><b>Nama Responden</b></label>
                      </div>
                      <input class="form-control" type="text" id="NamaResponden">
                    </div>
                  </div> 
                  <div class="col-sm-3 my-1">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <label class="input-group-text bg-primary text-dark"><b>Jenis Kelamin</b></label>
                      </div>
                      <select class="custom-select" id="Gender">                    
                        <option value="1">Laki-Laki</option>
                        <option value="2">Perempuan</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-sm-3 my-1">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <label class="input-group-text bg-primary text-dark"><b>Pendidikan</b></label>
                      </div>
                      <select class="custom-select" id="JenisUsahaKreatif">  
                        <option value="1">SD</option>
                        <option value="2">SMP</option>
                        <option value="3">SMA</option>
                        <option value="4">D1</option>
                        <option value="5">S1</option>
                        <option value="6">S2</option>
                        <option value="7">S3</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-sm-6 my-1">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <label class="input-group-text bg-primary text-dark"><b>Lama Usaha</b></label>
                      </div>
                      <input class="form-control" type="text" id="LamaUsaha">
                    </div>
                  </div>
                  <div class="col-sm-6 my-1">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <label class="input-group-text bg-primary text-dark"><b>Provinsi</b></label>
                      </div>
                      <select class="custom-select" id="Provinsi">  
                        <?php foreach ($Provinsi as $key) { ?>
                          <option value="<?=$key['Kode']?>"><?=$key['Nama']?></option>
                        <?php } ?>                  
                      </select>
                    </div>
                  </div>
                  <div class="col-sm-4 my-1">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <label class="input-group-text bg-primary text-dark"><b>Kabupaten</b></label>
                      </div>
                      <select class="custom-select" id="Kabupaten">                    
                        <?php foreach ($Kabupaten as $key) { ?>
                          <option value="<?=$key['Kode']?>"><?=$key['Nama']?></option>
                        <?php } ?>                  
                      </select>
                    </div>
                  </div>
                  <div class="col-sm-4 my-1">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <label class="input-group-text bg-primary text-dark"><b>Kecamatan</b></label>
                      </div>
                      <select class="custom-select" id="Kecamatan">  
                        <?php foreach ($Kecamatan as $key) { ?>
                          <option value="<?=$key['Kode']?>"><?=$key['Nama']?></option>
                        <?php } ?>                  
                      </select>
                    </div>
                  </div>
                  <div class="col-sm-4 my-1">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <label class="input-group-text bg-primary text-dark"><b>Desa/Kelurahan</b></label>
                      </div>
                      <select class="custom-select" id="Desa">                    
                        <?php foreach ($Desa as $key) { ?>
                          <option value="<?=$key['Kode']?>"><?=$key['Nama']?></option>
                        <?php } ?>                  
                      </select>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header bg-success my-0">
              <b>Produksi Tahun 2018</b>
            </div>
            <div class="card-body border border-success">
              <div class="container bg-light">
                <div class="row my-3">
                  <div class="col-sm-4 my-1">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <label class="input-group-text bg-primary text-dark"><b>Jenis Produk</b></label>
                      </div>
                      <input class="form-control" type="text" id="JenisProduk2018">
                    </div>
                  </div> 
                  <div class="col-sm-4 my-1">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <label class="input-group-text bg-primary text-dark"><b>Kapasitas Produksi</b></label>
                      </div>
                      <input class="form-control" type="text" id="KapasitasProduksi2018" placeholder="0">
                    </div>
                  </div> 
                  <div class="col-sm-4 my-1">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <label class="input-group-text bg-primary text-dark"><b>Satuan Produksi</b></label>
                      </div>
                      <input class="form-control" type="text" id="SatuanProduksi2018" placeholder="Kg/Lainnya">
                    </div>
                  </div> 
                  <div class="col-sm-4 my-1">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <label class="input-group-text bg-primary text-dark"><b>Rentang Produksi</b></label>
                      </div>
                      <select class="custom-select" id="RentangProduksi2018">  
                        <option value="Harian">Harian</option>
                        <option value="Mingguan">Mingguan</option>
                        <option value="Bulanan">Bulanan</option>
                        <option value="Tahunan">Tahunan</option>
                      </select>
                    </div>
                  </div> 
                  <div class="col-sm-4 my-1">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <label class="input-group-text bg-primary text-dark"><b>Harga Jual (Rp)</b></label>
                      </div>
                      <input class="form-control" type="text" id="HargaJual2018" placeholder="0">
                    </div>
                  </div> 
                  <div class="col-sm-4 my-1">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <label class="input-group-text bg-primary text-dark"><b>Omzet (Rp)</b></label>
                      </div>
                      <input class="form-control" type="text" id="Omzet2018" placeholder="0">
                    </div>
                  </div> 
                  <div class="col-sm-12">
                    <div class="card">
                      <div class="card-header bg-warning my-0">
                        <b>Input Antara / Bahan Baku</b>
                      </div>
                      <div class="card-body border border-success">
                        <div class="container bg-light">
                          <div class="row my-3">
                            <div class="col-sm-4 my-1">
                              <div class="input-group">
                                <div class="input-group-prepend">
                                  <label class="input-group-text bg-warning text-dark"><b>Nama Bahan Baku</b></label>
                                </div>
                                <input class="form-control" type="text" id="JenisProduk2018">
                              </div>
                            </div> 
                            <div class="col-sm-4 my-1">
                              <div class="input-group">
                                <div class="input-group-prepend">
                                  <label class="input-group-text bg-warning text-dark"><b>Jumlah Kebutuhan Bahan Baku</b></label>
                                </div>
                                <input class="form-control" type="text" id="KapasitasProduksi2018" placeholder="0">
                              </div>
                            </div> 
                            <div class="col-sm-4 my-1">
                              <div class="input-group">
                                <div class="input-group-prepend">
                                  <label class="input-group-text bg-warning text-dark"><b>Satuan Kebutuhan</b></label>
                                </div>
                                <input class="form-control" type="text" id="SatuanProduksi2018" placeholder="Kg/Lainnya">
                              </div>
                            </div> 
                            <div class="col-sm-4 my-1">
                              <div class="input-group">
                                <div class="input-group-prepend">
                                  <label class="input-group-text bg-warning text-dark"><b>Rentang Kebutuhan</b></label>
                                </div>
                                <select class="custom-select" id="RentangProduksi2018">  
                                  <option value="Harian">Harian</option>
                                  <option value="Mingguan">Mingguan</option>
                                  <option value="Bulanan">Bulanan</option>
                                  <option value="Tahunan">Tahunan</option>
                                </select>
                              </div>
                            </div> 
                            <div class="col-sm-4 my-1">
                              <div class="input-group">
                                <div class="input-group-prepend">
                                  <label class="input-group-text bg-warning text-dark"><b>Harga Beli Bahan Baku (Rp)</b></label>
                                </div>
                                <input class="form-control" type="text" id="HargaJual2018" placeholder="0">
                              </div>
                            </div> 
                            <div class="col-sm-4 my-1">
                              <div class="input-group">
                                <div class="input-group-prepend">
                                  <label class="input-group-text bg-warning text-dark"><b>Satuan Pembelian Bahan Baku</b></label>
                                </div>
                                <input class="form-control" type="text" id="Omzet2018" placeholder="Kg/Lainnya">
                              </div>
                            </div> 
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header bg-success my-0">
              <b>Input Primer 2018</b>
            </div>
            <div class="card-body border border-success">
              <div class="container bg-light">
                <div class="row my-3">
                  <div class="col-sm-12 my-1">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <label class="input-group-text bg-success text-dark"><b>Upah Gaji (Termasuk lembur, bonus, tunjangan, asuransi dll)</b></label>
                      </div>
                      <div class="input-group-prepend">
                        <label class="input-group-text bg-primary text-dark"><b>Rentang Waktu</b></label>
                      </div>
                      <select class="custom-select" id="RentangGaji2018">  
                        <option value="Harian">Harian</option>
                        <option value="Mingguan">Mingguan</option>
                        <option value="Bulanan">Bulanan</option>
                        <option value="Tahunan">Tahunan</option>
                      </select>
                      <div class="input-group-prepend">
                        <label class="input-group-text bg-primary text-dark"><b>Nilai (Rp)</b></label>
                      </div>
                      <input class="form-control" type="text" id="NilaiGaji2018" placeholder="0">
                    </div>
                  </div> 
                  <div class="col-sm-12 my-1">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <label class="input-group-text bg-success text-dark"><b>Surplus Usaha bruto</b></label>
                      </div>
                      <div class="input-group-prepend">
                        <label class="input-group-text bg-primary text-dark"><b>Rentang Waktu</b></label>
                      </div>
                      <select class="custom-select" id="RentangSurplus2018">  
                        <option value="Harian">Harian</option>
                        <option value="Mingguan">Mingguan</option>
                        <option value="Bulanan">Bulanan</option>
                        <option value="Tahunan">Tahunan</option>
                      </select>
                      <div class="input-group-prepend">
                        <label class="input-group-text bg-primary text-dark"><b>Nilai (Rp)</b></label>
                      </div>
                      <input class="form-control" type="text" id="NilaiSurplus2018" placeholder="0">
                    </div>
                  </div> 
                  <div class="col-sm-12 my-1">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <label class="input-group-text bg-success text-dark"><b>Sewa (Gedung / tanah)</b></label>
                      </div>
                      <div class="input-group-prepend">
                        <label class="input-group-text bg-primary text-dark"><b>Rentang Waktu</b></label>
                      </div>
                      <select class="custom-select" id="RentangSewa2018">  
                        <option value="Harian">Harian</option>
                        <option value="Mingguan">Mingguan</option>
                        <option value="Bulanan">Bulanan</option>
                        <option value="Tahunan">Tahunan</option>
                      </select>
                      <div class="input-group-prepend">
                        <label class="input-group-text bg-primary text-dark"><b>Nilai (Rp)</b></label>
                      </div>
                      <input class="form-control" type="text" id="NilaiSewa2018" placeholder="0">
                    </div>
                  </div> 
                  <div class="col-sm-12 my-1">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <label class="input-group-text bg-success text-dark"><b>Bunga Atas pinjaman</b></label>
                      </div>
                      <div class="input-group-prepend">
                        <label class="input-group-text bg-primary text-dark"><b>Rentang Waktu</b></label>
                      </div>
                      <select class="custom-select" id="RentangBunga2018">  
                        <option value="Harian">Harian</option>
                        <option value="Mingguan">Mingguan</option>
                        <option value="Bulanan">Bulanan</option>
                        <option value="Tahunan">Tahunan</option>
                      </select>
                      <div class="input-group-prepend">
                        <label class="input-group-text bg-primary text-dark"><b>Nilai (Rp)</b></label>
                      </div>
                      <input class="form-control" type="text" id="NilaiBunga2018" placeholder="0">
                    </div>
                  </div> 
                </div>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header bg-success my-0">
              <b>Input Primer 2019</b>
            </div>
            <div class="card-body border border-success">
              <div class="container bg-light">
                <div class="row my-3">
                  <div class="col-sm-12 my-1">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <label class="input-group-text bg-success text-dark"><b>Upah Gaji (Termasuk lembur, bonus, tunjangan, asuransi dll)</b></label>
                      </div>
                      <div class="input-group-prepend">
                        <label class="input-group-text bg-primary text-dark"><b>Rentang Waktu</b></label>
                      </div>
                      <select class="custom-select" id="RentangGaji2019">  
                        <option value="Harian">Harian</option>
                        <option value="Mingguan">Mingguan</option>
                        <option value="Bulanan">Bulanan</option>
                        <option value="Tahunan">Tahunan</option>
                      </select>
                      <div class="input-group-prepend">
                        <label class="input-group-text bg-primary text-dark"><b>Nilai (Rp)</b></label>
                      </div>
                      <input class="form-control" type="text" id="NilaiGaji2019" placeholder="0">
                    </div>
                  </div> 
                  <div class="col-sm-12 my-1">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <label class="input-group-text bg-success text-dark"><b>Surplus Usaha bruto</b></label>
                      </div>
                      <div class="input-group-prepend">
                        <label class="input-group-text bg-primary text-dark"><b>Rentang Waktu</b></label>
                      </div>
                      <select class="custom-select" id="RentangSurplus2019">  
                        <option value="Harian">Harian</option>
                        <option value="Mingguan">Mingguan</option>
                        <option value="Bulanan">Bulanan</option>
                        <option value="Tahunan">Tahunan</option>
                      </select>
                      <div class="input-group-prepend">
                        <label class="input-group-text bg-primary text-dark"><b>Nilai (Rp)</b></label>
                      </div>
                      <input class="form-control" type="text" id="NilaiSurplus2019" placeholder="0">
                    </div>
                  </div> 
                  <div class="col-sm-12 my-1">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <label class="input-group-text bg-success text-dark"><b>Sewa (Gedung / tanah)</b></label>
                      </div>
                      <div class="input-group-prepend">
                        <label class="input-group-text bg-primary text-dark"><b>Rentang Waktu</b></label>
                      </div>
                      <select class="custom-select" id="RentangSewa2019">  
                        <option value="Harian">Harian</option>
                        <option value="Mingguan">Mingguan</option>
                        <option value="Bulanan">Bulanan</option>
                        <option value="Tahunan">Tahunan</option>
                      </select>
                      <div class="input-group-prepend">
                        <label class="input-group-text bg-primary text-dark"><b>Nilai (Rp)</b></label>
                      </div>
                      <input class="form-control" type="text" id="NilaiSewa2019" placeholder="0">
                    </div>
                  </div> 
                  <div class="col-sm-12 my-1">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <label class="input-group-text bg-success text-dark"><b>Bunga Atas pinjaman</b></label>
                      </div>
                      <div class="input-group-prepend">
                        <label class="input-group-text bg-primary text-dark"><b>Rentang Waktu</b></label>
                      </div>
                      <select class="custom-select" id="RentangBunga2019">  
                        <option value="Harian">Harian</option>
                        <option value="Mingguan">Mingguan</option>
                        <option value="Bulanan">Bulanan</option>
                        <option value="Tahunan">Tahunan</option>
                      </select>
                      <div class="input-group-prepend">
                        <label class="input-group-text bg-primary text-dark"><b>Nilai (Rp)</b></label>
                      </div>
                      <input class="form-control" type="text" id="NilaiBunga2019" placeholder="0">
                    </div>
                  </div> 
                </div>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header bg-success my-0">
              <b>Jumlah Tenaga Kerja (Orang)</b>
            </div>
            <div class="card-body border border-success">
              <div class="container bg-light">
                <div class="row my-3">
                  <div class="col-sm-12 my-1">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <label class="input-group-text bg-warning text-dark"><b>Jumlah Tenaga Kerja</b></label>
                      </div>
                      <div class="input-group-prepend">
                        <label class="input-group-text bg-success text-dark"><b>Pada Tahun 2018</b></label>
                      </div>
                      <div class="input-group-prepend">
                        <label class="input-group-text bg-primary text-dark"><b>Laki-Laki</b></label>
                      </div>
                      <input class="form-control" type="text" id="JumlahPria2018" placeholder="0">
                      <div class="input-group-prepend">
                        <label class="input-group-text bg-primary text-dark"><b>Perempuan</b></label>
                      </div>
                      <input class="form-control" type="text" id="JumlahWanita2018" placeholder="0">
                      <div class="input-group-prepend">
                        <label class="input-group-text bg-success text-dark"><b>Pada Tahun 2019</b></label>
                      </div>
                      <div class="input-group-prepend">
                        <label class="input-group-text bg-primary text-dark"><b>Laki-Laki</b></label>
                      </div>
                      <input class="form-control" type="text" id="JumlahPria2019" placeholder="0">
                      <div class="input-group-prepend">
                        <label class="input-group-text bg-primary text-dark"><b>Perempuan</b></label>
                      </div>
                      <input class="form-control" type="text" id="JumlahWanita2019" placeholder="0">                          
                    </div>
                  </div> 
                  <div class="col-sm-12 my-1">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <label class="input-group-text bg-warning text-dark"><b>Pendidikan Tenaga Kerja</b></label>
                      </div>
                      <div class="input-group-prepend">
                        <label class="input-group-text bg-success text-dark"><b>Pada Tahun 2018</b></label>
                      </div>
                      <div class="input-group-prepend">
                        <label class="input-group-text bg-primary text-dark"><b>Tidak Sekolah</b></label>
                      </div>
                      <input class="form-control" type="text" id="JumlahTenagaKerjaTidakSekolah2018" placeholder="0">
                      <div class="input-group-prepend">
                        <label class="input-group-text bg-primary text-dark"><b>SD</b></label>
                      </div>
                      <input class="form-control" type="text" id="JumlahTenagaKerjaSD2018" placeholder="0">
                      <div class="input-group-prepend">
                        <label class="input-group-text bg-primary text-dark"><b>SMP</b></label>
                      </div>
                      <input class="form-control" type="text" id="JumlahTenagaKerjaSMP2018" placeholder="0">
                      <div class="input-group-prepend">
                        <label class="input-group-text bg-primary text-dark"><b>SMA</b></label>
                      </div>
                      <input class="form-control" type="text" id="JumlahTenagaKerjaSMA2018" placeholder="0">
                      <div class="input-group-prepend">
                        <label class="input-group-text bg-primary text-dark"><b>Perguruan Tinggi</b></label>
                      </div>
                      <input class="form-control" type="text" id="JumlahTenagaKerjaUniversitas2018" placeholder="0">                                             
                    </div>
                  </div> 
                  <div class="col-sm-12 my-1">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <label class="input-group-text bg-warning text-dark"><b>Pendidikan Tenaga Kerja</b></label>
                      </div>
                      <div class="input-group-prepend">
                        <label class="input-group-text bg-success text-dark"><b>Pada Tahun 2019</b></label>
                      </div>
                      <div class="input-group-prepend">
                        <label class="input-group-text bg-primary text-dark"><b>Tidak Sekolah</b></label>
                      </div>
                      <input class="form-control" type="text" id="JumlahTenagaKerjaTidakSekolah2019" placeholder="0">
                      <div class="input-group-prepend">
                        <label class="input-group-text bg-primary text-dark"><b>SD</b></label>
                      </div>
                      <input class="form-control" type="text" id="JumlahTenagaKerjaSD2019" placeholder="0">
                      <div class="input-group-prepend">
                        <label class="input-group-text bg-primary text-dark"><b>SMP</b></label>
                      </div>
                      <input class="form-control" type="text" id="JumlahTenagaKerjaSMP2019" placeholder="0">
                      <div class="input-group-prepend">
                        <label class="input-group-text bg-primary text-dark"><b>SMA</b></label>
                      </div>
                      <input class="form-control" type="text" id="JumlahTenagaKerjaSMA2019" placeholder="0">
                      <div class="input-group-prepend">
                        <label class="input-group-text bg-primary text-dark"><b>Perguruan Tinggi</b></label>
                      </div>
                      <input class="form-control" type="text" id="JumlahTenagaKerjaUniversitas2019" placeholder="0">                                             
                    </div>
                  </div> 
                </div>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header bg-success my-0">
              <b>Total Aset (Rp)</b>
            </div>
            <div class="card-body border border-success">
              <div class="container bg-light">
                <div class="row my-3">
                  <div class="col-sm-12 my-1">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <label class="input-group-text bg-success text-dark"><b>Total Aset (Tanah, gedung, peralatan, mobil dsb)</b></label>
                      </div>
                      <div class="input-group-prepend">
                        <label class="input-group-text bg-primary text-dark"><b>Pada Tahun 2018 (Rp)</b></label>
                      </div>
                      <input class="form-control" type="text" id="TotalAset2018" placeholder="0">
                      <div class="input-group-prepend">
                        <label class="input-group-text bg-primary text-dark"><b>Pada Tahun 2019 (Rp)</b></label>
                      </div>
                      <input class="form-control" type="text" id="TotalAset2018" placeholder="0">                      
                    </div>
                  </div> 
                </div>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header bg-success my-0">
              <b>Informasi Dampak Pandemi</b>
            </div>
            <div class="card-body border border-success">
              <div class="container bg-light">
                <div class="row my-3">
                  <div class="col-sm-12 my-1">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <label class="input-group-text bg-primary text-dark"><b>Apakah usaha Anda terkena dampak pandemic Covid-19</b></label>
                      </div>
                      <select class="custom-select" id="DampakCovid">  
                        <option value="1">Ya terdampak negatif/menurun</option>
                        <option value="2">Ya terdampak positif/meningkat</option>
                        <option value="3">Tidak terdampak</option>
                      </select>
                    </div>
                  </div> 
                  <div class="col-sm-auto my-1">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <label class="input-group-text bg-primary text-dark"><b>Jika Iya, berapa persen dampak pandemic Covid-19 terhadap output / omzet usaha yang dirintis dibandingkan saat keadaan normal</b></label>
                      </div>
                      <input class="form-control" type="text" id="PersentaseDampakCovid">                    
                      <div class="input-group-prepend">
                        <label class="input-group-text bg-primary text-dark"><b>%</b></label>
                      </div>
                    </div>
                  </div> 
                  <div class="col-sm-12 my-1">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <label class="input-group-text bg-primary text-dark"><b>Bagaimana optimisme pemulihan kondisi usaha di tahun depan</b></label>
                      </div>
                      <select class="custom-select" id="Optimisme">  
                        <option value="1">Pesimis dan Kemungkinan akan tetap turun ditahun depan</option>
                        <option value="2">Kemungkinan akan Stagnan seperti saat sekarang ditahun depan</option>
                        <option value="3">Optimis meningkat namun sedikit ditahun depan</option>
                        <option value="4">Optimis meningkat cepat dan pulih seperti semula ditahun depan</option>
                      </select>
                    </div>
                  </div> 
                </div>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header bg-success my-0">
              <b>Informasi Lainnya</b>
            </div>
            <div class="card-body border border-success">
              <div class="container bg-light">
                <div class="row my-3">
                  <div class="col-sm-4 my-1">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <label class="input-group-text bg-primary text-dark"><b>Daerah pemasaran</b></label>
                      </div>
                      <select class="custom-select" id="DaerahPemasaran">  
                        <option value="1">Dalam Kota</option>
                        <option value="2">Luar Kota</option>
                        <option value="3">Luar Negeri</option>
                      </select>
                    </div>
                  </div> 
                  <div class="col-sm-4 my-1">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <label class="input-group-text bg-primary text-dark"><b>Media Promosi</b></label>
                      </div>
                      <select class="custom-select" id="MediaPromosi">  
                        <option value="1">Televisi</option>
                        <option value="2">Radio</option>
                        <option value="3">Surat Kabar</option>
                        <option value="4">Pameran</option>
                        <option value="5">Medsos</option>
                        <option value="6">Website </option>
                        <option value="7">Brosur</option>
                        <option value="8">Media Luar</option>
                        <option value="9">Lainnya</option>                      
                      </select>
                    </div>
                  </div> 
                  <div class="col-sm-4 my-1">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <label class="input-group-text bg-primary text-dark"><b>Apakah usaha anda memiliki HKI</b></label>
                      </div>
                      <select class="custom-select" id="HKI">  
                        <option value="1">Ya</option>
                        <option value="2">Tidak</option>
                      </select>
                    </div>
                  </div> 
                  <div class="col-sm-5 my-1">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <label class="input-group-text bg-primary text-dark"><b>Apakah Usaha Ini Memiliki Badan Hukum</b></label>
                      </div>
                      <select class="custom-select" id="BadanHukum">  
                        <option value="1">Ya</option>
                        <option value="2">Tidak</option>
                      </select>
                    </div>
                  </div> 
                  <div class="col-sm-7 my-1">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <label class="input-group-text bg-primary text-dark"><b>Jenis Badan Hukum</b></label>
                      </div>
                      <select class="custom-select" id="JenisBadanHukum">  
                        <option value="1">PT</option>
                        <option value="2">CV</option>
                        <option value="3">UD</option>
                        <option value="4">Firma</option>
                        <option value="5">Perseorangan</option>
                        <option value="6">Lainnya </option>
                      </select>
                      <input class="form-control" type="text" id="BadanHukumLainnya">      
                    </div>
                  </div> 
                </div>
              </div>
            </div>
          </div>
          <!-- <div class="card">
            <div class="card-header bg-primary my-0">
              <b>Informasi Anggota Keluarga (Ditanyakan Untuk Semua Anggota Keluarga)</b>
            </div>
            <div class="card-body border border-primary">
              <div class="container bg-light">
                <div class="row">
                  <div class="col-sm-12">
                    <div class="table-resp'ons'ive mt-1">
                      <table id="TabelSurveyor" class="table table-bordered table-striped">
                        <thead class="bg-success">
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
                        <label class="input-group-text bg-warning text-dark"><b>NIK</b></label>
                      </div>
                      <input class="form-control" type="text" id="NIK" placeholder="Nomor Induk Keluarga">
                    </div>
                  </div>
                  <div class="col-sm-4 my-1">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <label class="input-group-text bg-warning text-dark"><b>Nama Anggota</b></label>
                      </div>
                      <input class="form-control" type="text" id="NamaAnggota">
                    </div>
                  </div>
                  <div class="col-sm-4 my-1">
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
                  <div class="col-sm-4 my-1">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <label class="input-group-text bg-warning text-dark"><b>Usia</b></label>
                      </div>
                      <input class="form-control" type="text" id="Usia">
                    </div>
                  </div>
                  <div class="col-sm-4 my-1">
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
                  <div class="col-sm-4 my-1">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <label class="input-group-text bg-warning text-dark"><b>Status Perkawinan</b></label>
                      </div>
                      <select class="custom-select" id="StatusPerkawinan">                    
                        <option value="1">Belum Kawin</option>
                        <option value="2">Kawin</option>
                        <option value="3">Cerai Hidup</option>
                        <option value="4">Cerai Mati</option>
                      </select>
                    </div>
                  </div>
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
                        <option value="11">Tidak Bekerja</option>           
                        <option value="1">Pegawai level bawah (staff, Pegawai negeri gol II, Tentara gol letnan bawah)</option>
                        <option value="2">Pegawai golongan menengah (Kabag,Manager,Direktur,PNS gol III Keatas,Tentara Pangkat Kapten Keatas,Dosen)</option>
                        <option value="3">Profesional (Dokter, Pengacara, Notaris, Seniman dll)</option>
                        <option value="4">Wiraswasta / Pedagang Besar (Karyawan > 10 orang)</option>
                        <option value="5">Wiraswasta / Pedagang Besar (Karyawan > 10 orang)</option>
                        <option value="6">Mahasiswa / Pelajar</option>
                        <option value="7">Pekerja Terlatih (Salesman, Teknisi, montir, Tukang bangunan, tukang kayu, dll)</option>
                        <option value="8">Pekerjaan tidak terlatih (Buruh tani, tukang becak, penjaga toko dll)</option>
                        <option value="9">Pemilik usaha (Petani, petambak, Peternak dll)</option>
                        <option value="10">Pensiunan</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-sm-4 my-1">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <label class="input-group-text bg-warning text-dark"><b>Jenis Pekerjaan</b></label>
                      </div>
                      <select class="custom-select" id="JenisPekerjaan">         
                        <option value="1">Tidak Bekerja</option>           
                        <option value="2">Berusaha Sendiri</option>
                        <option value="3">Dibantu Buruh Tidak Tetap / Tidak Dibayar</option>
                        <option value="4">Dibantu Buruh Tidak Tetap / Dibayar</option>
                        <option value="5">Buruh / Karyawan / Pegawai</option>           
                        <option value="6">Pekerja Bebas Di Pertanian</option>
                        <option value="7">Pekerja Bebas Di Non Pertanian</option>
                        <option value="8">Pekerja Keluarga/Tidak Dibayar</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-sm-4 my-1">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <label class="input-group-text bg-warning text-dark"><b>Jam Kerja</b></label>
                      </div>
                      <select class="custom-select" id="JamKerja">    
                        <?php for ($i=0; $i < 25; $i++) { ?>
                          <option value="<?=$i?>"><?=$i.' Jam'?></option>           
                        <?php } ?>          
                      </select>
                    </div>
                  </div>
                  <div class="col-sm-4 my-1">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <label class="input-group-text bg-warning text-dark"><b>Keahlian Yang Dimiliki</b></label>
                      </div>
                      <input class="form-control" type="text" id="Keahlian">
                    </div>
                  </div>
                  <div class="col-sm-4 my-1">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <label class="input-group-text bg-warning text-dark"><b>Kegiatan Seminggu Lalu</b></label>
                      </div>
                      <select class="custom-select" id="KegiatanSeminggu">         
                        <option value="1">Tidak Bekerja</option>  
                        <option value="2">Bekerja</option>           
                        <option value="3">Bersekolah</option>
                        <option value="4">Mengurus Rumah Tangga</option>
                        <option value="5">Mencari Pekerjaan</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-sm-4 my-1">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <label class="input-group-text bg-warning text-dark"><b>Alasan Mencari Kerja</b></label>
                      </div>
                      <select class="custom-select" id="AlasanMencariKerja">         
                        <option value="3">Alasan Lainnya</option>
                        <option value="1">Tamat Sekolah</option>           
                        <option value="2">Mencari Nafkah</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-sm-8 my-1">
                    <div class="input-group">
                      <input class="form-control" type="text" id="AlasanMencariKerjaLainnya" placeholder="Sebutkan Jika Alasan Lainnya">
                    </div>
                  </div>
                  <div class="col-sm-4 my-1">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <label class="input-group-text bg-warning text-dark"><b>Lokasi Bekerja</b></label>
                      </div>
                      <select class="custom-select" id="LokasiKerja">         
                        <option value="1">Dalam Kabupaten</option>           
                        <option value="2">Luar Kabupaten</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-sm-8 my-1">
                    <div class="input-group">
                      <input class="form-control" type="text" id="AlasanLokasiBekerja" placeholder="Alasan Jika Bekerja Diluar Kabupaten">
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
                  <div class="col-sm-4 my-1">
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
                  <div class="col-sm-4 my-1">
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
                  <div class="col-sm-4 my-1">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <label class="input-group-text bg-warning text-dark"><b>Partisipasi Sekolah</b></label>
                      </div>
                      <select class="custom-select" id="PartisipasiSekolah">                    
                        <option value="1">Tidak Pernah Sekolah</option>
                        <option value="2">Masih Sekolah</option>
                        <option value="3">Tidak Sekolah Lagi</option>
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
                        <option value="11">D1</option>
                        <option value="12">D2</option>
                        <option value="13">D3</option>
                        <option value="14">D4/S1</option>
                        <option value="15">S2</option>
                        <option value="16">S3</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-sm-4 my-1">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <label class="input-group-text bg-warning text-dark"><b>Kelas Yang Pernah/Sedang Diduduki</b></label>
                      </div>
                      <select class="custom-select" id="StatusSekolah">                    
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
                  <div class="col-sm-4 my-1">
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
                        <option value="12">D1</option>
                        <option value="13">D2</option>
                        <option value="14">D3</option>
                        <option value="15">D4/S1</option>
                        <option value="16">S2</option>
                        <option value="17">S3</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-sm-4 my-1">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <label class="input-group-text bg-warning text-dark"><b>Bisa Baca Tulis</b></label>
                      </div>
                      <select class="custom-select" id="BacaTulis">                    
                        <option value="1">Huruf Latin</option>
                        <option value="2">Huruf Arab</option>
                        <option value="3">Huruf Lain</option>
                        <option value="4">All</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-sm-4 my-1">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <label class="input-group-text bg-warning text-dark"><b>SD</b></label>
                      </div>
                      <input class="form-control" type="text" id="SD" placeholder="Nama Sekolah/Lokasi">
                    </div>
                  </div>
                  <div class="col-sm-4 my-1">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <label class="input-group-text bg-warning text-dark"><b>SMP</b></label>
                      </div>
                      <input class="form-control" type="text" id="SMP" placeholder="Nama Sekolah/Lokasi">
                    </div>
                  </div>
                  <div class="col-sm-4 my-1">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <label class="input-group-text bg-warning text-dark"><b>SMA</b></label>
                      </div>
                      <input class="form-control" type="text" id="SMA" placeholder="Nama Sekolah/Lokasi">
                    </div>
                  </div>
                  <div class="col-sm-4 my-1">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <label class="input-group-text bg-warning text-dark"><b>Kampus</b></label>
                      </div>
                      <input class="form-control" type="text" id="Universitas" placeholder="Nama Kampus/Lokasi">
                    </div>
                  </div>
                  <div class="col-sm-4 my-1">
                    <button type="button" class="btn btn-primary text-light" id="SimpanResponden"><b>Simpan</b></button> 
                  </div>
                </div>
              </div>
            </div>
          </div> -->
          <!-- <div class="card mt-2">
            <div class="card-header bg-primary my-0">
              <b>Kondisi Fertilitas (Ditanyakan Pada Istri)</b>
            </div>
            <div class="card-body border border-primary">
              <div class="container bg-light">
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
                  <div class="col-sm-12">
                    <div class="table-resp'ons'ive mt-1">
                      <table class="table table-bordered table-striped">
                        <thead class="bg-success">
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
                      <input class="form-control" type="text" id="UsiaAnak">&emsp;
                      <button type="button" class="btn btn-primary text-light" id="SimpanFertilitas"><b>Simpan</b></button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div> -->
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

        $("#Provinsi").change(function (){
          var Provinsi = { Kode: $("#Provinsi").val() }
          $.post(BaseURL+"Admin/Kabupaten", Provinsi).done(function(Respon) {
            $('#Kabupaten').html(Respon)
            var Kabupaten = { Kode: $("#Kabupaten").val() }
            $.post(BaseURL+"Admin/Kecamatan", Kabupaten).done(function(Respon) {
              $('#Kecamatan').html(Respon)
              var Desa = { Kode: $("#Kecamatan").val() }
              $.post(BaseURL+"Admin/Desa", Desa).done(function(Respon) {
                $('#Desa').html(Respon)
              })  
            })  
          })    
        })

        $("#Kabupaten").change(function (){
          var Kabupaten = { Kode: $("#Kabupaten").val() }
          $.post(BaseURL+"Admin/Kecamatan", Kabupaten).done(function(Respon) {
            $('#Kecamatan').html(Respon)
            var Desa = { Kode: $("#Kecamatan").val() }
            $.post(BaseURL+"Admin/Desa", Desa).done(function(Respon) {
              $('#Desa').html(Respon)
            })  
          })    
        })
        
        $("#Kecamatan").change(function (){
          var Desa = { Kode: $("#Kecamatan").val() }
          $.post(BaseURL+"Admin/Desa", Desa).done(function(Respon) {
            $('#Desa').html(Respon)
          })    
        })

        // var KK = []
        // var ModeEditKK = false
        // var IdEditKK = 0
        // var Status = ['Suami','Istri','Anak Ke 1','Anak Ke 2','Anak Ke 3','Anak Ke 4','Anak Ke 5','Anak Ke 6','Anak Ke 7','Anak Ke 8','Anak Ke 9','Anak Ke 10','Anak Ke 11','Anak Ke 12']
        // var Gender = ['Laki-Laki','Perempuan']

        // $("#SimpanResponden").click(function() {
        //   if (ModeEditKK) {
        //     KK[IdEditKK].Nama = $('#NamaAnggota').val()
        //     KK[IdEditKK].Status = $('#StatusAnggota').val()
        //     KK[IdEditKK].Gender = $('#Gender').val()
        //     KK[IdEditKK].Usia = $('#Usia').val()
        //     KK[IdEditKK].Pendapatan = $('#Pendapatan').val()
        //     KK[IdEditKK].Pekerjaan = $('#Pekerjaan').val()
        //     KK[IdEditKK].PertolonganKelahiran = $('#PertolonganKelahiran').val()
        //     KK[IdEditKK].KJK = $('#KJK').val()
        //     KK[IdEditKK].ASI = $('#ASI').val()
        //     KK[IdEditKK].Imunisasi = $('#Imunisasi').val()
        //     KK[IdEditKK].PartisipasiSekolah = $('#PartisipasiSekolah').val()
        //     KK[IdEditKK].PendidikanTertinggi = $('#PendidikanTertinggi').val()
        //     KK[IdEditKK].IjazahTertinggi = $('#IjazahTertinggi').val()
        //     KK[IdEditKK].Santri = $('#Santri').val()
        //     KK[IdEditKK].StatusSekolah = $('#StatusSekolah').val()
        //     KK[IdEditKK].BacaTulis = $('#BacaTulis').val()
        //     KK[IdEditKK].SD = $('#SD').val()
        //     KK[IdEditKK].SMP = $('#SMP').val()
        //     KK[IdEditKK].SMA = $('#SMA').val()
        //     KK[IdEditKK].Universitas = $('#Universitas').val()
        //     TabelKK(KK)
        //     ModeEditKK = false
        //   } else {
        //     var Responden = {}
        //     Responden['Nama'] = $('#NamaAnggota').val()
        //     Responden['Status'] = $('#StatusAnggota').val()
        //     Responden['Gender'] = $('#Gender').val()
        //     Responden['Usia'] = $('#Usia').val()
        //     Responden['Pendapatan'] = $('#Pendapatan').val()
        //     Responden['Pekerjaan'] = $('#Pekerjaan').val()
        //     Responden['PertolonganKelahiran'] = $('#PertolonganKelahiran').val()
        //     Responden['KJK'] = $('#KJK').val()
        //     Responden['ASI'] = $('#ASI').val()
        //     Responden['Imunisasi'] = $('#Imunisasi').val()
        //     Responden['PartisipasiSekolah'] = $('#PartisipasiSekolah').val()
        //     Responden['PendidikanTertinggi'] = $('#PendidikanTertinggi').val()
        //     Responden['IjazahTertinggi'] = $('#IjazahTertinggi').val()
        //     Responden['Santri'] = $('#Santri').val()
        //     Responden['StatusSekolah'] = $('#StatusSekolah').val()
        //     if ($('#PendidikanTertinggi').val() < 4) {
        //       Responden['LamaSekolah'] = $('#StatusSekolah').val() == 9 ? 6 : $('#StatusSekolah').val()
        //     } else if ($('#PendidikanTertinggi').val() < 7) {
        //       Responden['LamaSekolah'] = $('#StatusSekolah').val() == 9 ? 9 : $('#StatusSekolah').val()
        //     } else if ($('#PendidikanTertinggi').val() < 11) {
        //       Responden['LamaSekolah'] = $('#StatusSekolah').val() == 9 ? 12 : ($('#StatusSekolah').val()+9)
        //     } else if ($('#PendidikanTertinggi').val() == 11) {
        //       Responden['LamaSekolah'] = $('#StatusSekolah').val() == 9 ? 13 : ($('#StatusSekolah').val()+9)
        //     } else if ($('#PendidikanTertinggi').val() == 12) {
        //       Responden['LamaSekolah'] = $('#StatusSekolah').val() == 9 ? 14 : ($('#StatusSekolah').val()+9)
        //     } else if ($('#PendidikanTertinggi').val() == 13) {
        //       Responden['LamaSekolah'] = $('#StatusSekolah').val() == 9 ? 15 : ($('#StatusSekolah').val()+9)
        //     } else if ($('#PendidikanTertinggi').val() == 14) {
        //       Responden['LamaSekolah'] = $('#StatusSekolah').val() == 9 ? 16 : ($('#StatusSekolah').val()+9)
        //     } else if ($('#PendidikanTertinggi').val() == 15) {
        //       Responden['LamaSekolah'] = $('#StatusSekolah').val() == 9 ? 18 : ($('#StatusSekolah').val()+9)
        //     } else if ($('#PendidikanTertinggi').val() == 16) {
        //       Responden['LamaSekolah'] = $('#StatusSekolah').val() == 9 ? 12 : ($('#StatusSekolah').val()+9)
        //     }
        //     Responden['BacaTulis'] = $('#BacaTulis').val()
        //     Responden['SD'] = $('#SD').val()
        //     Responden['SMP'] = $('#SMP').val()
        //     Responden['SMA'] = $('#SMA').val()
        //     Responden['Universitas'] = $('#Universitas').val()
        //     KK.push(Responden)	
        //     TabelKK(KK)
        //   }
        // })

        // $(document).on("click",".Edit",function(){
        //   var Edit = KK[$(this).attr('Edit')]
        //   $('#NamaAnggota').val(Edit.Nama)
        //   $('#StatusAnggota').val(Edit.Status)
        //   $('#Gender').val(Edit.Gender)
        //   $('#Usia').val(Edit.Usia)
        //   $('#Pendapatan').val(Edit.Pendapatan)
        //   $('#Pekerjaan').val(Edit.Pekerjaan)
        //   $('#PertolonganKelahiran').val(Edit.PertolonganKelahiran)
        //   $('#KJK').val(Edit.KJK)
        //   $('#ASI').val(Edit.ASI)
        //   $('#Imunisasi').val(Edit.Imunisasi)
        //   $('#PartisipasiSekolah').val(Edit.PartisipasiSekolah)
        //   $('#PendidikanTertinggi').val(Edit.PendidikanTertinggi)
        //   $('#IjazahTertinggi').val(Edit.IjazahTertinggi)
        //   $('#Santri').val(Edit.Santri)
        //   $('#StatusSekolah').val(Edit.StatusSekolah)
        //   $('#BacaTulis').val(Edit.BacaTulis)
        //   $('#SD').val(Edit.SD)
        //   $('#SMP').val(Edit.SMP)
        //   $('#SMA').val(Edit.SMA)
        //   $('#Universitas').val(Edit.Universitas)
        //   IdEditAnak = $(this).attr('Edit')
        //   ModeEditKK = true
        // })

        // $(document).on("click",".Hapus",function(){
        //   var Hapus = $(this).attr('Hapus')
				// 	var Konfirmasi = confirm("Yakin Ingin Menghapus?")
      	// 	if (Konfirmasi == true) {
        //     KK.splice(Hapus,1)
        //     TabelKK(KK)
				// 	}
        // })
        
        // var ModeEditFertilitas = false
        // var IdEditAnak = 0
        // var Fertilitas = []

        // $("#SimpanFertilitas").click(function() {
        //   if (ModeEditFertilitas) {
        //     Fertilitas[IdEditAnak].AnakLahirHidup = $('#AnakLahirHidup').val()
        //     Fertilitas[IdEditAnak].AnakMasihHidup = $('#AnakMasihHidup').val()
        //     Fertilitas[IdEditAnak].AnakSudahMeninggal = $('#AnakSudahMeninggal').val()
        //     Fertilitas[IdEditAnak].UsiaAnak = $('#UsiaAnak').val()
        //     TabelFertilitas(Fertilitas)
        //     $('#AnakLahirHidup').val(1)
        //     $('#AnakMasihHidup').val(1)
        //     $('#AnakSudahMeninggal').val(1)
        //     $('#UsiaAnak').val('')
        //     ModeEditFertilitas = false
        //   } else {
        //     var Anak = {}
        //     Anak['AnakLahirHidup'] = $('#AnakLahirHidup').val()
        //     Anak['AnakMasihHidup'] = $('#AnakMasihHidup').val()
        //     Anak['AnakSudahMeninggal'] = $('#AnakSudahMeninggal').val()
        //     Anak['UsiaAnak'] = $('#UsiaAnak').val()
        //     Fertilitas.push(Anak)	
        //     TabelFertilitas(Fertilitas)
        //   }
        // })

        // $(document).on("click",".EditFertilitas",function(){
        //   var Edit = Fertilitas[$(this).attr('EditFertilitas')]
        //   $('#AnakLahirHidup').val(Edit.AnakLahirHidup)
        //   $('#AnakMasihHidup').val(Edit.AnakMasihHidup)
        //   $('#AnakSudahMeninggal').val(Edit.AnakSudahMeninggal)
        //   $('#UsiaAnak').val(Edit.UsiaAnak)
        //   IdEditAnak = $(this).attr('EditFertilitas')
        //   ModeEditFertilitas = true
        // })

        // $(document).on("click",".HapusFertilitas",function(){
        //   var Hapus = $(this).attr('HapusFertilitas')
				// 	var Konfirmasi = confirm("Yakin Ingin Menghapus?")
      	// 	if (Konfirmasi == true) {
        //     Fertilitas.splice(Hapus,1)
        //     TabelFertilitas(Fertilitas)
				// 	}
        // })

      })

      // function TabelKK(kk) {
      //   var Status = ['Suami','Istri','Anak Ke 1','Anak Ke 2','Anak Ke 3','Anak Ke 4','Anak Ke 5','Anak Ke 6','Anak Ke 7','Anak Ke 8','Anak Ke 9','Anak Ke 10','Anak Ke 11','Anak Ke 12']
      //   var Gender = ['Laki-Laki','Perempuan']
      //   var	rows = '';
      //   $.each(kk, function(key,value) {
      //     rows = rows + '<tr>';
      //     rows = rows + '<td class="text-center align-middle">'+(key+1)+'</td>';
      //     rows = rows + '<td class="align-middle">'+value.Nama+'</td>';
      //     rows = rows + '<td class="align-middle">'+Status[value.Status-1]+'</td>';
      //     rows = rows + '<td class="align-middle">'+Gender[value.Gender-1]+'</td>';
      //     rows = rows + '<td class="align-middle">'+value.Usia+'</td>';
      //     rows = rows + '<td class="text-center align-middle">';
      //       rows = rows + '<button Edit="'+key+'" class="btn btn-sm btn-warning mr-1 Edit"><i class="fas fa-edit"></i></button>';
      //       rows = rows + '<button Hapus="'+key+'" class="btn btn-sm btn-danger ml-1 Hapus"><i class="fas fa-trash"></i></button>';
      //     rows = rows + '</td>';
      //     rows = rows + '</tr>';
      //   })
      //   $("#KK").html(rows)
      // }

      // function TabelFertilitas(fertilitas) {
      //   var OpsiFertilitas = ['Ya','Tidak']
      //   var	rows = ''
      //   $.each(fertilitas, function(key,value) {
      //     rows = rows + '<tr>';
      //     rows = rows + '<td class="text-center align-middle">'+(key+1)+'</td>';
      //     rows = rows + '<td class="text-center align-middle">'+(key+1)+'</td>';
      //     rows = rows + '<td class="align-middle">'+OpsiFertilitas[value.AnakLahirHidup-1]+'</td>';
      //     rows = rows + '<td class="align-middle">'+OpsiFertilitas[value.AnakMasihHidup-1]+'</td>';
      //     rows = rows + '<td class="align-middle">'+OpsiFertilitas[value.AnakSudahMeninggal-1]+'</td>';
      //     rows = rows + '<td class="align-middle">'+value.UsiaAnak+'</td>';
      //     rows = rows + '<td class="text-center align-middle">';
      //       rows = rows + '<button EditFertilitas="'+key+'" class="btn btn-sm btn-warning mr-1 EditFertilitas"><i class="fas fa-edit"></i></button>';
      //       rows = rows + '<button HapusFertilitas="'+key+'" class="btn btn-sm btn-danger ml-1 HapusFertilitas"><i class="fas fa-trash"></i></button>';
      //     rows = rows + '</td>';
      //     rows = rows + '</tr>';
      //   })
      //   $("#Fertilitas").html(rows)
      // }
    </script>
  </body>
</html>