<?php
$data_almarhum = mysqli_query($koneksi, "SELECT * FROM tb_almarhum");
$jumlah_almarhum = mysqli_num_rows($data_almarhum);

$data_rumah_duka = mysqli_query($koneksi, "SELECT * FROM tb_mrumah_duka");
$jumlah_rumah_duka = mysqli_num_rows($data_rumah_duka);

$data_florist = mysqli_query($koneksi, "SELECT * FROM tb_mflorist");
$jumlah_florist = mysqli_num_rows($data_florist);

$data_papan = mysqli_query($koneksi, "SELECT * FROM tb_mbunga_papan");
$jumlah_papan = mysqli_num_rows($data_papan);

?>
<marquee>
    <h3>Selamat Datang <strong><?php echo $_SESSION['role_user'] ?></strong> Di Halaman Utama</h3>
</marquee>

<body>

    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
            <p>
                <h3><center>Jumlah Data</center></h3><br>
                <b>Jumlah Kabar Duka : </b><?php echo $jumlah_almarhum ?> <br>
                <b>Jumlah Rumah Duka : </b><?php echo $jumlah_rumah_duka ?> <br>
                <b>Jumlah Florist : </b><?php echo $jumlah_florist ?> <br>
                <b>Jumlah Produk Bunga Papan : </b><?php echo $jumlah_papan ?> <br>
            </p>
            </div>
        </div>
    </div>
</body>