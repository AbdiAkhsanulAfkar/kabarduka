<?php

$id_kota = @$_POST['kota'];
$nama_florist = @$_POST['nama_florist'];
$alamat_florist = @$_POST['alamat_florist'];
$wa_florist = @$_POST['wa_florist'];
$bank_florist = @$_POST['bank_florist'];
$ac_bank_florist = @$_POST['ac_bank_florist'];
$sts = @$_POST['status'];
$simpan = @$_POST['simpan'];

include '../koneksi.php';
if ($koneksi->connect_error) {
    echo "$koneksi->connect_error";
    die("Connection Failed : " . $koneksi->connect_error);
} else {
    $stmt = $koneksi->prepare("insert into tb_mflorist(id_kota, nama_florist, alamat_florist, wa_florist, bank_florist, ac_bank_florist, status) values(?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sssssss", $id_kota, $nama_florist, $alamat_florist, $wa_florist, $bank_florist, $ac_bank_florist, $sts);
    $execval = $stmt->execute();
    echo $execval;
    $stmt->close();
    $koneksi->close();
?>
    <script type="text/javascript">
        alert("Data Berhasil Disimpan");
        window.location.href = "Florist.php";
    </script>
<?php
}
?>