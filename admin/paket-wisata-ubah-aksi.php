<?php
    include 'koneksi.php';

    $lokasi_file= $_FILES['gambar']['tmp_name'];
    $nama_file = $_FILES['gambar']['name'];

    $folder = "../images/$nama_file";

    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $deskripsi = $_POST['deskripsi'];
    $harga = $_POST['harga'];
    $fasilitas = $_POST['fasilitas'];
    $jenis = $_POST['jenis'];

    $queryCariJenis = "SELECT * FROM jenis_paket WHERE nama_paket = '$jenis'";
    $queryJenis = mysqli_query($koneksi,$queryCariJenis);
    //echo($queryCariJenis);
    $d = mysqli_fetch_assoc($queryJenis);
    $jenisPaket = $d['id_paket'];

    if ($nama_file != '') {
        $queryUpdate = "UPDATE paket_wisata SET
                        nama_wisata = '$nama',
                        deskripsi_wisata = '$deskripsi',
                        harga_wisata = '$harga',
                        fasilitas_wisata = '$fasilitas',
                        gambar_wisata = 'images/$nama_file',
                        jenis_paket = '$jenisPaket'
                        WHERE id_wisata = '$id'
                        ";
        if (move_uploaded_file($lokasi_file, "$folder")) {
            mysqli_query($koneksi,$queryUpdate);
            echo "<script>
            alert('Berhasil diupdate');
            window.location.href='paket-wisata';
            </script>";
            //header("location:paket-wisata");
            //echo $queryUpdate;
        }
        else if (!move_uploaded_file($lokasi_file, "$folder")) {
            echo "error";
        }
    }
    else if ($nama_file == '') {
        $queryUpdate = "UPDATE paket_wisata SET
                        nama_wisata = '$nama',
                        deskripsi_wisata = '$deskripsi',
                        harga_wisata = '$harga',
                        fasilitas_wisata = '$fasilitas',
                        jenis_paket = '$jenisPaket'
                        WHERE id_wisata = '$id'
                        ";
        mysqli_query($koneksi,$queryUpdate);
        echo "<script>
            alert('Berhasil diupdate');
            window.location.href='paket-wisata';
            </script>";
            //header("location:paket-wisata");
        //echo $queryUpdate;
    }
    else{
        echo "error";
    }
    
?>