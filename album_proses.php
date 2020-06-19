<?php 

// Config
include "app/Controller.php";
include "app/Album.php";
require_once "inc/config.php";

$alb = new App\Album();

if ($_POST['btn-simpan']) {
	$alb->input();
	header("location:dashboard.php?page=album_tampil");
}

if ($_POST['btn-update']) {
	$alb->update();
	header("location:dashboard.php?page=album_tampil");
}
