<!DOCTYPE html>
<html>
<head>
	<title>Sistem Informasi Manajemen Music</title>
	<link rel="stylesheet" type="text/css" href="<?php echo ASSET; ?>css/template.css">
	<link href="<?php echo ASSET; ?>images/header.png" rel="shortcut icon">
	<style type="text/css">
.container-login {
	background-image: url('../../assets/image/bg2.jpg');
	background-size: cover;
	width: 500px;
	height: 300px;
	margin: 100px auto;
	padding: 40px 50px;
	border-radius:10px;
	background: #52c2e5;
	-webkit-box-shadow: 0px 3px 17px -3px rgba(0,0,0,0.75);
	-moz-box-shadow: 0px 3px 17px -3px rgba(0,0,0,0.75);
	box-shadow: 0px 3px 17px -3px rgba(0,0,0,0.75);
	color: white;
	}
</style>
</head>
<body>
	<div class="login-page">
		<div class="login">
		</div>

		<div class="nav" align="center">
			<li class="garis-atas"><a href="index.php">Home</a></li>
			<li class="garis-atas"><a href="index.php?page=index_album">Album</a></li>
			<li class="garis-atas"><a href="index.php?page=index_login">Login</a></li>
		</div>

		<div class="container-login">
			
			<?php 

			if (isset($_GET['page'])) {
				include $_GET['page'] . ".php";
			} else {
				include "index_main.php";
			}

			?>

		</div>

		<div class="footer">
		</div>
	</div>
</body>
</html>