<div class="container-fluid">
  <form method="post" enctype="multipart/form-data">

    <div class="form-group">
      <label>Rumah Duka</label>
      <select class="form-control" name="id_rumah_duka" id="exampleFormControlSelect1">
        <?php

        $sql = "select * from tb_mrumah_duka";

        $hasil = mysqli_query($koneksi, $sql);
        $no = 0;
        while ($tampil = mysqli_fetch_array($hasil)) {
          $no++;
        ?>
          <option value="<?php echo $tampil['id_rumah_duka']; ?>"><?php echo $tampil['id_rumah_duka'], " - ", $tampil['nama_rumah_duka']; ?></option>
        <?php
        }
        ?>
      </select>
    </div>
    <label>Nama Almarhum</label>
    <div class="form-group">
      <input type="text" class="form-control" name="nama_almarhum">
    </div>
    <label>Foto</label>
    <div class="form-group">
      <input type="file" name="foto" id="real-file" hidden="hidden">
    </div>
    <label>Tanggal Lahir</label>
    <div class="form-group">
      <input type="date" class="form-control" name="tanggal_lahir">
    </div>
    <label>Tanggal Kematian</label>
    <div class="form-group">
      <input type="date" class="form-control" name="tanggal_kematian">
    </div>
    <label>Alamat</label>
    <div class="form-group">
      <input type="text" class="form-control" name="alamat">
    </div>
    <label>Kontak Keluarga</label>
    <div class="form-group">
      <input type="text" class="form-control" name="kontak_keluarga">
    </div>
    <label>Upacara Kematian</label>
    <div class="form-group">
      <input type="date" class="form-control" name="upacara_kematian">
    </div>
    <label hidden="true">Status</label>
    <div hidden="true" class="form-group">
      <select class="form-control" name="status" id="exampleFormControlSelect1">
        <option value="Tidak Aktif">Tidak Aktif</option>
      </select>
    </div>
    <div class="float-right">
      <button class="btn btn-primary" type="submit" name="submit">Simpan</button>
    </div>
  </form>
</div>
<?php
// Include the database configuration file   
// If file upload form is submitted
$status = $statusMsg = '';
if (isset($_POST["submit"])) {
  $status = 'error';
  if (!empty($_FILES["foto"]["name"])) {
    // Get file info 
    $fileName = basename($_FILES["foto"]["name"]);
    $fileType = pathinfo($fileName, PATHINFO_EXTENSION);

    // Allow certain file formats 
    $allowTypes = array('jpg', 'png', 'jpeg', 'gif');
    if (in_array($fileType, $allowTypes)) {

      $idrumahduka = $_POST['id_rumah_duka'];
      $nama = $_POST['nama_almarhum'];
      $image = $_FILES['foto']['tmp_name'];
      $imgContent = addslashes(file_get_contents($image));
      $lahir = $_POST['tanggal_lahir'];
      $kematian = $_POST['tanggal_kematian'];
      $alamat = $_POST['alamat'];
      $kontak = $_POST['kontak_keluarga'];
      $upacara = $_POST['upacara_kematian'];
      $sts = $_POST['status'];

      // Insert image content into database 
      $insert = $koneksi->query("INSERT into tb_almarhum VALUES ('$idalmarhum','$idrumahduka','$nama','$imgContent','$lahir','$kematian','$alamat','$kontak','$upacara','$sts')");

      if ($insert) { ?>
        <script type="text/javascript">
          alert("Data Berhasil Disimpan");
          window.location.href = "?page=almarhum";
        </script>

<?php
      }
    }
  }
}
// Display status message 
echo $statusMsg;
?>