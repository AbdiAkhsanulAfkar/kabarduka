<?php
$id = @$_GET['id'];
$sql = $koneksi->query("SELECT * from kirim_bunga INNER JOIN tb_mkota on kirim_bunga.id_kota = tb_mkota.id_kota JOIN tb_mflorist ON kirim_bunga.id_florist = tb_mflorist.id_florist JOIN tb_mbunga_papan ON kirim_bunga.id_produk = tb_mbunga_papan.id_produk WHERE id='$id'");
$tampil = $sql->fetch_assoc();

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
                        <label>Nama Pengirim</label>
                        <input class="form-control" name="nama_pengirim" value="<?php echo $tampil['nama_pengirim'] ?>" disabled />
                    </div>
                    <div class="form-group">
                        <label>Nomer Pengirim</label>
                        <input class="form-control" name="no_pengirim" value="<?php echo $tampil['no_pengirim'] ?>" disabled />
                    </div>
                    <div class="form-group">
                        <label>Alamat Pengirim</label>
                        <input class="form-control" name="alamat_pengirim" value="<?php echo $tampil['alamat_pengirim'] ?>" disabled />
                    </div>
                    <div class="form-group">
                        <label>Nama Almarhum</label>
                        <input class="form-control" name="nama_almarhum" value="<?php echo $tampil['nama_almarhum'] ?>" disabled />
                    </div>
                    <div class="form-group">
                        <label>Alamat Penerima</label>
                        <input class="form-control" name="alamat_penerima" value="<?php echo $tampil['alamat_penerima'] ?>" disabled />
                    </div>
                    <div class="form-group">
                        <label>Kontak Keluarga</label>
                        <input class="form-control" name="kontak_keluarga" value="<?php echo $tampil['kontak_keluarga'] ?>" disabled />
                    </div> 
                    <div class="form-group">
                        <label>Kota</label>
                        <input class="form-control" name="nama_kota" value="<?php echo $tampil['nama_kota'] ?>" disabled />
                    </div>     
                    <div class="form-group">
                        <label>florist</label>
                        <input class="form-control" name="nama_florist" value="<?php echo $tampil['nama_florist'] ?>" disabled />
                    </div>      
                    <div class="form-group">
                        <label>produk</label>
                        <input class="form-control" name="nama_produk" value="<?php echo $tampil['nama_produk'] ?>" disabled />
                    </div>
                    <button type="button" class="btn btn-primary" style="float: right;">
                    <a href="http://localhost/admin_kabarduka/?page=kirim_bunga" style="color: white; text-decoration: none;">back</a>
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
