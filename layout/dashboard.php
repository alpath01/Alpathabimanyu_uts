<!DOCTYPE html>
<html>
<head>
	<title>Sistem Informasi Manajemen Music</title>
	<link rel="stylesheet" type="text/css" href="<?php echo ASSET; ?>css/style.css">
	<link href="<?php echo ASSET; ?>images/header.png" rel="">
</head>
<body>
	<?php
		if(empty($_SESSION['user_name']) and empty($_SESSION['user_id']) and $_SESSION['login']  = true)
		{
			header('location:index.php');
		}
	?>
	<div class="container">
		<div class="header">
			<img src="<?php echo ASSET; ?>images/header.png">
		</div>

		<div class="menu">
			<a href="dashboard.php">Dashboard</a>
			<a href="dashboard.php?page=artis_tampil">Artis</a>
			<a href="dashboard.php?page=album_tampil">Album</a>
			<a href="dashboard.php?page=track_tampil">Track</a>
			<a href="dashboard.php?page=played_tampil">Played</a>
			<a href="dashboard.php?page=user_tampil">User</a>
			<a href="user_logout.php">Logout</a>
		</div>

		<div class="main">
			
			<?php 

			if (isset($_GET['page'])) {
				include $_GET['page'] . ".php";
			} else {
				include "dashboard_main.php";
			}

			?>

		</div>

		<div class="footer" align="center">
			&copy Alpath
		</div>
	</div>
</body>
</html>