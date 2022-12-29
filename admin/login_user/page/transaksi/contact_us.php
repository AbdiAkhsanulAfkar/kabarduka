<?php
$id_contact_us = @$_GET['id'];
$sql = $koneksi->query("select * from tb_contact_us where id_contact_us='$id_contact_us'");
$tampil = $sql->fetch_assoc();
$wa = $tampil['wa'];
$email = $tampil['email'];
$fb = $tampil['fb'];
$ig = $tampil['ig'];
$yt = $tampil['yt'];
?>
<div class="panel panel-default">
    <div class="panel-heading">
        Data Contact Us
    </div>
    <div class="panel-body">
        <div class="row">
            <div class="col-md-12">
                <form method="POST">
                    <div class="form-group">
                        <label>ID Contact Us</label>
                        <input class="form-control" name="id_contact_us" value="<?php echo $tampil['id_contact_us'] ?>" readonly />
                    </div>
                    <div class="form-group">
                        <label>Whatsapp</label>
                        <input class="form-control" name="wa" value="<?php echo $tampil['wa'] ?>" />
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input class="form-control" name="email" value="<?php echo $tampil['email'] ?>" />
                    </div>
                    <div class="form-group">
                        <label>Facebook</label>
                        <input class="form-control" name="fb" value="<?php echo $tampil['fb'] ?>" />
                    </div>
                    <div class="form-group">
                        <label>Instagram</label>
                        <input class="form-control" name="ig" value="<?php echo $tampil['ig'] ?>" />
                    </div>
                    <div class="form-group">
                        <label>Youtube</label>
                        <input class="form-control" name="yt" value="<?php echo $tampil['yt'] ?>" />
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
$id_contact_us = @$_POST['id_contact_us'];
$wa  = @$_POST['wa'];
$email  = @$_POST['email'];
$fb = @$_POST['fb'];
$ig  = @$_POST['ig'];
$yt  = @$_POST['yt'];
$simpan = @$_POST['simpan'];
if ($simpan) {
    $sql = $koneksi->query("update tb_contact_us set wa='$wa', email='$email', fb='$fb', ig='$ig', yt='$yt' where id_contact_us='$id_contact_us'");
?>
    <script type="text/javascript">
        alert("Data Berhasil Disimpan");
        window.location.href = "?page=transaksi";
    </script>
<?php
}
?>