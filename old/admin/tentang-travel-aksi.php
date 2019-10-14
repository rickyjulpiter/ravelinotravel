<?php
	include 'koneksi.php';

	$lokasi_file= $_FILES['logo_travel']['tmp_name'];
	$nama_file = $_FILES['logo_travel']['name'];

	$folder = "images/$nama_file";

	$id = $_POST['id_travel'];
	$nama = $_POST['nama_travel'];
	$deskripsi = $_POST['deskripsi_travel'];
	$slogan = $_POST['slogan_travel'];
	$alamat = $_POST['alamat_travel'];
	$email = $_POST['email_travel'];
	$nohp= $_POST['nohp_travel'];

	if ($nama_file != '' AND $nama != '' AND $deskripsi != '' AND $slogan != '' AND $alamat != '' AND $email != '' AND $nohp != '' ) {
		$queryUpdate = " UPDATE tbl_TentangTravel SET 
							nama_travel = '$nama', 
							deskripsi_travel = '$deskripsi', 
							slogan_travel = '$slogan', 
							alamat_travel = '$alamat',
							email_travel = '$email',
							nohp_travel = '$nohp',
							logo_travel = '$nama_file'
							WHERE id_travel = 1
							";
		if (move_uploaded_file($lokasi_file, "$folder")) {
			mysqli_query($koneksi,$queryUpdate);
			header("location:tentang-travel.php");
		}
	}
	else if ($nama_file == '') {
		$queryUpdate = " UPDATE tbl_TentangTravel SET 
							nama_travel = '$nama', 
							deskripsi_travel = '$deskripsi', 
							slogan_travel = '$slogan', 
							alamat_travel = '$alamat',
							email_travel = '$email',
							nohp_travel = '$nohp'
							WHERE id_travel = 1
							";
		mysqli_query($koneksi,$queryUpdate);
		header("location:tentang-travel.php");
	}
	else if ($nama == '') {
		$queryUpdate = " UPDATE tbl_TentangTravel SET 
							deskripsi_travel = '$deskripsi', 
							slogan_travel = '$slogan', 
							alamat_travel = '$alamat',
							email_travel = '$email',
							nohp_travel = '$nohp',
							logo_travel = '$nama_file'
							WHERE id_travel = 1
							";
		if (move_uploaded_file($lokasi_file, "$folder")) {
			mysqli_query($koneksi,$queryUpdate);
			header("location:tentang-travel.php");
		}
	}
	else if ($deskripsi == '') {
		$queryUpdate = " UPDATE tbl_TentangTravel SET 
							nama_travel = '$nama',  
							slogan_travel = '$slogan', 
							alamat_travel = '$alamat',
							email_travel = '$email',
							nohp_travel = '$nohp',
							logo_travel = '$nama_file'
							WHERE id_travel = 1
							";
		if (move_uploaded_file($lokasi_file, "$folder")) {
			mysqli_query($koneksi,$queryUpdate);
			header("location:tentang-travel.php");
		}
	}
	else if ($slogan == '') {
		$queryUpdate = " UPDATE tbl_TentangTravel SET 
							nama_travel = '$nama', 
							deskripsi_travel = '$deskripsi', 
							alamat_travel = '$alamat',
							email_travel = '$email',
							nohp_travel = '$nohp',
							logo_travel = '$nama_file'
							WHERE id_travel = 1
							";
		if (move_uploaded_file($lokasi_file, "$folder")) {
			mysqli_query($koneksi,$queryUpdate);
			header("location:tentang-travel.php");
		}
	}
	else if ($alamat == '') {
		$queryUpdate = " UPDATE tbl_TentangTravel SET 
							nama_travel = '$nama', 
							deskripsi_travel = '$deskripsi', 
							slogan_travel = '$slogan', 
							email_travel = '$email',
							nohp_travel = '$nohp',
							logo_travel = '$nama_file'
							WHERE id_travel = 1
							";
		if (move_uploaded_file($lokasi_file, "$folder")) {
			mysqli_query($koneksi,$queryUpdate);
			header("location:tentang-travel.php");
		}
	}
	else if ($email == '') {
		$queryUpdate = " UPDATE tbl_TentangTravel SET 
							nama_travel = '$nama', 
							deskripsi_travel = '$deskripsi', 
							slogan_travel = '$slogan', 
							alamat_travel = '$alamat', 
							nohp_travel = '$nohp',
							logo_travel = '$nama_file'
							WHERE id_travel = 1
							";
		if (move_uploaded_file($lokasi_file, "$folder")) {
			mysqli_query($koneksi,$queryUpdate);
			header("location:tentang-travel.php");
		}
	}
	else if ($nohp == '' ) {
		$queryUpdate = " UPDATE tbl_TentangTravel SET 
							nama_travel = '$nama', 
							deskripsi_travel = '$deskripsi', 
							slogan_travel = '$slogan', 
							alamat_travel = '$alamat',
							email_travel = '$email', 
							logo_travel = '$nama_file'
							WHERE id_travel = 1
							";
		if (move_uploaded_file($lokasi_file, "$folder")) {
			mysqli_query($koneksi,$queryUpdate);
			header("location:tentang-travel.php");
		}
	}
	else{
		echo "error";
	}
	
?>