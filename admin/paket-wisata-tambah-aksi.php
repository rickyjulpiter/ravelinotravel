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
        $queryInsert = "INSERT INTO paket_wisata (
                        nama_wisata,
                        deskripsi_wisata,
                        harga_wisata,
                        fasilitas_wisata,
                        gambar_wisata,
                        jenis_paket
                        ) VALUES
                        ('$nama','$deskripsi','$harga','$fasilitas','images/$nama_file','$jenisPaket')
                        ";
        if (move_uploaded_file($lokasi_file, "$folder")) {
            mysqli_query($koneksi,$queryInsert);
            echo "<script>
            alert('Berhasil ditambahkan');
            window.location.href='paket-wisata';
            </script>";
            //header("location:paket-wisata");
            //echo $queryInsert;
        }
        else if (!move_uploaded_file($lokasi_file, "$folder")) {
            echo "error";
        }
    }
    else if ($nama_file == '') {
        $queryInsert = "INSERT INTO paket_wisata (
                        nama_wisata,
                        deskripsi_wisata,
                        harga_wisata,
                        fasilitas_wisata,
                        jenis_paket
                        ) VALUES
                        ('$nama','$deskripsi','$harga','$fasilitas','$jenisPaket')
                        ";
        mysqli_query($koneksi,$queryInsert);
        echo "<script>
        alert('Berhasil ditambahkan');
        window.location.href='paket-wisata';
        </script>";
        //header("location:paket-wisata");
        //echo $queryInsert;
    }
    else{
        echo "error";
    }
    
?>