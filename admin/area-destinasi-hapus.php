<?php
	include 'koneksi.php';
	
	$idDestinasi = $_GET['id_wisata'];
	mysqli_query($koneksi,"DELETE FROM tbl_WisataWilayahArea WHERE id_wisata_area='$idDestinasi'");

	header("location:area-destinasi.php");
?>