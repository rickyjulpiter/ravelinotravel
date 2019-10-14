<?php
	include 'koneksi.php';
	
	$idDestinasi = $_GET['id_wisata'];
	mysqli_query($koneksi,"DELETE FROM tbl_WisataWilayah WHERE id_wisata='$idDestinasi'");

	header("location:index.php");
?>