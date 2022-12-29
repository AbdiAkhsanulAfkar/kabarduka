<?php
$id_kota = @$_GET['id'];
$sql = $koneksi->query("SELECT * FROM tb_mkota INNER JOIN tb_mprovinsi ON tb_mkota.id_provinsi = tb_mprovinsi.id_provinsi WHERE id_kota='$id_kota'");
$tampil = $sql->fetch_assoc();
$id_provinsi = $tampil['id_provinsi'];
$nama_provinsi = $tampil['nama_provinsi'];
$nama_kota = $tampil['nama_kota'];
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
                        <label>ID Kota</label>
                        <input class="form-control" name="id_kota" value="<?php echo $tampil['id_kota'] ?>" readonly />
                    </div>

                    <div class="form-group">
                     <label>Nama Provinsi</label>
                    <div class="form-group">
                        <select class="form-control" name="namaprov" id="namaprov">
                            <?php

                            $sql = "select * from tb_mprovinsi";

                            $hasil = mysqli_query($koneksi, $sql);
                            $no = 0;
                            while ($tampil = mysqli_fetch_assoc($hasil)) {
                                $no++;
                            ?>
                                <option value="<?php echo $tampil['id_provinsi']; ?>"><?php echo $tampil['nama_provinsi']; ?></option>
                            <?php
                            }
                            ?>
                        </select>
                    <div class="form-group">
                        <label>Nama Kota</label>
                        <?php

                            $sql = "select * from tb_mkota where id_kota = '$id_kota'";

                            $hasil = mysqli_query($koneksi, $sql);
                            $no = 0;
                            while ($tampil = mysqli_fetch_assoc($hasil)) {
                                $no++;
                            ?>
                                <input class="form-control" name="nama_kota" value="<?php echo $tampil['nama_kota'] ?>" />
                            <?php
                            }
                            ?>
                        
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
$id_kota = @$_POST['id_kota'];
$namaprov = @$_POST['namaprov'];
$nama_kota = @$_POST['nama_kota'];
$simpan = @$_POST['simpan'];
if ($simpan) {
    $sql = $koneksi->query("update tb_mkota set id_provinsi='$namaprov',nama_kota='$nama_kota' where id_kota='$id_kota'");
?>

    <script type="text/javascript">
        alert("Data Berhasil Disimpan");
        window.location.href = "?page=kota";
    </script>
<?php
}
?>