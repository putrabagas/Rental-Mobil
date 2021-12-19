<?php
session_start();
  include("konek.php");
  $username   = $_SESSION['username'];
  $email			= $_POST['email'];
  $fromdate 	= $_POST['fromdate']; 
  $todate			= $_POST['todate'];  
  $message			= $_POST['message'];
  $id_mobil         = $_POST['id_mobil'];
  $query			= mysqli_query($conn,"INSERT into pemesanan values ('','$email','$id_mobil','$fromdate','$todate','$message','0','$username')");
  if($query){
		header("location: thankyou.php");
	}
	
  else
  	echo "gagal";
?>