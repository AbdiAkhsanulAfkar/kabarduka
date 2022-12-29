<div class="panel panel-default">
    <div class="panel-heading">
        Tambah Data
    </div>
    <div class="panel-body">
        <div class="row">
            <div class="col-md-12">
                <form method="POST">

                    <div class="form-group">
                        <label>Peraturan</label>
                        <textarea class="form-control" name="peraturan" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>

                    <div>
                        <input type="submit" name="simpan" value="Simpan" class="btn btn-primary">
                    </div>
            </div>
            </form>
        </div>
    </div>
</div>
</div>
<?php

$id = @$_POST['id'];
$peraturan = @$_POST['peraturan'];
$simpan = @$_POST['simpan'];
if ($simpan) {
    $sql = $koneksi->query("insert into peraturan_kabarduka (id,peraturan)
	  values( '$id', '$peraturan')");
    if ($sql) {
?>
        <script type="text/javascript">
            alert("Data Berhasil Disimpan");
            window.location.href = "?page=peraturan_kabarduka";
        </script>
<?php
    }
}
?>