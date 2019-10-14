<?php
include 'koneksi.php';

$id_paket = $_GET['id_paket'];
$queryDelete = "DELETE FROM paket_wisata WHERE id_wisata = '$id_paket'";
//echo($queryDelete);
mysqli_query($koneksi,$queryDelete);
echo "<script>
            alert('Berhasil dihapus');
            window.location.href='paket-wisata';
            </script>";
            //header("location:tentang");
?>