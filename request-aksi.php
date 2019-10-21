<?php
    include 'koneksi.php';

    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $telepon = $_POST['telepon'];
    $pesan = $_POST['pesan'];

    $queryInsert = "INSERT INTO request (nama,email,telepon,pesan) VALUES ('$nama','$email','$telepon','$pesan')";
    mysqli_query($koneksi,$queryInsert);
    //echo($queryInsert);
    echo "<script>
	alert('Your request has been sent, thank you!');
	window.location.href='request';
	</script>";
    //header("location:contactus");
    
?>