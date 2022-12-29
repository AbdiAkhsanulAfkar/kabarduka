<?php
$idalmarhum = $_POST['id_almarhum'];
$idrumahduka = $_POST['rumahduka'];
$nama = $_POST['nama_almarhum'];
$image = $_FILES['foto']['tmp_name'];
$imgContent = addslashes(file_get_contents($image));
$lahir = $_POST['thn1'] . '-' . $_POST['bln1'] . '-' . $_POST['tgl1'];
$kematian = $_POST['thn2'] . '-' . $_POST['bln2'] . '-' . $_POST['tgl2'];
$upacara = $_POST['thn'] . '-' . $_POST['bln'] . '-' . $_POST['tgl'];
$alamat = $_POST['alamat'];
$kontak = $_POST['kontak_keluarga'];
$sts = $_POST['status'];


include '../koneksi.php';
if ($koneksi->connect_error) {
    echo "$koneksi->connect_error";
    die("Connection Failed : " . $koneksi->connect_error);
} else {
    $stmt = $koneksi->prepare("INSERT into tb_almarhum VALUES ('$idalmarhum','$idrumahduka','$nama','$imgContent','$lahir','$kematian','$alamat','$kontak','$upacara','$sts')");
    $execval = $stmt->execute();
    echo $execval;
    $stmt->close();
    $koneksi->close();
?>
    <script type="text/javascript">
        alert("Data Berhasil Disimpan");
        window.location.href = "Kabar-duka.php";
    </script>
<?php
}
?>