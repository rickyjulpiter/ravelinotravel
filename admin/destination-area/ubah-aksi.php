<?php
    include '../../koneksi.php';

    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $deskripsi = $_POST['deskripsi'];
    $deskripsi_singkat = $_POST['deskripsi_singkat'];
    $destinasi = $_POST['destinasi'];

    $queryUpdate = "UPDATE destinasi_area SET
                        nama_area = '$nama',
                        deskripsi_area = '$deskripsi',
                        destinasi_id = '$destinasi',
                        deskripsi_area_singkat = '$deskripsi_singkat'
                        WHERE id_area = '$id'
                        ";
    $data = mysqli_query($koneksi,$queryUpdate);
    echo "<script>
        alert('Berhasil diupdate');
        window.location.href='index';
        </script>";

            //header("location:testimonial");
    
?>