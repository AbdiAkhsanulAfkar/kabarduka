<?php
$id_profile = @$_GET['id'];
$sql = $koneksi->query("select * from tb_profile where id_profile='$id_profile'");
$tampil = $sql->fetch_assoc();
$nama = $tampil['nama'];
$alamat = $tampil['alamat'];
$pimpinan = $tampil['pimpinan'];
$tanggal_berdiri = $tampil['tanggal_berdiri'];
$bidang = $tampil['bidang'];
$situs = $tampil['situs'];
?>
<div class="panel panel-default">
    <div class="panel-heading">
        Data Profile
    </div>
    <div class="panel-body">
        <div class="row">
            <div class="col-md-12">
                <form method="POST">
                    <div class="form-group">
                        <label>ID Profile</label>
                        <input class="form-control" name="id_profile" value="<?php echo $tampil['id_profile'] ?>" readonly />
                    </div>
                    <div class="form-group">
                        <label>Nama Institusi</label>
                        <input class="form-control" name="nama" value="<?php echo $tampil['nama'] ?>" />
                    </div>
                    <div class="form-group">
                        <label>Alamat Institusi</label>
                        <input class="form-control" name="alamat" value="<?php echo $tampil['alamat'] ?>" />
                    </div>
                    <div class="form-group">
                        <label>Pimpinan</label>
                        <input class="form-control" name="pimpinan" value="<?php echo $tampil['pimpinan'] ?>" />
                    </div>
                    <div class="form-group">
                        <label>Tanggal Berdiri</label>
                        <input class="form-control" name="tanggal_berdiri" value="<?php echo $tampil['tanggal_berdiri'] ?>" />
                    </div>
                    <div class="form-group">
                        <label>Bidang</label>
                        <input class="form-control" name="bidang" value="<?php echo $tampil['bidang'] ?>" />
                    </div>
                    <div class="form-group">
                        <label>Situs</label>
                        <input class="form-control" name="situs" value="<?php echo $tampil['situs'] ?>" />
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
$id_profile = @$_POST['id_profile'];
$nama  = @$_POST['nama'];
$alamat  = @$_POST['alamat'];
$pimpinan = @$_POST['pimpinan'];
$tanggal_berdiri  = @$_POST['tanggal_berdiri'];
$bidang  = @$_POST['bidang'];
$situs  = @$_POST['situs'];
$simpan = @$_POST['simpan'];
if ($simpan) {
    $sql = $koneksi->query("update tb_profile set nama='$nama',alamat='$alamat',pimpinan='$pimpinan', tanggal_berdiri='$tanggal_berdiri', bidang='$bidang', situs='$situs' where id_profile='$id_profile'");
?>
    <script type="text/javascript">
        alert("Data Berhasil Disimpan");
        window.location.href = "?page=transaksi";
    </script>
<?php
}
?>