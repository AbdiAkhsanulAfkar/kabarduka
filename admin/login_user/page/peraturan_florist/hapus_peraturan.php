<?php
    $id = @$_GET['id'];
    $sql = $koneksi->query("delete from peraturan_florist where id='$id'");
?>
<script type="text/javascript">
    window.location.href="?page=peraturan_florist";
</script>