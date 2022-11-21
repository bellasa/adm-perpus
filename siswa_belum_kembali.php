<?php
	session_start();
	include 'config.php';

	$id=$_GET['id'];
	$konfsql="DELETE FROM pinjam WHERE id=$id";
	if($konfdata=mysqli_query($config,$konfsql)){
		header("Location:siswa_belum.php");
	}
?>