<?php
	session_start();
	include 'config.php';

	$id=$_POST['id'];
	$no_buku=$_POST['no_buku'];
	$judul=$_POST['judul'];
	$tahun_terbit=$_POST['tahun_terbit'];
	$penulis=$_POST['penulis'];
	$penerbit=$_POST['penerbit'];
	$jml_hal=$_POST['jml_hal'];
	$jml_buku=$_POST['jml_buku'];

	$editsql="UPDATE buku SET no_buku='$no_buku', judul='$judul', tahun_terbit='$tahun_terbit', penulis='$penulis', penerbit='$penerbit', jml_hal='$jml_hal', jml_buku='$jml_buku' WHERE id_buku=$id";
	if($editcon=mysqli_query($config,$editsql)){
		header("Location:daftar_buku.php");
	}


?>