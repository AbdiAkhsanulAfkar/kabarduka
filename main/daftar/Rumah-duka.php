<?php
include '../koneksi.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Rumah Duka - Kabar Duka Indonesia</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="../assets/img/logo 1.png" rel="icon">
    <link href="../assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../assets/vendor/icofont/icofont.min.css" rel="stylesheet">
    <link href="../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="../assets/vendor/venobox/venobox.css" rel="stylesheet">
    <link href="../assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="../assets/vendor/aos/aos.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" media="screen" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap4.min.css>">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">


    <!-- Template Main CSS File -->
    <link href="../assets/css/style.css" rel="stylesheet">
    <link href="../assets/css/style3.css" rel="stylesheet">


    <!-- =======================================================
  * Template Name: Flexor - v2.3.0
  * Template URL: https://bootstrapmade.com/flexor-free-multipurpose-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>
    <?php include 'header.php' ?>

    <main id="main">
        <div class="daftar-kabarduka">
            <div class="jumbotron">
                <div class="container">
                    <center>
                        <h1>Daftar Rumah Duka</h1>
                        <p>Bantu masyarakat mengetahui rumah duka terbaru</p>
                        <a href="#pendaftaran" class="start scrollto">Daftar Sekarang</a>
                    </center>
                </div>
            </div>


            <div class="container pendaftaran" id="pendaftaran">
                <h3 class="text-center">Daftar Rumah Duka</h3>
                <form action="dbRumahDuka.php" method="POST">

                    <div class="form-group">
                        <label>Nama Rumah Duka</label>
                        <input class="form-control" name="nama_rumah_duka" required oninvalid="this.setCustomValidity('Masukan Nama')" oninput="this.setCustomValidity('')" />
                    </div>
                    <div class="was-validated">
                        <div class="form-group">
                            <label>Provinsi</label>
                            <select class="form-control custom-select" name="provinsi" id="provinsi" required>
                                <option value="">Pilih Provinsi</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Kota</label>
                            <select class="form-control custom-select" name="kota" id="kota" required>
                                <option value=""></option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Alamat Rumah Duka</label>
                        <input class="form-control" name="alamat_rumah_duka" required oninvalid="this.setCustomValidity('Masukan Alamat')" oninput="this.setCustomValidity('')" />
                    </div>
                    <label>Alamat Rumah Duka</label>
                    <div class="form-row">
                        <div class="col">
                            <input type="text" class="form-control" name="latitude" placeholder="latitude">
                        </div>
                        <div class="col">
                            <input type="text" class="form-control" name="longitude" placeholder="longitude">
                        </div>
                    </div><small>Untuk cek lokasi koordinat, anda bisa klik <a href="https://www.gps-coordinates.net/" target='_blank'>disini</small></a>
                    <div class="form-group"><br>
                        <label>Telp Rumah Duka</label>
                        <input class="form-control" name="telp_rumah_duka" required oninvalid="this.setCustomValidity('Masukan Nomer')" oninput="this.setCustomValidity('')" />
                    </div>
                    <div class="form-group">
                        <label>WA Rumah Duka</label>
                        <input class="form-control" name="wa_rumah_duka" required oninvalid="this.setCustomValidity('Masukan Nomer')" oninput="this.setCustomValidity('')" />
                    </div>

                    <div>
                        <input type="checkbox" id="chkddl" onclick="Enabled(this)" />
                        <label for="chkddl">Saya menyetujui semua <a href="peraturan/Peraturan_rumahduka.php">peraturan dan kondisi</a></label>
                    </div>
                    <div class="float-right">
                        <button type="button" class="button" data-toggle="modal" data-target="#myModal" id="ddl" disabled="disabled">Daftarkan</button>
                    </div>

                    <!-- Modal -->
                    <div id="myModal" class="modal fade" role="dialog">
                        <div class="modal-dialog">

                            <!-- Modal content-->
                            <div class="modal-content">

                                <div class="modal-body">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h6>Data Sudah Benar ?</h6>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-default">Oke</button>
                                </div>
                            </div>

                        </div>
                    </div>

                    <script>
                        function Enabled(chkddl) {
                            var ddl = document.getElementById("ddl");
                            ddl.disabled = chkddl.checked ? false : true;
                            if (!ddl.disabled) {
                                ddl.focus();
                            }
                        }
                    </script>
                </form>
            </div>
        </div>

    </main><!-- End #main -->

    <?php include 'footer.php'; ?>

    <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

    <!-- Vendor JS Files -->
    <script src="../assets/vendor/jquery/jquery.min.js"></script>
    <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/vendor/jquery.easing/jquery.easing.min.js"></script>
    <script src="../assets/vendor/php-email-form/validate.js"></script>
    <script src="../assets/vendor/jquery-sticky/jquery.sticky.js"></script>
    <script src="../assets/vendor/venobox/venobox.min.js"></script>
    <script src="../assets/vendor/owl.carousel/owl.carousel.min.js"></script>
    <script src="../assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="../assets/vendor/aos/aos.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <!-- Template Main JS File -->
    <script src="../assets/js/main.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $.ajax({
                type: 'POST',
                url: "get_provinsi_rumah_duka.php",
                cache: false,
                success: function(msg) {
                    $("#provinsi").html(msg);
                }
            });

            $("#provinsi").change(function() {
                var provinsi = $("#provinsi").val();
                $.ajax({
                    type: 'POST',
                    url: "get_kota.php",
                    data: {
                        provinsi: provinsi
                    },
                    cache: false,
                    success: function(msg) {
                        $("#kota").html(msg);
                    }
                });
            });
        });
    </script>

</body>

</html>