<?php 
session_start();

if (empty($_SESSION['username'])) {
		header("location:index.php?pesan=belum_login");
}
else{
    session_destroy();
	header("location:index.php");
}
?>