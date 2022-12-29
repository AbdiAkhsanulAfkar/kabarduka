<div class="panel panel-default">
<div class="panel-heading">
      Tambah Data
</div>
<div class="panel-body">
    <div class="row">
        <div class="col-md-12">
            <form method="POST">

				<div class="form-group">
                    <label>Nama Provinsi</label>
                    <input class="form-control" name="nama_provinsi" />
                        </div>
						<div>
								<input type="submit" name="simpan" value="Simpan" class="btn btn-primary">	
							</div>
						</div>							
					</form>
				</div>
            </div>
        </div> 
</div>
<?php
   $id_provinsi = @$_POST ['id_provinsi'];
   $nama_provinsi = @$_POST ['nama_provinsi'];
   $simpan = @$_POST ['simpan'];
   if($simpan) {
	  $sql = $koneksi->query("insert into tb_mprovinsi (id_provinsi,nama_provinsi)
	  values('$id_provinsi', '$nama_provinsi')");
	  if($sql) {
		  ?>
		    <script type="text/javascript">
			     alert("Data Berhasil Disimpan");	
                 window.location.href="?page=provinsi";
		    </script>
		<?php
	  }
   }
?>