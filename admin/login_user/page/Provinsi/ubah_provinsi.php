<?php
    $id_provinsi = @$_GET['id'];
    $sql = $koneksi->query("select * from tb_mprovinsi where id_provinsi='$id_provinsi'");
    $tampil = $sql->fetch_assoc();
    $nama_provinsi = $tampil ['nama_provinsi'];
?>
<div class="panel panel-default">
<div class="panel-heading">
      Ubah Data
</div>
<div class="panel-body">
    <div class="row">
        <div class="col-md-12">
            <form method="POST">
                <div class="form-group">
                    <label>ID Provinsi</label>
                    <input class="form-control" name="id_provinsi" value="<?php echo $tampil['id_provinsi']?>" readonly/>
                </div>
				<div class="form-group">
                    <label>Nama Provinsi</label>
                    <input class="form-control" name="nama_provinsi" value="<?php echo $tampil['nama_provinsi']?>"/>
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
    $sql = $koneksi->query("update tb_mprovinsi set nama_provinsi='$nama_provinsi' where id_provinsi='$id_provinsi'");
		  ?>
		    <script type="text/javascript">
			     alert("Data Berhasil Disimpan");	
                 window.location.href="?page=provinsi";
		    </script>
		<?php
	  }
?>