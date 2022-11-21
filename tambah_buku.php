<?php
	session_start();
	include 'config.php';

	$no_buku=$_POST['no_buku'];
	$judul=$_POST['judul'];
	$tahun_terbit=$_POST['tahun_terbit'];
	$penulis=$_POST['penulis'];
	$penerbit=$_POST['penerbit'];
	$jml_hal=$_POST['jml_hal'];
	$jml_buku=$_POST['jml_buku'];

	$tmbhsql="INSERT INTO buku(no_buku, judul, tahun_terbit, penulis, penerbit, jml_hal, jml_buku) VALUES('$no_buku', '$judul', '$tahun_terbit', '$penulis', '$penerbit', '$jml_hal', '$jml_buku' )";
	if($tmbhcon=mysqli_query($config,$tmbhsql)){
		header("Location:daftar_buku.php?st=ya");
	}


?>