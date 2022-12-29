<div class="panel panel-default">
    <div class="panel-heading">
        Tambah Data
    </div>
    <div class="panel-body">
        <div class="row">
            <div class="col-md-12">
                <form method="POST">

                    <div class="form-group">
                        <label>Florist</label>
                        <select class="form-control" name="id_florist" id="exampleFormControlSelect1">
                            <?php

                            $sql = "select * from tb_mflorist";

                            $hasil = mysqli_query($koneksi, $sql);
                            $no = 0;
                            while ($data = mysqli_fetch_array($hasil)) {
                                $no++;
                            ?>
                                <option value="<?php echo $data['id_florist']; ?>"><?php echo $data['id_florist'], " - ", $data['nama_florist']; ?></option>
                            <?php
                            }
                            ?>
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Nama Produk</label>
                        <input class="form-control" name="nama_produk" />
                    </div>
                    <div class="form-group">
                        <label>Harga Produk</label>
                        <input class="form-control" name="harga_produk" />
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

$id_produk = @$_POST['id_produk'];
$id_florist = @$_POST['id_florist'];
$nama_produk = @$_POST['nama_produk'];
$harga_produk = @$_POST['harga_produk'];
$simpan = @$_POST['simpan'];
if ($simpan) {
    $sql = $koneksi->query("insert into tb_mbunga_papan (id_florist,nama_produk,harga_produk)
	  values( '$id_florist', '$nama_produk', '$harga_produk')");
    if ($sql) {
?>
        <script type="text/javascript">
            alert("Data Berhasil Disimpan");
            window.location.href = "?page=bunga_papan";
        </script>
<?php
    }
}
?>