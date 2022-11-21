<?php
	session_start();
	include 'config.php';

	$nama=$_SESSION['nama'];
	$pwlama=$_POST['pwlama'];
	$pwbaru1=$_POST['pwbaru1'];
	$pwbaru2=$_POST['pwbaru2'];

	$slcsql="SELECT * FROM user WHERE nama='$nama'";
	$slccon=mysqli_query($config,$slcsql);
	$slc=mysqli_fetch_array($slccon);
	if($slc['password']==$pwlama){
		if($pwbaru1==$pwbaru2){
			$updsql="UPDATE "
		}else {
			echo "no";
		}
	} else {
		echo "gagal";
	}

?>