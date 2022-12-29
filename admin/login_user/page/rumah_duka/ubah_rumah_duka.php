<?php
$id_rumah_duka = @$_GET['id'];
$sql = $koneksi->query("SELECT * FROM tb_mrumah_duka INNER JOIN tb_mkota ON tb_mrumah_duka.id_kota = tb_mkota.id_kota WHERE id_rumah_duka='$id_rumah_duka'");
$tampil = $sql->fetch_assoc();
$id_kota = $tampil['id_kota'];
$nama_rumah_duka = $tampil['nama_rumah_duka'];
$alamat_rumah_duka = $tampil['alamat_rumah_duka'];
$telp_rumah_duka = $tampil['telp_rumah_duka'];
$wa_rumah_duka = $tampil['wa_rumah_duka'];
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
                        <label>Nama Rumah Duka</label>
                        <input class="form-control" name="nama_rumah_duka" value="<?php echo $tampil['nama_rumah_duka'] ?>" />
                    </div>

                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Id Kota</label>
                        <select class="form-control" name="id_kota" id="exampleFormControlSelect1">
                            <?php

                            $sql = "select * from tb_mkota";

                            $hasil = mysqli_query($koneksi, $sql);
                            $no = 0;
                            while ($data = mysqli_fetch_array($hasil)) {
                                $no++;
                            ?>
                                <option value="<?php echo $data['id_kota']; ?>"><?php echo $data['id_kota'], " - ", $data['nama_kota']; ?></option>
                            <?php
                            }
                            ?>
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Alamat Rumah Duka</label>
                        <input class="form-control" name="alamat_rumah_duka" value="<?php echo $tampil['alamat_rumah_duka'] ?>" />
                    </div>
                    <div class="form-group">
                        <label>Telp Rumah Duka</label>
                        <input class="form-control" name="telp_rumah_duka" value="<?php echo $tampil['telp_rumah_duka'] ?>" />
                    </div>
                    <div class="form-group">
                        <label>WA Rumah Duka</label>
                        <input class="form-control" name="wa_rumah_duka" value="<?php echo $tampil['wa_rumah_duka'] ?>" />
                    </div>
                    <div>
                        <input type="submit" name="simpan" value="Simpan" class="btn btn-primary">
                    </div>
                </form>
            </div>
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
$simpan = @$_POST['simpan'];
if ($simpan) {
    $sql = $koneksi->query("UPDATE tb_mrumah_duka set id_kota='$id_kota',nama_rumah_duka='$nama_rumah_duka',alamat_rumah_duka='$alamat_rumah_duka',telp_rumah_duka='$telp_rumah_duka',wa_rumah_duka='$wa_rumah_duka'
	where id_rumah_duka='$id_rumah_duka'");
?>
    <script type="text/javascript">
        alert("Data Berhasil Disimpan");
        window.location.href = "?page=rumah_duka";
    </script>
<?php
}
?>