<?php
	session_start();

	include 'koneksi.php';

	$email = $_POST['email'];
	$encrypt = md5($_POST['password']);

	$password = $encrypt;
	 
	// menyeleksi data admin dengan username dan password yang sesuai
	$query = "SELECT * FROM tbl_User WHERE email = '$email' AND password ='$password'";
	$data = mysqli_query($koneksi,$query);
	 
	// menghitung jumlah data yang ditemukan
	$cek = mysqli_num_rows($data);
	 
	if($cek > 0){
		$_SESSION['email'] = $email;
		$_SESSION['status'] = "login";
		header("location:index");
	}
	else{
		header("location:login");
	}
?>