<?php
include '../../koneksi.php';

$id = $_GET['idDestinasi'];

$queryDetailPaket = mysqli_query($koneksi,"SELECT gambar FROM destinasi WHERE id = '$id'");
$d = mysqli_fetch_assoc($queryDetailPaket);
$gambar = $d['gambar'];
$queryDelete = "DELETE FROM destinasi WHERE id = '$id'";
//echo($queryDelete);
mysqli_query($koneksi,$queryDelete);
unlink('../../'.$gambar);
echo "<script>
	alert('Berhasil di hapus!');
	window.location.href='index';
	</script>";
//header("location:admin");
?>