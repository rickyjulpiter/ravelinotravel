<?php
    include '../../koneksi.php';

    $nama = $_POST['nama'];
    $deskripsi = $_POST['deskripsi'];
    $peta = $_POST['peta'];
    $timeline = $_POST['timeline'];
    $data_des = $_POST['data_des'];

    $queryInsert = "INSERT INTO paket_wisata (nama,deskripsi, peta, timeline) VALUES ('$nama','$deskripsi','$peta','$timeline')";
    $data = mysqli_query($koneksi,$queryInsert);

    $queryCheckMax = mysqli_query($koneksi,"SELECT MAX(id) FROM paket_wisata");
    $d = mysqli_fetch_assoc($queryCheckMax);
    $id = $d['MAX(id)'];

    for($i=0; $i<sizeof($data_des); $i++){
        $queryInsert = "INSERT INTO paket_wisata_detail (paket_wisata_id,destinasi_area_id) VALUES ('$id','$data_des[$i]')";
        mysqli_query($koneksi,$queryInsert);
    }
    echo "<script>
        alert('Berhasil ditambah');
        window.location.href='index';
        </script>";
    
    
?>