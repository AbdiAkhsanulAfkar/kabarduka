<?php
    $id_provinsi = @$_GET['id'];
    $sql = $koneksi->query("delete from tb_mprovinsi where id_provinsi='$id_provinsi'");
?>
<script type="text/javascript">
    window.location.href="?page=provinsi";
</script>