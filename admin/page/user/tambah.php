<div class="panel panel-default">
  <div class="panel-heading">
    Tambah Data
  </div>
  <div class="panel-body">
    <div class="row">
      <div class="col-md-12">
        <form method="POST">

          <div class="form-group">
            <label>Username</label>
            <input class="form-control" name="username" />
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
            <input type="password" class="form-control" name="password">
          </div>

          <input type="submit" name="simpan" value="Simpan" class="btn btn-primary">
      </div>
    </div>
    </form>
  </div>
</div>
</div>
</div>
<?php
$username = @$_POST['username'];
$role_user = @$_POST['role_user'];
$password = @$_POST['password'];
$simpan = @$_POST['simpan'];
if ($simpan) {
  $sql = $koneksi->query("insert into tb_user (username,role_user,password)
	  values('$username','$role_user','$password')");
  if ($sql) {
?>
    <script type="text/javascript">
      alert("Data Berhasil Disimpan");
      window.location.href = "?page=user";
    </script>
<?php
  }
}
?>