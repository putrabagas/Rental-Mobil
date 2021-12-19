<?php
include 'konek.php'; 
$nama 	= $_POST['nama'];
$email 	= $_POST['email'];
$no_hp 	= $_POST['no_hp'];
$alamat 	= $_POST['alamat'];
$username 	= $_POST['username']; 
$password 	= $_POST['password']; 
//$hash     	= md5($password);
$query 	  	= mysqli_query($conn,"INSERT INTO `pelanggan` VALUES('$username', '$password','$nama','$no_hp','$email','$alamat')"); 


if ($query) {
	header("location:login_user.php");
}
else{
	echo "gagal";
	header("location:regis.php?pesan=gagal"); 
}
?>