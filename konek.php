<?php
	$hostname	= "localhost";
	$username	= "root";
	$password	= "";
	$database	= "car";

	$conn		= mysqli_connect($hostname, $username, $password, $database);

	if ($conn->connect_error)
	{
		die ('maaf koneksi gagal :'. $connect->error);
	}
?>