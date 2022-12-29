<!DOCTYPE html>
<html>

<head>
    <title>Ubah data</title>
</head>

<body>
    <?php
    $id = $_GET['id'];
    $sql = $koneksi->query("select * from tb_about_us where id_about_us='$id'");
    $row = $sql->fetch_assoc();
    $visi = $row['visi'];
    $misi = $row['misi'];
    $sejarah = $row['sejarah'];
?>
        <div class="container-fluid">
            <form method="post" enctype="multipart/form-data">

                <div class="form-group">

                    <label>Id About Us</label>
                    <input type="text" class="form-control" name="id_about_us" value="<?php echo $row['id_about_us']; ?>" readonly>
                </div>
                <label>logo</label>
                <div class="form-group">
                    <td> <?php echo '<img src = "data:image/jpg;base64,' . base64_encode($row['logo']) . '" alt="Image" style="width: 100px; height:100px;" >'; ?> </td>
                    <input type="file" name="logo">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Visi</label>
                    <textarea class="form-control" name="visi" id="exampleFormControlTextarea1" rows="5" text="<?php echo $row['visi']; ?>"><?php echo $row['visi']; ?></textarea>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Misi</label>
                    <textarea class="form-control" name="misi" id="exampleFormControlTextarea1" rows="5" text="<?php echo $row['misi']; ?>"><?php echo $row['misi']; ?></textarea>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Sejarah</label>
                    <textarea class="form-control" name="sejarah" id="exampleFormControlTextarea1" rows="5" text="<?php echo $row['sejarah']; ?>"><?php echo $row['sejarah']; ?></textarea>
                </div>

                <div class="float-right">
                    <button class="btn btn-primary" type="submit" name="submit">Simpan</button>
                </div>
            </form>
        </div>
</body>

</html>
<?php

if (isset($_POST["submit"])) {
    $status = 'error';
    if (!empty($_FILES["logo"]["name"])) {
        // Get file info 
        $fileName = basename($_FILES["logo"]["name"]);
        $fileType = pathinfo($fileName, PATHINFO_EXTENSION);


        $allowTypes = array('jpg', 'png', 'jpeg');
        if (in_array($fileType, $allowTypes)) {
            $id_about_us = $_POST['id_about_us'];
            $image = $_FILES['logo']['tmp_name'];
            $imgContent = addslashes(file_get_contents($image));
            $visi = $_POST['visi'];
            $misi = $_POST['misi'];
            $sejarah = $_POST['sejarah'];

            // Insert image content into database 
            mysqli_query($koneksi, "update tb_about_us set id_about_us='$id_about_us',  logo='$imgContent', visi='$visi', misi='$misi', sejarah='$sejarah' where id_about_us='$id_about_us'");

?>
            <script type="text/javascript">
                alert("Data Berhasil Disimpan");
                window.location.href = "?page=transaksi";
            </script>
        <?php


        }
    } else {
        $id_about_us = $_POST['id_about_us'];
        $image = $_FILES['logo']['tmp_name'];
        $imgContent = addslashes(file_get_contents($image));
        $visi = $_POST['visi'];
        $misi = $_POST['misi'];
        $sejarah = $_POST['sejarah'];

        // Insert image content into database 
        mysqli_query($koneksi, "update tb_about_us set id_about_us='$id_about_us', visi='$visi', misi='$misi', sejarah='$sejarah' where id_about_us='$id_about_us'");
        ?>
        <script type="text/javascript">
            alert("Data Berhasil Disimpan");
            window.location.href = "?page=transaksi";
        </script>
<?php
    }
}

?>