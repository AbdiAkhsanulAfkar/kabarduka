<?php
    $id_almarhum = @$_GET['id'];
    $sql = $koneksi->query("delete from tb_almarhum where id_almarhum='$id_almarhum'");
?>
<script type="text/javascript">
    window.location.href="?page=almarhum";
</script>