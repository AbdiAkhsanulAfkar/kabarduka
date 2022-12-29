<?php
    $id = @$_GET['id'];
    $sql = $koneksi->query("delete from peraturan_rumahduka where id='$id'");
?>
<script type="text/javascript">
    window.location.href="?page=peraturan_rumahduka";
</script>