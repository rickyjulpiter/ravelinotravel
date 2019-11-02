<head>
    <?php
    include './koneksi.php';
    $queryTentang = mysqli_query($koneksi,"SELECT * FROM tentang WHERE id = 1")or die(mysqli_error());
    $tentang = mysqli_fetch_assoc($queryTentang);
    $nama = $tentang['nama'];
    $slogan = $tentang['slogan'];
    $deskripsi = $tentang['deskripsi'];
    $alamat = $tentang['alamat'];
    $telepon = $tentang['telepon'];
    $email = $tentang['email'];
    $facebook = $tentang['facebook'];
    $twitter = $tentang['twitter'];
    $instagram = $tentang['instagram'];
    $youtube = $tentang['youtube'];
    $logo = $tentang['logo'];
    ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?php echo $nama; ?></title>
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="images/logo1.png">
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <!--Custom CSS-->
    <link href="css/style.css" rel="stylesheet" type="text/css">
    <!--Flaticons CSS-->
    <link href="font/flaticon.css" rel="stylesheet" type="text/css">
    <!--Plugin CSS-->
    <link href="css/plugin.css" rel="stylesheet" type="text/css">
    <!--Font Awesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

</head>