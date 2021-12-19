<?php
include 'konek.php'; 
session_start();
$username 	= $_POST['username']; 
$password 	= $_POST['password']; 
//$hash     	= md5($password);
$query 	  	= mysqli_query($conn,"SELECT * from pelanggan where username='$username' and password='$password'"); 

$cek	  	= mysqli_num_rows($query);

if ($cek>0) {
	$_SESSION['username'] = $username;
	$_SESSION['status'] = "login";
	header("location:index.php");
}
else{
	echo "gagal";
	header("location:login_user.php?pesan=gagal"); 
}
?>