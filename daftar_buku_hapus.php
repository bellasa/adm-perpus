<?php
	session_start();
	include 'config.php';

	$id=$_GET['no'];
	$hapussql="DELETE FROM buku WHERE id_buku=$id";
	if(mysqli_query($config,$hapussql)){
		header("Location:daftar_buku.php");
	} 
?>