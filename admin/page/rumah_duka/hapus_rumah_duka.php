<?php
    $id_rumah_duka = @$_GET['id'];
    $sql = $koneksi->query("delete from tb_mrumah_duka where id_rumah_duka='$id_rumah_duka'");
?>
<script type="text/javascript">
    window.location.href="?page=rumah_duka";
</script>