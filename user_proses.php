<?php

// Config
require_once "inc/config.php";
include "app/Controller.php";
include "app/User.php";
$user = new App\User();

if ($_POST['btn-simpan']) {
	$user->input();
	header("location:dashboard.php?page=user_tampil");
}

if ($_POST['btn-update']) {
	$user->update();
	header("location:dashboard.php?page=user_tampil");
}