<?php
    include 'config.php';

    $captcha = $_POST['captcha'];
    $verif = $_POST['verif'];

    if ($captcha != $verif) {
        echo "<script>
                alert('Please check captcha');
                window.history.back();
            </script>";
    }
    else if ($captcha == $verif) {
        // $sql = "INSERT INTO pesan (nama,email,telepon,pesan) VALUES (:nama,:email,:telepon,:pesan)";
        // $query = $dbh->prepare($sql);
        // $query->bindParam(':nama',$nama,PDO::PARAM_STR);
        // $query->bindParam(':email',$email,PDO::PARAM_STR);
        // $query->bindParam(':telepon',$telepon,PDO::PARAM_STR);
        // $query->bindParam(':pesan',$pesan,PDO::PARAM_STR);
        // $query->execute();
        // $lastInsertId = $dbh->lastInsertId();
        // if($lastInsertId)
        // {
        //     echo "<script>
        //     alert('Your message has been sent, thank you!');
        //     window.location.href='contactus';
        //     </script>";
        // }
        $to = "master@sistempintar.com";
        $nama = $_POST['nama'];
        $email = $_POST['email'];
        $telepon = $_POST['telepon'];
        $pesan = $_POST['pesan'];

        mail($to, "Contact Us Page", $pesan." Telepon : ".$telepon, "FROM : ".$email);
    } 
    else {
    echo "<script>alert('Something went wrong. Please try again');</script>";
}
    }   
?>