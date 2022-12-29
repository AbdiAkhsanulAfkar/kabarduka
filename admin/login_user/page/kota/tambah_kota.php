<div class="panel panel-default">
    <div class="panel-heading">
        Tambah Data
    </div>
    <div class="panel-body">
        <div class="row">
            <div class="col-md-12">
                <form method="POST">
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
                        <input class="form-control" name="nama_kota" />
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
$nama_provinsi = @$_POST['namaprov'];
$nama_kota = @$_POST['nama_kota'];
$simpan = @$_POST['simpan'];
if ($simpan) {
    $sql = $koneksi->query("insert into tb_mkota values('$id_kota', '$nama_provinsi', '$nama_kota')");
    if ($sql) {
?>
        <script type="text/javascript">
            alert("Data Berhasil Disimpan");
            window.location.href = "?page=kota";
        </script>
<?php
    }
}
?>