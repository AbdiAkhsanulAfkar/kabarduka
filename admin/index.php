<?php
include 'koneksi.php';
session_start();



// cek apakah yang mengakses halaman ini sudah login
if ($_SESSION['role_user'] == "") {
    header("location:login.php");
}


?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>Dashboard Admin Kabar Duka</title>
    <link rel="icon" type="image/png" href="assets/img/logo 1.png">
    <!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />

    <link href="assets/js/dataTables/dataTables.bootstrap.css" rel="stylesheet" />
</head>

<body>

    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <div style="color: white;
padding: 15px 50px 5px 50px;
float: right;
font-size: 16px;"><?php echo date('d-m-Y'); ?> &nbsp; <a href="logout.php" class="btn btn-danger square-btn-adjust">Logout</a> </div>
        </nav>
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                    <li class="text-center">
                        <img src="assets/img/logo 1.png" class="user-image img-responsive" />
                    </li>
                    <li>
                        <a href="index.php"><i class="fa fa-dashboard fa-3x"></i> Dashboard</a>
                    </li>
                    <li>
                        <a href="?page=user"><i class="fa fa-user fa-3x"></i> Master User</a>
                    </li>
                    <li>
                        <a href="?page=provinsi"><i class="fa fa-road fa-3x"></i> Master Provinsi</a>
                    </li>
                    <li>
                        <a href="?page=kota"><i class="fa fa-building fa-3x"></i> Master Kota</a>
                    </li>
                    <li>
                        <a href="?page=rumah_duka"><i class="fa fa-building fa-3x"></i> Master Rumah Duka</a>
                    </li>
                    <li>
                        <a href="?page=almarhum"><i class="fa fa-users fa-3x"></i> Master Almarhum</a>
                    </li>
                    <li>
                        <a href="?page=florist"><i class="fa fa-table fa-3x"></i> Master Florist</a>
                    </li>
                    <li>

                        <a href="?page=bunga_papan"><i class="fa fa-table fa-3x"></i> Master Bunga Papan</a>
                    </li>
                    <li>

                        <a href="?page=kirim_bunga"><i class="fa fa-table fa-3x"></i> Master Kirim Bunga</a>
                    </li>
                    <li>

                        <a href="?page=transaksi"><i class="fa fa-pencil-square-o fa-3x"></i> Transaksi</a>
                    </li>
                    <li>

                        <a href="?page=faq"><i class="fa fa-pencil-square-o fa-3x"></i> FAQs</a>
                    </li>
                    <li>

                        <a href="?page=peraturan_kabarduka"><i class="fa fa-pencil-square-o fa-3x"></i> Peraturan Kabar Duka</a>
                    </li>

                    <li>

                        <a href="?page=peraturan_rumahduka"><i class="fa fa-pencil-square-o fa-3x"></i> Peraturan Rumah Duka</a>
                    </li>

                    <li>

                        <a href="?page=peraturan_florist"><i class="fa fa-pencil-square-o fa-3x"></i> Peraturan Florist</a>
                    </li>
                </ul>
            </div>
        </nav>
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <?php
                        $page = @$_GET['page'];
                        $aksi = @$_GET['aksi'];
                        if ($page == "user") {
                            if ($aksi == "") {
                                include "page/user/user.php";
                            } elseif ($aksi == "tambah") {
                                include "page/user/tambah.php";
                            } elseif ($aksi == "ubah") {
                                include "page/user/ubah.php";
                            } elseif ($aksi == "hapus") {
                                include "page/user/hapus.php";
                            }
                        } elseif ($page == "provinsi") {
                            if ($aksi == "") {
                                include "page/provinsi/provinsi.php";
                            } elseif ($aksi == "tambah") {
                                include "page/provinsi/tambah_provinsi.php";
                            } elseif ($aksi == "ubah") {
                                include "page/provinsi/ubah_provinsi.php";
                            } elseif ($aksi == "hapus") {
                                include "page/provinsi/hapus_provinsi.php";
                            }
                        } elseif ($page == "kota") {
                            if ($aksi == "") {
                                include "page/kota/kota.php";
                            }
                            if ($aksi == "tambah") {
                                include "page/kota/tambah_kota.php";
                            }
                            if ($aksi == "ubah") {
                                include "page/kota/ubah_kota.php";
                            }
                            if ($aksi == "hapus") {
                                include "page/kota/hapus_kota.php";
                            }
                        } elseif ($page == "rumah_duka") {
                            if ($aksi == "") {
                                include "page/rumah_duka/rumah_duka.php";
                            }
                            if ($aksi == "tambah") {
                                include "page/rumah_duka/tambah_rumah_duka.php";
                            }
                            if ($aksi == "ubah") {
                                include "page/rumah_duka/ubah_rumah_duka.php";
                            }
                            if ($aksi == "hapus") {
                                include "page/rumah_duka/hapus_rumah_duka.php";
                            }
                        } elseif ($page == "florist") {
                            if ($aksi == "") {
                                include "page/florist/florist.php";
                            }
                            if ($aksi == "tambah") {
                                include "page/florist/tambah_florist.php";
                            }
                            if ($aksi == "ubah") {
                                include "page/florist/ubah_florist.php";
                            }
                            if ($aksi == "hapus") {
                                include "page/florist/hapus_florist.php";
                            }
                            if ($aksi == "status") {
                                include "page/florist/status_changefl.php";
                            }
                        } elseif ($page == "bunga_papan") {
                            if ($aksi == "") {
                                include "page/bunga_papan/bunga_papan.php";
                            }
                            if ($aksi == "tambah") {
                                include "page/bunga_papan/tambah_bunga_papan.php";
                            }
                            if ($aksi == "ubah") {
                                include "page/bunga_papan/ubah_bunga_papan.php";
                            }
                            if ($aksi == "hapus") {
                                include "page/bunga_papan/hapus_bunga_papan.php";
                            }
                        } elseif ($page == "almarhum") {
                            if ($aksi == "") {
                                include "page/almarhum/almarhum.php";
                            }
                            if ($aksi == "tambah") {
                                include "page/almarhum/tambah_almarhum.php";
                            }
                            if ($aksi == "ubah") {
                                include "page/almarhum/ubah_almarhum.php";
                            }
                            if ($aksi == "hapus") {
                                include "page/almarhum/hapus_almarhum.php";
                            }
                            if ($aksi == "status") {
                                include "page/almarhum/status_changealm.php";
                            }
                        } elseif ($page == "faq") {
                            if ($aksi == "") {
                                include "page/faq/faq.php";
                            }
                            if ($aksi == "tambah") {
                                include "page/faq/tambah_faq.php";
                            }
                            if ($aksi == "hapus") {
                                include "page/faq/hapus_faq.php";
                            }
                        } elseif ($page == "transaksi") {
                            if ($aksi == "") {
                                include "page/transaksi/transaksi.php";
                            }
                            if ($aksi == "profile") {
                                include "page/transaksi/profile.php";
                            }
                            if ($aksi == "about_us") {
                                include "page/transaksi/about_us.php";
                            }
                            if ($aksi == "contact_us") {
                                include "page/transaksi/contact_us.php";
                            }
                        } elseif ($page == "peraturan_kabarduka") {
                            if ($aksi == "") {
                                include "page/peraturan_kabarduka/peraturan_kabarduka.php";
                            }
                            if ($aksi == "tambah") {
                                include "page/peraturan_kabarduka/tambah_peraturan.php";
                            }
                            if ($aksi == "ubah") {
                                include "page/peraturan_kabarduka/ubah_peraturan.php";
                            }
                            if ($aksi == "hapus") {
                                include "page/peraturan_kabarduka/hapus_peraturan.php";
                            }
                        } elseif ($page == "peraturan_rumahduka") {
                            if ($aksi == "") {
                                include "page/peraturan_rumahduka/peraturan_rumahduka.php";
                            }
                            if ($aksi == "tambah") {
                                include "page/peraturan_rumahduka/tambah_peraturan.php";
                            }
                            if ($aksi == "ubah") {
                                include "page/peraturan_rumahduka/ubah_peraturan.php";
                            }
                            if ($aksi == "hapus") {
                                include "page/peraturan_rumahduka/hapus_peraturan.php";
                            }
                        } elseif ($page == "peraturan_florist") {
                            if ($aksi == "") {
                                include "page/peraturan_florist/peraturan_florist.php";
                            }
                            if ($aksi == "tambah") {
                                include "page/peraturan_florist/tambah_peraturan.php";
                            }
                            if ($aksi == "ubah") {
                                include "page/peraturan_florist/ubah_peraturan.php";
                            }
                            if ($aksi == "hapus") {
                                include "page/peraturan_florist/hapus_peraturan.php";
                            }
                        } elseif ($page == "kirim_bunga") {
                            if ($aksi == "") {
                                include "page/kirim_bunga/kirim_bunga.php";
                            }
                            if ($aksi == "status") {
                                include "page/kirim_bunga/status_change.php";
                            }
                            if ($aksi == "lihat") {
                                include "page/kirim_bunga/lihat.php";
                            }
                        } elseif ($page == "") {
                            include "home.php";
                        }
                        ?>
                    </div>
                </div>
                <hr />
            </div>
        </div>
    </div>
    <script src="assets/js/jquery-1.10.2.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.metisMenu.js"></script>
    <script src="assets/js/dataTables/jquery.dataTables.js"></script>
    <script src="assets/js/dataTables/dataTables.bootstrap.js"></script>
    <script>
        $(document).ready(function() {
            $('#dataTables-example').dataTable();
        });
    </script>
    <script src="assets/js/custom.js"></script>
</body>

</html>