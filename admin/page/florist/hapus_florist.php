<?php
    $id_florist = @$_GET['id'];
    $sql = $koneksi->query("delete from tb_mflorist where id_florist='$id_florist'");
?>
<script type="text/javascript">
    window.location.href="?page=florist";
</script>