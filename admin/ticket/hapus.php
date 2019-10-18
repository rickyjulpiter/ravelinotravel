<?php
include '../../koneksi.php';

$idTicket = $_GET['idTicket'];
$queryDelete = "DELETE FROM ticket WHERE id = '$idTicket'";
//echo($queryDelete);
mysqli_query($koneksi,$queryDelete);
echo "<script>
            alert('Berhasil dihapus');
            window.location.href='index';
            </script>";
            //header("location:tentang");
?>