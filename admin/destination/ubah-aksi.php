<?php
    include '../../koneksi.php';

    $lokasi_file= $_FILES['gambar']['tmp_name'];
    $nama_file = $_FILES['gambar']['name'];

    $folder = "../../images/$nama_file";

    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $deskripsi = $_POST['deskripsi'];
    $deskripsi_singkat = $_POST['deskripsi_singkat'];

    if ($nama_file != '') {
        $queryUpdate = "UPDATE destinasi SET
                        nama = '$nama',
                        deskripsi = '$deskripsi',
                        deskripsi_singkat = '$deskripsi_singkat',
                        gambar = 'images/$nama_file'
                        WHERE id = '$id'
                        ";
        if (move_uploaded_file($lokasi_file, "$folder")) {
            mysqli_query($koneksi,$queryUpdate);
            echo "<script>
            alert('Berhasil diupdate');
            window.location.href='index';
            </script>";
            //header("location:jenis-paket");
        }
        else if (!move_uploaded_file($lokasi_file, "$folder")) {
            echo "error";
        }
    }
    else if ($nama_file == '') {
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
        //header("location:jenis-paket");
    }
    else{
        echo "error";
    }
    
?>