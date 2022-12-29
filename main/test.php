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
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/vendor/aria/fontawesome-all.css">
    <link rel="stylesheet" href="assets/vendor/aria/magnific-popup.css">
    <link rel="stylesheet" href="assets/vendor/icofont/icofont.min.css">
    <link rel="stylesheet" href="assets/vendor/boxicons/css/boxicons.min.css">
    <link rel="stylesheet" href="assets/vendor/venobox/venobox.css">
    <link rel="stylesheet" href="assets/vendor/owl.carousel/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/vendor/aos/aos.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.css">


    <!-- Template Main CSS File -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/styleList.css">

</head>

<body>
    <?php include 'header.php'; 
    $query = $koneksi->query("SELECT SUBSTRING(tanggal_kematian,1,4) - SUBSTRING(tanggal_lahir,1,4)umur from tb_almarhum where id = 1");
    $r = $query->fetch_assoc();
    echo $r[''];
    ?>

    <main id="main">
        <div class="daftar-kabarduka">
            <div class="jumbotron">
                <center>
                    <h1>List Rumah Duka</h1>

                    <p><b>Kabarduka.com</b></p>
                </center>
            </div>
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


    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
    <script src="assets/js/ddtf.js"></script>
    <script>
        $(document).ready(function() {
            $('#tabel-data').DataTable({
                "info": false,
                "pageLength": 10,
                language: {
                    search: "_INPUT_",
                    searchPlaceholder: "Pencarian..."
                }
            });
        });
        $('#tabel-data').ddTableFilter();
    </script>

</body>

</html>