<?php
$id = @$_GET['id'];
$sql = $koneksi->query("select * from peraturan_rumahduka where id='$id'");
$tampil = $sql->fetch_assoc();
$id = $tampil['id'];
$peraturan = $tampil['peraturan'];
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
                        <label>Nomer</label>
                        <input class="form-control" name="id" value="<?php echo $tampil['id'] ?>" readonly />
                    </div>

                    <div class="form-group">
                        <label>Nama Produk</label>
                        <textarea class="form-control" name="peraturan" id="exampleFormControlTextarea1" rows="3"><?php echo $tampil['peraturan']; ?></textarea>
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
$id = @$_POST['id'];
$peraturan = @$_POST['peraturan'];
$simpan = @$_POST['simpan'];
if ($simpan) {
    $sql = $koneksi->query("update peraturan_rumahduka set id='$id',peraturan='$peraturan' where id='$id'");
?>
    <script type="text/javascript">
        alert("Data Berhasil Disimpan");
        window.location.href = "?page=peraturan_rumahduka";
    </script>
<?php
}
?>