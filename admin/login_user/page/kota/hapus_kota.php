<?php
    $id_kota = @$_GET['id'];
    $sql = $koneksi->query("delete from tb_mkota where id_kota='$id_kota'");
?>
<script type="text/javascript">
    window.location.href="?page=kota";
</script>