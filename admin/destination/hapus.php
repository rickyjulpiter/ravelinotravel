<?php
include '../../koneksi.php';

$id = $_GET['idDestinasi'];
$queryDelete = "DELETE FROM destinasi WHERE id = '$id'";
//echo($queryDelete);
mysqli_query($koneksi,$queryDelete);
echo "<script>
	alert('Berhasil di hapus!');
	window.location.href='index';
	</script>";
//header("location:admin");
?>