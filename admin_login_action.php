<?php
	session_start();
	include "config.php";
	$user=$_POST['user'];
	$password=$_POST['password'];
	$sql="SELECT * FROM user WHERE nama='$user' AND password='$password'";
	$data=mysqli_query($config,$sql);
	if($hasil=mysqli_fetch_array($data)){
			$_SESSION['nama']=$hasil['nama'];
			$_SESSION['jabatan']=$hasil['jabatan'];
			header("Location:index.php");
	} else {
           echo "gagal";
       }
?>