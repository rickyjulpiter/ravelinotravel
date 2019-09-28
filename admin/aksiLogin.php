<?php
	session_start();

	include 'koneksi.php';

	$email = $_POST['email'];
	$password = $_POST['password'];
	 
	// menyeleksi data admin dengan username dan password yang sesuai
	$data = mysqli_query($koneksi,"SELECT * FROM tbl_User WHERE email = '$email' AND password ='$password'");
	 
	// menghitung jumlah data yang ditemukan
	$cek = mysqli_num_rows($data);
	 
	if($cek > 0){
		$_SESSION['email'] = $email;
		$_SESSION['status'] = "login";
		header("location:index.php");
	}
	else{
		header("location:login.php");
	}
?>