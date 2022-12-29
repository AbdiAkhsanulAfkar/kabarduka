<?php
$id_produk = @$_GET['id'];
$sql = $koneksi->query("select * from tb_mbunga_papan where id_produk='$id_produk'");
$tampil = $sql->fetch_assoc();
$id_florist = $tampil['id_florist'];
$nama_produk = $tampil['nama_produk'];
$harga_produk = $tampil['harga_produk'];
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
                        <label>ID Produk</label>
                        <input class="form-control" name="id_produk" value="<?php echo $tampil['id_produk'] ?>" readonly />
                    </div>

                    <div class="form-group">
                        <label>ID Florist</label>
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
                        <input class="form-control" name="nama_produk" value="<?php echo $tampil['nama_produk'] ?>" />
                    </div>
                    <div class="form-group">
                        <label>Harga Produk</label>
                        <input class="form-control" name="harga_produk" value="<?php echo $tampil['harga_produk'] ?>" />
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
    $sql = $koneksi->query("update tb_mbunga_papan set id_florist='$id_florist',nama_produk='$nama_produk',harga_produk='$harga_produk' where id_produk='$id_produk'");
?>
    <script type="text/javascript">
        alert("Data Berhasil Disimpan");
        window.location.href = "?page=bunga_papan";
    </script>
<?php
}
?>