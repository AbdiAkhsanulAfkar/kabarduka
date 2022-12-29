<?php
	include '../koneksi.php';
	$provinsi = $_POST['provinsi'];

	echo "<option value=''>Pilih Kota</option>";

	$query = "SELECT * FROM tb_mkota WHERE id_provinsi=? ORDER BY nama_kota ASC";
	$dewan1 = $koneksi->prepare($query);
	$dewan1->bind_param("i", $provinsi);
	$dewan1->execute();
	$res1 = $dewan1->get_result();
	while ($row = $res1->fetch_assoc()) {
		echo "<option value='" . $row['id_kota'] . "'>" . $row['nama_kota'] . "</option>";
	}
?>