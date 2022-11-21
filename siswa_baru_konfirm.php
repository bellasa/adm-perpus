<?php
	session_start();
	include 'config.php';

	$id=$_GET['id'];
	$konfsql="UPDATE pinjam SET status='sudah' WHERE id=$id";
	if($konfdata=mysqli_query($config,$konfsql)){
		header("Location:siswa_baru.php");
	}
?>