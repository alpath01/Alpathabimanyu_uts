<?php 

// Config
include "app/Controller.php";
include "app/Artist.php";
require_once "inc/config.php";

$art = new App\Artist();

if ($_POST['btn-simpan']) {
	$art->input();
	header("location:dashboard.php?page=artis_tampil");
}

if ($_POST['btn-update']) {
	$art->update();
	header("location:dashboard.php?page=artis_tampil");
}
