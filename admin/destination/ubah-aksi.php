<?php
    include '../../koneksi.php';

    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $deskripsi = $_POST['deskripsi'];
    $deskripsi_singkat = $_POST['deskripsi_singkat'];

    $queryUpdate = "UPDATE destinasi SET
                        nama = '$nama',
                        deskripsi = '$deskripsi',
                        deskripsi_singkat = '$deskripsi_singkat'
                        WHERE id = '$id'
                        ";
    mysqli_query($koneksi,$queryUpdate);
     echo "<script>
            alert('Berhasil diupdate');
            window.location.href='index';
            </script>";
   
            //header("location:testimonial");
    
?>