<?php
    include 'koneksi.php';

    $lokasi_file= $_FILES['gambar']['tmp_name'];
    $nama_file = $_FILES['gambar']['name'];

    $folder = "../images/$nama_file";

    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $deskripsi = $_POST['deskripsi'];

    if ($nama_file != '') {
        $queryUpdate = "UPDATE jenis_paket SET
                        nama_paket = '$nama',
                        deskripsi_paket = '$deskripsi',
                        gambar_paket = 'images/$nama_file'
                        WHERE id_paket = '$id'
                        ";
        if (move_uploaded_file($lokasi_file, "$folder")) {
            mysqli_query($koneksi,$queryUpdate);
            echo "<script>
            alert('Berhasil diupdate');
            window.location.href='jenis-paket';
            </script>";
            //header("location:jenis-paket");
        }
        else if (!move_uploaded_file($lokasi_file, "$folder")) {
            echo "error";
        }
    }
    else if ($nama_file == '') {
        $queryUpdate = "UPDATE jenis_paket SET
                        nama_paket = '$nama',
                        deskripsi_paket = '$deskripsi'
                        WHERE id_paket = '$id'
                        ";
        mysqli_query($koneksi,$queryUpdate);
        echo "<script>
        alert('Berhasil diupdate');
        window.location.href='jenis-paket';
        </script>";
        //header("location:jenis-paket");
    }
    else{
        echo "error";
    }
    
?>