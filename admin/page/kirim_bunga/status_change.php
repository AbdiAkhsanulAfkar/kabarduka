<?php
    $id = @$_GET['id'];
    $connection = mysqli_connect("localhost","root","");
    $db = mysqli_select_db($connection,'rumah-duka');
    $query = "select * from kirim_bunga where id='$id'";
    $query_run = mysqli_query($connection,$query);
    $status = "Belum";
    while ($row = mysqli_fetch_array($query_run)){
    	if ($row['statuskb']==$status) {
    $sql = $connection->query("update kirim_bunga set statuskb='Sudah' where id='$id'");
}else{
	$sql = $connection->query("update kirim_bunga set statuskb='Belum' where id='$id'");
}
}
?> 
<script type="text/javascript">
    window.location.href="?page=kirim_bunga";
</script>