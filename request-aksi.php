<?php
    //error_reporting(0);
    include 'koneksi.php';
    include 'config.php';

    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $telepon = $_POST['telepon'];
    $pesan = $_POST['pesan'];

    $whatsapp = $_POST['whatsapp'];
    $alamat = $_POST['alamat'];
    $tentang = $_POST['tentang'];

    $captcha = $_POST['captcha'];
    $verif = $_POST['verif'];

    if ($captcha != $verif) {
        echo "<script>
                alert('Please check captcha');
                window.history.back();
            </script>";
    }
    else if ($captcha == $verif) {
    // $sql = "INSERT INTO request (nama,email,telepon,wa,alamat,subject,pesan) VALUES (:nama,:email,:telepon,:whatsapp,:alamat,:tentang,:pesan)";
    // $query = $dbh->prepare($sql);
    // $query->bindParam(':nama',$nama,PDO::PARAM_STR);
    // $query->bindParam(':email',$email,PDO::PARAM_STR);
    // $query->bindParam(':telepon',$telepon,PDO::PARAM_STR);

    // $query->bindParam(':whatsapp',$whatsapp,PDO::PARAM_STR);
    // $query->bindParam(':alamat',$alamat,PDO::PARAM_STR);
    // $query->bindParam(':tentang',$tentang,PDO::PARAM_STR);

    // $query->bindParam(':pesan',$pesan,PDO::PARAM_STR);
    // $query->execute();
    // $lastInsertId = $dbh->lastInsertId();
    // if($lastInsertId)
    // {
    //     echo "<script>
    //     alert('Your request has been sent, thank you!');
    //     window.location.href='request';
    //     </script>";
    // }
    // else 
    // {
    //     echo "<script>alert('Something went wrong. Please try again');</script>";
    // }

    $queryTentang = mysqli_query($koneksi, "SELECT * FROM tentang WHERE id = 1") or die(mysqli_error());
    $tentang = mysqli_fetch_assoc($queryTentang);
    $kepada = $tentang['email'];
    $title = "Special Request Page Ravelino Travel Web";
    $pesan = "From :  
              Name :" .$nama."
              Email :" .$email."
              Phone No :" .$telepon."
              Whatsapp No :" .$whatsapp."
              Address :" .$alamat."
              Subject :" .$tentang."
              Message :" .$pesan;
    $kepada2 = "hello@sistempintar.com";
    mail($kepada2, $title, $pesan);
    if (mail($kepada, $title, $pesan)) {
        echo "<script>
            alert('Your message has been sent, thank you!');
            window.location.href='request';
            </script>";
    } else {
        echo "<script>
            alert('Gagal dikirim!');
            window.location.href='request';
            </script>";
    }
    }
?>