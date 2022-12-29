<div class="panel panel-default">
    <div class="panel-heading">
        Tambah Data
    </div>
    <div class="panel-body">
        <div class="row">
            <div class="col-md-12">
                <form method="POST">
                    <div class="form-group">

                    </div>
                    <div class="form-group">
                        <label>Nama Kota</label>
                        <select class="form-control" name="id_kota" id="exampleFormControlSelect1">
                            <?php

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
                        <label>Nama Florist</label>
                        <input class="form-control" name="nama_florist" />
                    </div>
                    <div class="form-group">
                        <label>Alamat Florist</label>
                        <input class="form-control" name="alamat_florist" />
                    </div>
                    <div class="form-group">
                        <label>WA Florist</label>
                        <input class="form-control" name="wa_florist" />
                    </div>
                    <div class="form-group">
                        <label>Bank Florist</label>
                        <input class="form-control" name="bank_florist" />
                    </div>
                    <div class="form-group">
                        <label>AC Bank Florist</label>
                        <input class="form-control" name="ac_bank_florist" />
                    </div>
                    <div hidden="true" class="form-group">
                        <label>Status</label>
                        <select class="form-control" name="status" id="exampleFormControlSelect1">
                        <option value="Belum">Tidak Aktif</option>
                        </select>
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
$nama_florist = @$_POST['nama_florist'];
$alamat_florist = @$_POST['alamat_florist'];
$wa_florist = @$_POST['wa_florist'];
$bank_florist = @$_POST['bank_florist'];
$ac_bank_florist = @$_POST['ac_bank_florist'];
$stts = @$_POST['status'];
$simpan = @$_POST['simpan'];
if ($simpan) {
    $sql = $koneksi->query("insert into tb_mflorist (id_kota,nama_florist,alamat_florist,wa_florist,bank_florist,ac_bank_florist,status)
	  values( '$id_kota', '$nama_florist', '$alamat_florist', '$wa_florist', '$bank_florist', '$ac_bank_floris','$stts')");
    if ($sql) {
?>
        <script type="text/javascript">
            alert("Data Berhasil Disimpan");
            window.location.href = "?page=florist";
        </script>
<?php
    }
}
?>