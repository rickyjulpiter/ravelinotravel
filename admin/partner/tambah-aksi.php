<?php
    include '../../koneksi.php';

    $nama = $_POST['nama'];
    $image = "images/".$nama."-".basename( $_FILES["gambar"]["name"]);

    $lokasi_file= $_FILES['gambar']['tmp_name'];
    $nama_file = $_FILES['gambar']['name'];

    $folder = "../../images/".$nama."-".$nama_file;

    if ($nama_file != '') {
        $queryInsert = "INSERT INTO partner (nama,gambar) VALUES ('$nama','$image')";
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
        $queryInsert = "INSERT INTO partner (nama) VALUES ('$nama')";
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