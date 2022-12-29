<?php
    $statuskb = @$_POST['status'];
    $nama_pengirim = @$_POST['nama_pengirim'];
    $no_hp_pengirim = @$_POST['no_hp_pengirim'];
    $alamat_pengirim = @$_POST['alamat_pengirim'];
    $nama_almarhum = @$_POST['nama_almarhum'];
    $alamat_penerima = @$_POST['alamat_penerima'];
    $kontak_keluarga = @$_POST['kontak_keluarga'];
    $kota = @$_POST['kota'];
    $florist = @$_POST['florist'];
    $produk = @$_POST['produk'];
    $kalimat = @$_POST['kalimat'];  

	// Database connection
    include '../../koneksi.php';
	if($koneksi->connect_error){
		echo "$koneksi->connect_error";
		die("Connection Failed : ". $koneksi->connect_error);
	} else {
		$stmt = $koneksi->prepare("insert into kirim_bunga(nama_pengirim, no_pengirim, alamat_pengirim, nama_almarhum, alamat_penerima, kontak_keluarga, id_kota, id_florist, id_produk, kalimat_ucapan, statuskb) values(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
		$stmt->bind_param("sssssssssss", $nama_pengirim, $no_hp_pengirim, $alamat_pengirim, $nama_almarhum, $alamat_penerima, $kontak_keluarga, $kota, $florist, $produk, $kalimat, $statuskb);
		$execval = $stmt->execute();
		echo $execval;
		$stmt->close();
		$koneksi->close();
		?>
    <script type="text/javascript">
        alert("Data Berhasil Disimpan");
        window.location.href = "kirim-bunga.php";
    </script>
<?php

	}
?>