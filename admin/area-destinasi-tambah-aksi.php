<?php
	include 'koneksi.php';

	$lokasi_file= $_FILES['gambar_wisata']['tmp_name'];
	$nama_file = $_FILES['gambar_wisata']['name'];

	$nama = $_POST['nama_wisata'];
	$deskripsi = $_POST['deskripsi_wisata'];
	$kategori = $_POST['kategori_wisata'];

	$folder = "images/$nama_file";

	$queryInsert = "INSERT INTO tbl_WisataWilayahArea (nama_wisata_area,deskripsi_wisata_area,gambar_wisata_area,nama_wisata) VALUES ('$nama','$deskripsi','$nama_file','$kategori')";

	if (move_uploaded_file($lokasi_file, "$folder")) {
		mysqli_query($koneksi,$queryInsert);
		header("location:area-destinasi.php");
	}
	else{
		echo($queryInsert);
	}
?>