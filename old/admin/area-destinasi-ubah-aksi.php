<?php
	include 'koneksi.php';

	$lokasi_file= $_FILES['gambar_wisata']['tmp_name'];
	$nama_file = $_FILES['gambar_wisata']['name'];

	$folder = "images/$nama_file";

	$id = $_POST['id_wisata'];
	$nama = $_POST['nama_wisata'];
	$deskripsi = $_POST['deskripsi_wisata'];
	$kategori = $_POST['kategori_wisata'];
	
	if ($nama_file != '' AND $id != '' AND $deskripsi != '') {
		$queryUpdate = "UPDATE tbl_WisataWilayahArea SET nama_wisata_area = '$nama', deskripsi_wisata_area = '$deskripsi', nama_wisata = '$kategori' , gambar_wisata_area = '$nama_file' WHERE id_wisata_area = '$id' ";
		if (move_uploaded_file($lokasi_file, "$folder")) {
			mysqli_query($koneksi,$queryUpdate);
			header("location:area-destinasi.php");
		}
	}
	else if ($nama == '') {
		$queryUpdate = "UPDATE tbl_WisataWilayahArea SET deskripsi_wisata_area = '$deskripsi', nama_wisata = '$kategori', gambar_wisata_area = '$nama_file' WHERE id_wisata_area = '$id' ";
		if (move_uploaded_file($lokasi_file, "$folder")) {
			mysqli_query($koneksi,$queryUpdate);
			header("location:area-destinasi.php");
		}
	}
	else if ($deskripsi == '') {
		$queryUpdate = "UPDATE tbl_WisataWilayahArea SET nama_wisata_area = '$nama', nama_wisata = '$kategori', gambar_wisata_area = '$nama_file' WHERE id_wisata_area = '$id' ";
		if (move_uploaded_file($lokasi_file, "$folder")) {
			mysqli_query($koneksi,$queryUpdate);
			header("location:area-destinasi.php");
		}
	}
	else if ($nama_file == '') {
		$queryUpdate = "UPDATE tbl_WisataWilayahArea SET nama_wisata_area = '$nama', nama_wisata = '$kategori', deskripsi_wisata_area = '$deskripsi' WHERE id_wisata_area = '$id' ";
		mysqli_query($koneksi,$queryUpdate);
		header("location:area-destinasi.php");
		//echo($queryUpdate);
	}
	else{
		echo "error";
	}
	
?>