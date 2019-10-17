<?php
    include '../../koneksi.php';

    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $deskripsi = $_POST['deskripsi'];
    $peta = $_POST['peta'];
    $timeline = $_POST['timeline'];
    $data_des = $_POST['data_des'];

    $queryDelete = "DELETE FROM paket_wisata_detail WHERE paket_wisata_id = '$id'";
    mysqli_query($koneksi,$queryDelete);

    for($i=0; $i<sizeof($data_des); $i++){
        $queryInsert = "INSERT INTO paket_wisata_detail (paket_wisata_id,destinasi_area_id) VALUES ('$id','$data_des[$i]')";
        mysqli_query($koneksi,$queryInsert);
    }

    $queryUpdate = "UPDATE paket_wisata SET
                        nama = '$nama',
                        deskripsi = '$deskripsi',
                        peta = '$peta',
                        timeline = '$timeline'
                        WHERE id = '$id'
                        ";
    $data = mysqli_query($koneksi,$queryUpdate);
    echo "<script>
        alert('Berhasil diupdate');
        window.location.href='index';
        </script>";

            //header("location:testimonial");
    
?>