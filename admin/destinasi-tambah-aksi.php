<?php
	include 'koneksi.php';

	$lokasi_file= $_FILES['gambar_wisata']['tmp_name'];
	$nama_file = $_FILES['gambar_wisata']['name'];

	$nama = $_POST['nama_wisata'];
	$deskripsi = $_POST['deskripsi_wisata'];

	$folder = "images/$nama_file";

	$queryInsert = "INSERT INTO tbl_WisataWilayah (nama_wisata,deskripsi_wisata,gambar_wisata) VALUES ('$nama','$deskripsi','$nama_file')";

	if (move_uploaded_file($lokasi_file, "$folder")) {
		mysqli_query($koneksi,$queryInsert);
		header("location:index.php");
	}
	else{
		echo($queryInsert);
	}
?>