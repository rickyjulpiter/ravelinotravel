<?php
    include 'koneksi.php';

    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $telepon = $_POST['telepon'];
    $pesan = $_POST['pesan'];

    $queryInsert = "INSERT INTO pesan (nama,email,telepon,pesan) VALUES ('$nama','$email','$telepon','$pesan')";
    mysqli_query($koneksi,$queryInsert);
    //echo($queryInsert);
    echo "<script>
	alert('Pesan telah terkirim, terimakasih!');
	window.location.href='contactus';
	</script>";
    //header("location:contactus");
    
?>