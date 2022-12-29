<?php
    $id_faq = @$_GET['id'];
    $sql = $koneksi->query("delete from faq where id_faq='$id_faq'");
?>
<script type="text/javascript">
    window.location.href="?page=faq";
</script>
