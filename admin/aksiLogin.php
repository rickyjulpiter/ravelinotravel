<?php
	session_start();

	include 'koneksi.php';

	$username = $_POST['username'];
	$encrypt = md5($_POST['password']);

	$password = $encrypt;
	 
	// menyeleksi data admin dengan username dan password yang sesuai
	$query = "SELECT * FROM admin WHERE username = '$username' AND password ='$password'";
	$data = mysqli_query($koneksi,$query);
	 
	// menghitung jumlah data yang ditemukan
	$cek = mysqli_num_rows($data);
	 
	if($cek > 0){
		$_SESSION['username'] = $username;
		$_SESSION['status'] = "login";
		header("location:tentang");
	}
	else{
		header("location:login");
	}
?>