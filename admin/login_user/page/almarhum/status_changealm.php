<?php
    $id_almarhum = @$_GET['id'];
    $connection = mysqli_connect("localhost","root","");
    $db = mysqli_select_db($connection,'rumah-duka');
    $query = "select * from tb_almarhum where id_almarhum='$id_almarhum'";
    $query_run = mysqli_query($connection,$query);
    $status = "Aktif";
    while ($row = mysqli_fetch_array($query_run)){
    	if ($row['status']==$status) {
    $sql = $connection->query("update tb_almarhum set status='Tidak Aktif' where id_almarhum='$id_almarhum'");
}else{
	$sql = $connection->query("update tb_almarhum set status='Aktif' where id_almarhum='$id_almarhum'");
}
}
?>
<script type="text/javascript">
    window.location.href="?page=almarhum";
</script>