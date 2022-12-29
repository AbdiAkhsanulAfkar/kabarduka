<?php
    $id_user = @$_GET['id'];
    $sql = $koneksi->query("delete from tb_user where id='$id_user'");
?>
<script type="text/javascript">
    window.location.href="?page=user";
</script>