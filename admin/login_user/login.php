<?php
session_start();
include "koneksi.php";
if (@$_SESSION['role_user' == "Admin"]) {
	header("location:index.php");
} elseif (@$_SESSION['role_user' == "Rumah Duka"]) {
	header("location:rumah_duka/rumah_duka.html");
} else {
?>
	<!DOCTYPE html>
	<html>

	<head>
		<title>Halaman Login</title>
		<!-- BOOTSTRAP STYLES-->
		<link href="assets/css/bootstrap.css" rel="stylesheet" />
		<!-- FONTAWESOME STYLES-->
		<link href="assets/css/font-awesome.css" rel="stylesheet" />
		<!-- CUSTOM STYLES-->
		<link href="assets/css/custom.css" rel="stylesheet" />
		<!-- GOOGLE FONTS-->
		<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
	</head>

	<body>
		<div class="container">
			<div class="row text-center ">
				<div class="col-md-12">
					<h1>Halaman Login</h1>
				</div>
			</div>


			<div class="row ">
				<div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">
					<div class="panel panel-default">
						<div class="panel-heading">
							<strong>Silahkan login</strong>
						</div>
						<div class="panel-body">
							<form role="form" action="cek_login.php" method="post">
							<div class="form-group input-group">
								<span class="input-group-addon">Username</span>
								<input type="text" name="username" class="form-control" placeholder="Username .." required="required">
							</div>
							<div class="form-group input-group">
								<span class="input-group-addon">Password</span>
								<input type="password" name="password" class="form-control" placeholder="Password .." required="required">
							</div>
								<input type="submit" class="btn btn-primary" value="LOGIN">

								<br />
								<br />
							</form>
						</div>
					</div>
				</div>
			</div>

	</body>

	</html>
<?php
}
?>