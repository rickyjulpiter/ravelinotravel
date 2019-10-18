<?php
    include '../../koneksi.php';

    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $deskripsi = $_POST['deskripsi'];
    $peta = $_POST['peta'];
    $timeline = $_POST['timeline'];
    $data_des = $_POST['data_des'];
    $nama_gambar = $_FILES['gambar']['name'];
    $lokasi_gambar = $_FILES['gambar']['tmp_name'];
    $idgambar = $_POST['idgambar'];
    $add_nama_gambar = $_FILES['tambahgambar']['name'];
    $add_lokasi_gambar = $_FILES['tambahgambar']['tmp_name'];
    
    for($i=0; $i<sizeof($add_nama_gambar); $i++){
        if($add_nama_gambar[$i] != ''){
            $imageSave = "images/"."tour".$id."-".$i."-".$add_nama_gambar[$i];
            $folder = "../../images/"."tour".$id."-".$i."-".$add_nama_gambar[$i];
            $queryInsert = "INSERT INTO paket_wisata_gambar (paket_wisata_id,gambar) VALUES ('$id','$imageSave')";
            if(move_uploaded_file($add_lokasi_gambar[$i], "$folder")){
                $data = mysqli_query($koneksi,$queryInsert);
            }
        }
    }

    $query_mysql = mysqli_query($koneksi,"SELECT gambar FROM paket_wisata_gambar WHERE paket_wisata_id = '$id'");
    while($data = mysqli_fetch_array($query_mysql)){
        $i=0;
        if($nama_gambar[$i]!=''){
            unlink('../../'.$data['gambar']);    
        }
        $i++;
    }

    $queryDelete = "DELETE FROM paket_wisata_detail WHERE paket_wisata_id = '$id'";
    mysqli_query($koneksi,$queryDelete);

    // $queryDelete = "DELETE FROM paket_wisata_gambar WHERE paket_wisata_id = '$id'";
    // mysqli_query($koneksi,$queryDelete);

    for($i=0; $i<sizeof($data_des); $i++){
        $queryInsert = "INSERT INTO paket_wisata_detail (paket_wisata_id,destinasi_area_id) VALUES ('$id','$data_des[$i]')";
        mysqli_query($koneksi,$queryInsert);
    }

    for($i=0; $i<sizeof($nama_gambar); $i++){
        if($nama_gambar[$i] != ''){
            $imageSave = "images/"."tour".$id."-".$i."-".$nama_gambar[$i];
            $folder = "../../images/"."tour".$id."-".$i."-".$nama_gambar[$i];
            // $queryInsert = "INSERT INTO paket_wisata_gambar (paket_wisata_id,gambar) VALUES ('$id','$imageSave')";
            $queryUpdate = "UPDATE paket_wisata_gambar SET gambar = '$imageSave' WHERE id = '$idgambar[$i]'";
            if(move_uploaded_file($lokasi_gambar[$i], "$folder")){
                $data = mysqli_query($koneksi,$queryUpdate);
            }
        }
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