<?php
include '../../koneksi.php';

$id = $_GET['idTourPackages'];

$queryDelete = "DELETE FROM paket_wisata_detail WHERE paket_wisata_id = '$id'";
mysqli_query($koneksi,$queryDelete);

$queryDelete = "DELETE FROM paket_wisata WHERE id = '$id'";
mysqli_query($koneksi,$queryDelete);

echo "<script>
	alert('Berhasil di hapus!');
	window.location.href='index';
	</script>";

//header("location:admin");
?>