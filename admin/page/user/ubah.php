<?php
$id = @$_GET['id'];
$sql = $koneksi->query("select * from tb_user where id='$id'");
$tampil = $sql->fetch_assoc();
$username = $tampil['username'];
$role_user = $tampil['role_user'];
$password = $tampil['password'];
?>
<div class="panel panel-default">
  <div class="panel-heading">
    Ubah Data
  </div>
  <div class="panel-body">
    <div class="row">
      <div class="col-md-12">
        <form method="POST">

          <div class="form-group">
            <label>ID User</label>
            <input class="form-control" name="id" value="<?php echo $tampil['id'] ?>" readonly />
          </div>

          <div class="form-group">
            <label>Username</label>
            <input class="form-control" name="username" value="<?php echo $tampil['username'] ?>" />
          </div>

          <div class="form-group">
            <label for="exampleFormControlSelect1">Role User</label>
            <select class="form-control" name="role_user" id="exampleFormControlSelect1">
              <option>Rumah Duka</option>
              <option>Admin</option>
            </select>
          </div>

          <div class="form-group">
            <label>Password</label>
            <input class="form-control" name="password" type="password" value="<?php echo $tampil['password'] ?>" />
          </div>

          <input type="submit" name="simpan" value="Simpan" class="btn btn-primary">
        </form>
      </div>
    </div>

  </div>
</div>

<?php
$id = @$_POST['id'];
$username = @$_POST['username'];
$role_user = @$_POST['role_user'];
$password = @$_POST['password'];
$simpan = @$_POST['simpan'];
if ($simpan) {
  $sql = $koneksi->query("update tb_user set username='$username' , role_user='$role_user' , password='$password' where id='$id'");
?>
  <script type="text/javascript">
    alert("Data Berhasil Disimpan");
    window.location.href = "?page=user";
  </script>
<?php
}
?>