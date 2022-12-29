<?php
include 'koneksi.php';

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Kabar Duka Indonesia</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/logo 1.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:500,700&display=swap&subset=latin-ext" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link rel="stylesheet" href="assets/vendor/aria/fontawesome-all.css">
    <link rel="stylesheet" href="assets/vendor/aria/magnific-popup.css">
    <link rel="stylesheet" href="assets/vendor/icofont/icofont.min.css">
    <link rel="stylesheet" href="assets/vendor/boxicons/css/boxicons.min.css">
    <link rel="stylesheet" href="assets/vendor/venobox/venobox.css">
    <link rel="stylesheet" href="assets/vendor/owl.carousel/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/vendor/aos/aos.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">


    <!-- Template Main CSS File -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/styleList.css">

</head>

<body>
    <?php include 'header.php'; ?>

    <main id="main">
        <div class="daftar-kabarduka">
            <div class="jumbotron">
                <center>
                    <h1>List Rumah Duka</h1>

                    <p><b>Kabarduka.com</b></p>
                </center>
            </div>
        </div>

        <div class="container">
            <center>
                <h3>List Rumah Duka Di Indonesia</h3>
            </center>
            <br>
            <div class="tbl">
                <table id="tabel-data" class="table table-borderless" data-paging="false" data-searching="true" data-ordering="false">
                    <thead>
                        <tr>
                            <th>Provinsi</th>
                            <th>Kota</th>
                            <th>Nama Rumah Duka</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th>Provinsi</th>
                            <th>Kota</th>
                            <th>Nama Rumah Duka</th>
                            <th></th>
                        </tr>
                        <?php
                        $query = "SELECT * FROM tb_mrumah_duka JOIN tb_mkota ON tb_mrumah_duka.id_kota = tb_mkota.id_kota JOIN tb_mprovinsi ON tb_mkota.id_provinsi = tb_mprovinsi.id_provinsi";
                        $query_run = mysqli_query($koneksi, $query);
                        while ($row = mysqli_fetch_array($query_run)) {
                        ?>
                            <tr>
                                <td><?php echo $row['nama_provinsi'] ?></td>
                                <td><?php echo $row['nama_kota'] ?></td>
                                <td><?php echo $row['nama_rumah_duka'] ?></td>
                                <td><a class="popup-with-move-anim" href="#a<?php echo $row['id_rumah_duka'] ?>"><button type="button" class="btn btntb">Lihat</button></a></td>
                            </tr>

                            <!-- Lightbox -->
                            <div id="a<?php echo $row['id_rumah_duka'] ?>" class="lb lightbox-basic zoom-anim-dialog mfp-hide">
                                <div class="row">
                                    <button title="Close (Esc)" type="button" class="mfp-close x-button" style="margin-right: 4px;"> × </button>
                                    <div class="col-lg-12">
                                        <h3><?php echo $row['nama_rumah_duka'] ?></h3>
                                        <hr class="line-heading">
                                        <div class="lightbox-body">
                                            <h6>Alamat</h6>
                                            <p><?php echo $row['alamat_rumah_duka'] ?></p>
                                            <h6>Kota</h6>
                                            <p><?php echo $row['nama_kota'] ?></p>
                                            <h6>No. Telp</h6>
                                            <p><?php echo $row['telp_rumah_duka'] ?></p>
                                            <h6>No. Whatsapp</h6>
                                            <p><?php echo $row['wa_rumah_duka'] ?></p>
                                            <a class="button" style="float: right; margin-top: 4px;" href="daftar/kirim-bunga.php">Kirim Bunga</a>
                                            <a target="_blank" href="http://maps.google.com/maps?q=<?php echo $row['latitude'] ?>,<?php echo $row['longitude'] ?>"><button class="button" style="float: right;">Lihat Di Maps</button></a>
                                        </div>
                                    </div> <!-- end of col -->
                                </div> <!-- end of row -->
                            </div> <!-- end of lightbox-basic -->
                            <!-- end of lightbox -->

                        <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>
            <section class="daftar">
                <div class="container" data-aos="fade-up" data-aos-delay="200">
                    <p>Mendaftarkan rumah duka? <b>Daftar disini!</b></p>
                    <a href="daftar/Rumah-duka.php" class="more-btn">Daftar Sekarang<i class="bx bx-chevron-right"></i></a>
                </div>
            </section>
        </div>
    </main>
    <?php include 'footer.php'; ?>

    <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>
    <script src="assets/vendor/jquery-sticky/jquery.sticky.js"></script>
    <script src="assets/vendor/venobox/venobox.min.js"></script>
    <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/aria/js/popper.min.js"></script> <!-- Popper tooltip library for Bootstrap -->
    <script src="assets/vendor/aria/js/swiper.min.js"></script> <!-- Swiper for image and text sliders -->
    <script src="assets/vendor/aria/js/jquery.magnific-popup.js"></script> <!-- Magnific Popup for lightboxes -->
    <script src="assets/vendor/aria/js/morphext.min.js"></script> <!-- Morphtext rotating text in the header -->


    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>
    <script src="assets/vendor/aria/js/scripts.js"></script> <!-- Custom scripts -->
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
    <script src="assets/js/ddtf.js"></script>
    <script>
        $(document).ready(function() {
            $('#tabel-data').DataTable({
                "info": false
            });
        });
        $('#tabel-data').ddTableFilter();
    </script>

</body>

</html>