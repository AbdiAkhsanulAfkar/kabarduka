<?php
    $id_produk = @$_GET['id'];
    $sql = $koneksi->query("delete from tb_mbunga_papan where id_produk='$id_produk'");
?>
<script type="text/javascript">
    window.location.href="?page=bunga_papan";
</script>