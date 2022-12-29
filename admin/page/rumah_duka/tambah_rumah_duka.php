<div class="panel panel-default">
    <div class="panel-heading">
        Tambah Data
    </div>
    <div class="panel-body">
        <div class="row">
            <div class="col-md-12">
                <form method="POST">                    
                    <div class="form-group">
                        <label>Nama Rumah Duka</label>
                        <input class="form-control" name="nama_rumah_duka" />
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Kota</label>
                        <select class="form-control" name="id_kota" id="exampleFormControlSelect1">
                            <?php

                            //Perintah sql untuk menampilkan semua data pada tabel jurusan
                            $sql = "select * from tb_mkota";

                            $hasil = mysqli_query($koneksi, $sql);
                            $no = 0;
                            while ($data = mysqli_fetch_array($hasil)) {
                                $no++;
                            ?>
                                <option value="<?php echo $data['id_kota']; ?>"><?php echo $data['id_kota']," - ", $data['nama_kota']; ?></option>
                            <?php
                            }
                            ?>
                        </select>
                    </div>
                    
                    <div class="form-group">
                        <label>Alamat Rumah Duka</label>
                        <input class="form-control" name="alamat_rumah_duka" />
                    </div>
                    <div class="form-group">
                        <label>Telp Rumah Duka</label>
                        <input class="form-control" name="telp_rumah_duka" />
                    </div>
                    <div class="form-group">
                        <label>WA Rumah Duka</label>
                        <input class="form-control" name="wa_rumah_duka" />
                    </div>
                    <div class="form-group">
                        <label>Latitude</label>
                        <input class="form-control" name="latitude" />
                    </div>
                    <div class="form-group">
                        <label>Longitude</label>
                        <input class="form-control" name="longitude" />
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
$id_rumah_duka = @$_POST['id_rumah_duka'];
$id_kota = @$_POST['id_kota'];
$nama_rumah_duka = @$_POST['nama_rumah_duka'];
$alamat_rumah_duka = @$_POST['alamat_rumah_duka'];
$telp_rumah_duka = @$_POST['telp_rumah_duka'];
$wa_rumah_duka = @$_POST['wa_rumah_duka'];
$latitude = @$_POST['latitude'];
$longitude = @$_POST['longitude'];
$simpan = @$_POST['simpan'];
if ($simpan) {
    $sql = $koneksi->query("insert into tb_mrumah_duka (id_rumah_duka,id_kota,nama_rumah_duka,alamat_rumah_duka,telp_rumah_duka,wa_rumah_duka,latitude,longitude)
	  values('$id_rumah_duka', '$id_kota', '$nama_rumah_duka', '$alamat_rumah_duka', '$telp_rumah_duka', '$wa_rumah_duka', '$latitude', '$longitude')");
    if ($sql) {
?>
        <script type="text/javascript">
            alert("Data Berhasil Disimpan");
            window.location.href = "?page=rumah_duka";
        </script>
<?php
    }
}
?>