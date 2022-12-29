<?php
	include '../koneksi.php';
	$kota = $_POST['kota'];

	echo "<option value=''>Pilih Rumah Duka</option>";

	$query = "SELECT * FROM tb_mrumah_duka WHERE id_kota=? ORDER BY nama_rumah_duka ASC";
	$dewan1 = $koneksi->prepare($query);
	$dewan1->bind_param("i", $kota);
	$dewan1->execute();
	$res1 = $dewan1->get_result();
	while ($row = $res1->fetch_assoc()) {
		echo "<option value='" . $row['id_rumah_duka'] . "'>" . $row['nama_rumah_duka'] . "</option>";
	}
?>