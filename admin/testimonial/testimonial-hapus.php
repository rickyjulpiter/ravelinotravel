<?php
include 'koneksi.php';

$idTesti = $_GET['idTesti'];
$queryDelete = "DELETE FROM testimonial WHERE id_testi = '$idTesti'";
//echo($queryDelete);
mysqli_query($koneksi,$queryDelete);
echo "<script>
            alert('Berhasil dihapus');
            window.location.href='testimonial';
            </script>";
            //header("location:tentang");
?>