<?php
    include 'koneksi.php';
    include 'admin/login/config.php';

    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $telepon = $_POST['telepon'];
    $pesan = $_POST['pesan'];

    $captcha = $_POST['captcha'];
    $verif = $_POST['verif'];

    if ($captcha != $verif) {
        echo "<script>
                alert('Please check captcha');
                window.history.back();
            </script>";
    }
    else if ($captcha == $verif) {
        $sql = "INSERT INTO request (nama,email,telepon,pesan) VALUES (:nama,:email,:telepon,:pesan)";
        $query = $dbh->prepare($sql);
        $query->bindParam(':nama',$nama,PDO::PARAM_STR);
        $query->bindParam(':email',$email,PDO::PARAM_STR);
        $query->bindParam(':telepon',$telepon,PDO::PARAM_STR);
        $query->bindParam(':pesan',$pesan,PDO::PARAM_STR);
        $query->execute();
        $lastInsertId = $dbh->lastInsertId();
        if($lastInsertId)
        {
            echo "<script>
            alert('Your request has been sent, thank you!');
            window.location.href='request';
            </script>";
        }
        else 
        {
            echo "<script>alert('Something went wrong. Please try again');</script>";
        }
    }
?>