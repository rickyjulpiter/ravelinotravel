<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php
    include 'admin/koneksi.php';
    $query_mysql = mysqli_query($koneksi,"SELECT * FROM tbl_TentangTravel")or die(mysqli_error());
    while($data = mysqli_fetch_array($query_mysql)){
        $title = $data['nama_travel'];
    ?>
    <title><?php echo $title; ?></title>
    <?php } ?>
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
</head>