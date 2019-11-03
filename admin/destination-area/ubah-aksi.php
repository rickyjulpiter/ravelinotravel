<?php
    include '../../koneksi.php';

    $lokasi_file= $_FILES['gambar']['tmp_name'];
    $nama_file = $_FILES['gambar']['name'];

    $folder = "../../images/$nama_file";

    $id = $_POST['id'];
    $nama = mysqli_escape_string($koneksi,$_POST['nama']);
    $deskripsi = mysqli_escape_string($koneksi,$_POST['deskripsi']);
    $deskripsi_singkat = mysqli_escape_string($koneksi,$_POST['deskripsi_singkat']);
    $destinasi = $_POST['destinasi'];

    if ($nama_file != '') {
        $queryUpdate = "UPDATE destinasi_area SET
                        nama_area = '$nama',
                        deskripsi_area = '$deskripsi',
                        destinasi_id = '$destinasi',
                        deskripsi_area_singkat = '$deskripsi_singkat',
                        gambar_area = 'images/$nama_file'
                        WHERE id_area = '$id'
                        ";
        if (move_uploaded_file($lokasi_file, "$folder")) {
            mysqli_query($koneksi,$queryUpdate);
            echo "<script>
            alert('Berhasil diupdate');
            window.location.href='index';
            </script>";
        }
        else if (!move_uploaded_file($lokasi_file, "$folder")) {
            echo "error";
        }
    }
    else if ($nama_file == '') {
        $queryUpdate = "UPDATE destinasi_area SET
                        nama_area = '$nama',
                        deskripsi_area = '$deskripsi',
                        destinasi_id = '$destinasi',
                        deskripsi_area_singkat = '$deskripsi_singkat'
                        WHERE id_area = '$id'
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