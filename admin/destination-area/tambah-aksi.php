<?php
    include '../../koneksi.php';

    $nama = mysqli_escape_string($koneksi,$_POST['nama']);
    $deskripsi = mysqli_escape_string($koneksi,$_POST['deskripsi']);
    $deskripsi_singkat = mysqli_escape_string($koneksi,$_POST['deskripsi_singkat']);
    $destinasi = $_POST['destinasi'];

    $images = array();
    $lokasi_file= array();
    if(!empty($_FILES["gambar"]["name"])){
        $images = $_FILES["gambar"]["name"];
        $lokasi_file= $_FILES['gambar']['tmp_name'];
    }
    

    // $folder = "../../images/".$nama."-".$nama_file;

    $queryInsert = "INSERT INTO destinasi_area (nama_area,deskripsi_area,deskripsi_area_singkat,destinasi_id) VALUES ('$nama','$deskripsi','$deskripsi_singkat',$destinasi)";
    $proses = mysqli_query($koneksi,$queryInsert);
    if($proses){
        $queryCheckMax = mysqli_query($koneksi,"SELECT MAX(id_area) FROM destinasi_area");
        $d = mysqli_fetch_assoc($queryCheckMax);
        $id = $d['MAX(id_area)'];

        for($i=0; $i<sizeof($images); $i++){
            $gambar = "images/".$nama."-".$i.'-'.$images[$i];
            $folder = "../../images/".$nama."-".$i.'-'.$images[$i];
            $InsertGambar = "INSERT INTO destinasi_area_gambar (destinasi_area_id,gambar) VALUES ('$id','$gambar')";
            if (move_uploaded_file($lokasi_file[$i], "$folder")) {
                mysqli_query($koneksi,$InsertGambar);
            }
        }
    }

    echo "<script>
        alert('Berhasil ditambahkan');
        window.location.href='index';
        </script>"; 


    // if ($nama_file != '') {
    //     $queryInsert = "INSERT INTO destinasi_area (nama_area,deskripsi_area,deskripsi_area_singkat,gambar_area,destinasi_id) VALUES ('$nama','$deskripsi','$deskripsi_singkat','$image',$destinasi)";
    //     if (move_uploaded_file($lokasi_file, "$folder")) {
    //         mysqli_query($koneksi,$queryInsert);
    //         echo "<script>
    //         alert('Berhasil ditambahkan');
    //         window.location.href='index';
    //         </script>";
            
    //         //header("location:paket-wisata");
    //         //echo $queryInsert;
    //     }
    //     else if (!move_uploaded_file($lokasi_file, "$folder")) {
    //         echo "error";
    //     }
    // }
    // else if ($nama_file == '') {
    //     $queryInsert = "INSERT INTO destinasi_area (nama_area,deskripsi_area,deskripsi_area_singkat,destinasi_id) VALUES ('$nama','$deskripsi','$deskripsi_singkat',$destinasi)";
    //     mysqli_query($koneksi,$queryInsert);
    //     echo "<script>
    //     alert('Berhasil ditambahkan');
    //     window.location.href='index';
    //     </script>";

    //     //header("location:paket-wisata");
    //     //echo $queryInsert;
    // }
    // else{
    //     echo "error";
    // }
    
?>