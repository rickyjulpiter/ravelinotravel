<?php
	include 'koneksi.php';

	$lokasi_file= $_FILES['gambar_wisata']['tmp_name'];
	$nama_file = $_FILES['gambar_wisata']['name'];

	$folder = "images/$nama_file";

	$id = $_POST['id_wisata'];
	$nama = $_POST['nama_wisata'];
	$deskripsi = $_POST['deskripsi_wisata'];

	
	if ($nama_file != '' AND $id != '' AND $deskripsi != '') {
		$queryUpdate = "UPDATE tbl_WisataWilayah SET nama_wisata = '$nama', deskripsi_wisata = '$deskripsi', gambar_wisata = '$nama_file' WHERE id_wisata = '$id' ";
		if (move_uploaded_file($lokasi_file, "$folder")) {
			mysqli_query($koneksi,$queryUpdate);
			header("location:index.php");
		}
	}
	else if ($nama == '') {
		$queryUpdate = "UPDATE tbl_WisataWilayah SET deskripsi_wisata = '$deskripsi', gambar_wisata = '$nama_file' WHERE id_wisata = '$id' ";
		if (move_uploaded_file($lokasi_file, "$folder")) {
			mysqli_query($koneksi,$queryUpdate);
			header("location:index.php");
		}
	}
	else if ($deskripsi == '') {
		$queryUpdate = "UPDATE tbl_WisataWilayah SET nama_wisata = '$nama', gambar_wisata = '$nama_file' WHERE id_wisata = '$id' ";
		if (move_uploaded_file($lokasi_file, "$folder")) {
			mysqli_query($koneksi,$queryUpdate);
			header("location:index.php");
		}
	}
	else if ($nama_file == '') {
		$queryUpdate = "UPDATE tbl_WisataWilayah SET nama_wisata = '$nama', deskripsi_wisata = '$deskripsi' WHERE id_wisata = '$id' ";
		mysqli_query($koneksi,$queryUpdate);
		header("location:index.php");
		//echo($queryUpdate);
	}
	else{
		echo "error";
	}
	
?>