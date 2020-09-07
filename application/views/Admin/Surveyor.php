<div class="content-wrapper">
      <!-- Main content -->
        <section class="content">
          <div class="container-fluid">
            <div class="row"> 
              <div class="col-sm-12 mt-2">
                <div class="container-fluid border border-warning rounded bg-light">
                  <div class="row align-items-center">
                    <div class="col-sm-12 my-2 ">    
                    <button type="button" class="btn btn-primary text-light mb-2" data-toggle="modal" data-target="#ModalInputSurveyor"><i class="fa fa-plus"></i> <b>Surveyor</b></button> 
                      <div class="table-responsive mb-2">
                        <table id="TabelSurveyor" class="table table-bordered table-striped">
                          <thead class="bg-warning">
                            <tr>
                              <th class="text-center align-middle">No</th>
                              <th class="align-middle">NIK</th>
                              <th class="align-middle">Nama</th>
                              <th class="text-center align-middle">Aksi</th>
                            </tr>
                          </thead>
                          <tbody>
                            <?php $No = 1; foreach ($Surveyor as $key) { ?>
                              <tr>	
                                <td class="text-center align-middle"><?=$No++?></td>
                                <td class="align-middle"><?=$key['NIK']?></td>
                                <td class="align-middle"><?=$key['Nama']?></td>
                                <td class="text-center align-middle">
                                  <button Edit="<?=$key['NIK']."/".$key['Nama']?>" class="btn btn-sm btn-warning Edit"><i class="fas fa-edit"></i></button>
                                  <button Hapus="<?=$key['NIK']?>" class="btn btn-sm btn-danger Hapus"><i class="fas fa-trash"></i></button>
                                </td>
                              </tr>
                            <?php } ?>
                          </tbody>
                        </table>
                      </div> 
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
    </div>
    <div class="modal fade" id="ModalInputSurveyor">
      <div class="modal-dialog">
        <div class="modal-content bg-warning">
          <div class="modal-body">
            <div class="input-group input-group-sm mb-2">
              <div class="input-group-prepend">
                <span class="input-group-text bg-primary text-primary"><b>NIK</b></span>
              </div>
              <input type="text" class="form-control" id="NIK" data-inputmask='"mask": "9999999999999999"' data-mask>
            </div>
            <div class="input-group input-group-sm">
              <div class="input-group-prepend">
                <span class="input-group-text bg-primary text-primary"><b>Nama</b></span>
              </div>
              <input type="text" class="form-control" id="Nama" placeholder="Nama Surveyor">
            </div>
          </div>
          <div class="modal-footer justify-content-between">
            <button type="button" class="btn btn-danger" data-dismiss="modal"><b>Tutup</b></button>
            <button type="submit" class="btn btn-success" id="Input"><b>Simpan</b></button>
          </div>
        </div>
      </div>
    </div>
    <div class="modal fade" id="ModalEditSurveyor">
      <div class="modal-dialog">
        <div class="modal-content bg-warning">
          <div class="modal-body">
            <div class="input-group input-group-sm mb-2">
              <div class="input-group-prepend">
                <span class="input-group-text bg-primary text-primary"><b>NIK</b></span>
              </div>
              <input type="hidden" class="form-control" id="NIKLama">
              <input type="text" class="form-control" id="EditNIK" data-inputmask='"mask": "9999999999999999"' data-mask>
            </div>
            <div class="input-group input-group-sm">
              <div class="input-group-prepend">
                <span class="input-group-text bg-primary text-primary"><b>Nama</b></span>
              </div>
              <input type="text" class="form-control" id="EditNama" placeholder="Nama Surveyor">
            </div>
          </div>
          <div class="modal-footer justify-content-between">
            <button type="button" class="btn btn-danger" data-dismiss="modal"><b>Tutup</b></button>
            <button type="submit" class="btn btn-success" id="Edit"><b>Simpan</b></button>
          </div>
        </div>
      </div>
    </div>
    <script src="../bootstrap/js/jquery.min.js"></script>
    <script src="../bootstrap/js/popper.min.js" ></script>
    <script src="../bootstrap/js/bootstrap.min.js"></script>
    <script src="../bootstrap/js/adminlte.min.js"></script>
    <script src="../bootstrap/datatables/jquery.dataTables.js"></script>
		<script src="../bootstrap/datatables-bs4/js/dataTables.bootstrap4.js"></script>
		<script src="../bootstrap/inputmask/min/jquery.inputmask.bundle.min.js"></script>
		<script>
			jQuery(document).ready(function($) {

				$('[data-mask]').inputmask()

				var BaseURL = '<?=base_url()?>';

        $('#TabelSurveyor').DataTable( {
					dom:'lfrtip',
					"ordering": false,
          "lengthMenu": [ 5, 10, 20, 30 ],
					"language": {
						"paginate": {
							'previous': '<b class="text-primary"><</b>',
							'next': '<b class="text-primary">></b>'
						}
					}
				})

				$("#Input").click(function() {
          if (isNaN($("#NIK").val())) {
            alert('Mohon Isi NIK 16 Angka!')
          } else if ($("#Nama").val() == "") {
            alert('Mohon Isi Nama Surveyor!')
          } else {
            var Surveyor = { NIK: $("#NIK").val(),
                             Nama: $("#Nama").val() }
            $.post(BaseURL+"Admin/InputSurveyor", Surveyor).done(function(Respon) {
              if (Respon == '1') {
                window.location = BaseURL + "Admin/Surveyor"
              }
              else {
                alert(Respon)
              }
            })
          }
        })

        $(document).on("click",".Edit",function(){
					var Data = $(this).attr('Edit')
					var Pisah = Data.split("/");
					$('#NIKLama').val(Pisah[0])
          $('#EditNIK').val(Pisah[0])
          $('#EditNama').val(Pisah[1])
					$('#ModalEditSurveyor').modal("show")
				});

        $("#Edit").click(function() {
          if (isNaN($("#EditNIK").val())) {
            alert('Mohon Isi NIK 16 Angka!')
          } else if ($("#EditNama").val() == "") {
            alert('Mohon Isi Nama Surveyor!')
          } else {
            var Surveyor = { NIKLama: $("#NIKLama").val(),
                             NIK: $("#EditNIK").val(),
                             Nama: $("#EditNama").val() }
            $.post(BaseURL+"Admin/EditSurveyor", Surveyor).done(function(Respon) {
              if (Respon == '1') {
                window.location = BaseURL + "Admin/Surveyor"
              }
              else {
                alert(Respon)
              }
            })
          }
        })

        $(document).on("click",".Hapus",function(){
          var Hapus = {NIK:$(this).attr('Hapus')}
					var Konfirmasi = confirm("Yakin Ingin Menghapus?");
      		if (Konfirmasi == true) {
						$.post(BaseURL+"Admin/HapusSurveyor", Hapus).done(function(Respon) {
							if (Respon == '1') {
								window.location = BaseURL + "Admin/Surveyor"
							} else {
								alert(Respon)
							}
						})
					}
				})
			})
		</script>
  </body>
</html>