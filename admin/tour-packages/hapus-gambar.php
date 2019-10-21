<?php
include '../../koneksi.php';

$idGambar = $_GET['idGambar'];
$idTour = $_GET['idTour'];

$queryDelete = "DELETE FROM paket_wisata_gambar WHERE id = '$idGambar'";
mysqli_query($koneksi,$queryDelete);
       
header("location:ubah?idTourPackages=$idTour");
?>