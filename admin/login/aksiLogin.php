<?php
	session_start();

	include '../../koneksi.php';
	include 'config.php';

	$username = $_POST['username'];
	$password = md5($_POST['password']);

	//$password = $encrypt;
	 
	// menyeleksi data admin dengan username dan password yang sesuai
	/*
	$query = "SELECT * FROM admin WHERE username = '$username' AND password ='$password'";
	$data = mysqli_query($koneksi,$query);
	 
	// menghitung jumlah data yang ditemukan
	$cek = mysqli_num_rows($data);
	 
	if($cek > 0){
		$_SESSION['username'] = $username;
		$_SESSION['status'] = "login";
		header("location:../tentang");
	}
	else{
		header("location:index");
	}
	*/
	$sql ="SELECT * FROM admin WHERE username=:username AND password=:password";
	$query = $dbh -> prepare($sql);
	$query->bindParam(':username',$username, PDO::PARAM_STR);
	$query->bindParam(':password',$password, PDO::PARAM_STR);
	$query->execute();
	$results = $query->fetchAll(PDO::FETCH_OBJ);
	if ($query->rowCount() > 0) {
		$_SESSION['username'] = $username;
		$_SESSION['status'] = "login";
		header("location:../tentang");
	}
	else{
		header("location:index");
	}

	/*

	if(isset($_POST['login']))
	{
		$email=$_POST['email'];
		$password=md5($_POST['password']);
		$sql ="SELECT EmailId,Password,FullName FROM tblusers WHERE EmailId=:email and Password=:password";
		$query= $dbh -> prepare($sql);
		$query-> bindParam(':email', $email, PDO::PARAM_STR);
		$query-> bindParam(':password', $password, PDO::PARAM_STR);
		$query-> execute();
		$results=$query->fetchAll(PDO::FETCH_OBJ);
		if($query->rowCount() > 0)
		{
			$_SESSION['login']=$_POST['email'];
			$_SESSION['fname']=$results->FullName;
			$currentpage=$_SERVER['REQUEST_URI'];
			echo "<script type='text/javascript'> document.location = 'dashbord.php'; </script>";
		}
		else{
			echo "<script>alert('Invalid Details');</script>";
		}
	}
	*/
?>