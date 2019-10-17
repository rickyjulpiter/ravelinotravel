<?php
include '../../koneksi.php';

$id = $_GET['idDestinasiArea'];

$queryDetailPaket = mysqli_query($koneksi,"SELECT gambar_area FROM destinasi_area WHERE id_area = '$id'");
$d = mysqli_fetch_assoc($queryDetailPaket);
$gambar = $d['gambar_area'];
$queryDelete = "DELETE FROM destinasi_area WHERE id_area = '$id'";
//echo($queryDelete);
mysqli_query($koneksi,$queryDelete);
unlink('../../'.$gambar);
echo "<script>
	alert('Berhasil di hapus!');
	window.location.href='index';
	</script>";

//header("location:admin");
?>