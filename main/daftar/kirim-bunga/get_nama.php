<?php
	include '../../koneksi.php';
 
	echo "<option value=''>Pilih Nama Almarhum</option>";
 
	$query = "SELECT * FROM tb_almarhum ORDER BY nama_almarhum ASC";
	$dewan1 = $koneksi->prepare($query);
	$dewan1->execute();
	$res1 = $dewan1->get_result();
	while ($row = $res1->fetch_assoc()) {
		echo "<option value='" . $row['nama_almarhum'] . "'>" . $row['nama_almarhum'] . "</option>";
	}
?>