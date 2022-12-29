<?php
    $id_florist = @$_GET['id'];
    $connection = mysqli_connect("localhost","root","");
    $db = mysqli_select_db($connection,'rumah-duka');
    $query = "select * from tb_mflorist where id_florist='$id_florist'";
    $query_run = mysqli_query($connection,$query);
    $status = "Aktif";
    while ($row = mysqli_fetch_array($query_run)){
    	if ($row['status']==$status) {
    $sql = $connection->query("update tb_mflorist set status='Tidak Aktif' where id_florist='$id_florist'");
}else{
	$sql = $connection->query("update tb_mflorist set status='Aktif' where id_florist='$id_florist'");
}
}
?>
<script type="text/javascript">
    window.location.href="?page=florist";
</script>