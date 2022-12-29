<?php
$id_rumah_duka = @$_POST['id_rumah_duka'];
$id_kota = @$_POST['kota'];
$nama_rumah_duka = @$_POST['nama_rumah_duka'];
$alamat_rumah_duka = @$_POST['alamat_rumah_duka'];
$telp_rumah_duka = @$_POST['telp_rumah_duka'];
$wa_rumah_duka = @$_POST['wa_rumah_duka'];
$latitude = @$_POST['latitude'];
$longitude = @$_POST['longitude'];

include '../koneksi.php';
if ($koneksi->connect_error) {
    echo "$koneksi->connect_error";
    die("Connection Failed : " . $koneksi->connect_error);
} else {
    $stmt = $koneksi->prepare("insert into tb_mrumah_duka(id_kota, nama_rumah_duka, alamat_rumah_duka, telp_rumah_duka, wa_rumah_duka, latitude, longitude) values(?,?,?, ?, ?, ?, ?)");
    $stmt->bind_param("sssssss", $id_kota, $nama_rumah_duka, $alamat_rumah_duka, $telp_rumah_duka, $wa_rumah_duka, $latitude, $longitude);
    $execval = $stmt->execute();
    echo $execval;
    $stmt->close();
    $koneksi->close();

?>
    <script type="text/javascript">
        alert("Data Berhasil Disimpan");
        window.location.href = "Rumah-duka.php";
    </script>
<?php

}
?>