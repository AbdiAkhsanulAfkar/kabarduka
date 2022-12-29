<?php
$id_florist = @$_GET['id'];
$sql = $koneksi->query("select * from tb_mflorist where id_florist='$id_florist'");
$tampil = $sql->fetch_assoc();
$id_kota = $tampil['id_kota'];
$nama_florist = $tampil['nama_florist'];
$alamat_florist = $tampil['alamat_florist'];
$wa_florist = $tampil['wa_florist'];
$bank_florist = $tampil['bank_florist'];
$ac_bank_florist = $tampil['ac_bank_florist'];
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
                        <label>ID Florist</label>
                        <input class="form-control" name="id_florist" value="<?php echo $tampil['id_florist'] ?>" readonly />
                    </div>
                    <div class="form-group">
                        <label>ID Kota</label>
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
                        <label>Nama Florist</label>
                        <input class="form-control" name="nama_florist" value="<?php echo $tampil['nama_florist'] ?>" />
                    </div>
                    <div class="form-group">
                        <label>Alamat Florist</label>
                        <input class="form-control" name="alamat_florist" value="<?php echo $tampil['alamat_florist'] ?>" />
                    </div>
                    <div class="form-group">
                        <label>WA Florist</label>
                        <input class="form-control" name="wa_florist" value="<?php echo $tampil['wa_florist'] ?>" />
                    </div>
                    <div class="form-group">
                        <label>Bank Florist</label>
                        <input class="form-control" name="bank_florist" value="<?php echo $tampil['bank_florist'] ?>" />
                    </div>
                    <div class="form-group">
                        <label>AC Bank Florist</label>
                        <input class="form-control" name="ac_bank_florist" value="<?php echo $tampil['ac_bank_florist'] ?>" />
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
$id_florist = @$_POST['id_florist'];
$id_kota = @$_POST['id_kota'];
$nama_florist = @$_POST['nama_florist'];
$alamat_florist = @$_POST['alamat_florist'];
$wa_florist = @$_POST['wa_florist'];
$bank_florist = @$_POST['bank_florist'];
$ac_bank_florist = @$_POST['ac_bank_florist'];
$simpan = @$_POST['simpan'];
if ($simpan) {
    $sql = $koneksi->query("update tb_mflorist set  id_kota='$id_kota',nama_florist='$nama_florist',alamat_florist='$alamat_florist',wa_florist='$wa_florist',bank_florist='$bank_florist',ac_bank_florist='$ac_bank_florist'
	where id_florist='$id_florist'");
?>
    <script type="text/javascript">
        alert("Data Berhasil Disimpan");
        window.location.href = "?page=florist";
    </script>
<?php
}
?>