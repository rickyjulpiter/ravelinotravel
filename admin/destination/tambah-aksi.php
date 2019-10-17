<?php
    include '../../koneksi.php';

    $nama = $_POST['nama'];
    $deskripsi = $_POST['deskripsi'];
    $deskripsi_singkat = $_POST['deskripsi_singkat'];

    $queryInsert = "INSERT INTO destinasi (nama,deskripsi,deskripsi_singkat) VALUES ('$nama','$deskripsi','$deskripsi_singkat')";
    mysqli_query($koneksi,$queryInsert);
    //echo($queryInsert);
    echo "<script>
	alert('Berhasil ditambahkan');
	window.location.href='index';
	</script>";
    //header("location:admin");
    
?>