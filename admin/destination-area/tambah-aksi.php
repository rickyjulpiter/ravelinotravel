<?php
    include '../../koneksi.php';

    $nama = $_POST['nama'];
    $deskripsi = $_POST['deskripsi'];
    $deskripsi_singkat = $_POST['deskripsi_singkat'];
    $destinasi = $_POST['destinasi'];
    $image = "images/".$nama."-".basename( $_FILES["gambar"]["name"]);

    $lokasi_file= $_FILES['gambar']['tmp_name'];
    $nama_file = $_FILES['gambar']['name'];

    $folder = "../../images/".$nama."-".$nama_file;

    if ($nama_file != '') {
        $queryInsert = "INSERT INTO destinasi_area (nama_area,deskripsi_area,deskripsi_area_singkat,gambar_area,destinasi_id) VALUES ('$nama','$deskripsi','$deskripsi_singkat','$image',$destinasi)";
        if (move_uploaded_file($lokasi_file, "$folder")) {
            mysqli_query($koneksi,$queryInsert);
            echo "<script>
            alert('Berhasil ditambahkan');
            window.location.href='index';
            </script>";
            
            //header("location:paket-wisata");
            //echo $queryInsert;
        }
        else if (!move_uploaded_file($lokasi_file, "$folder")) {
            echo "error";
        }
    }
    else if ($nama_file == '') {
        $queryInsert = "INSERT INTO destinasi_area (nama_area,deskripsi_area,deskripsi_area_singkat,destinasi_id) VALUES ('$nama','$deskripsi','$deskripsi_singkat',$destinasi)";
        mysqli_query($koneksi,$queryInsert);
        echo "<script>
        alert('Berhasil ditambahkan');
        window.location.href='index';
        </script>";

        //header("location:paket-wisata");
        //echo $queryInsert;
    }
    else{
        echo "error";
    }
    
?>