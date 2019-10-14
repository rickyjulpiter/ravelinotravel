<?php
include 'admin/koneksi.php';
$namaDestinasi = $_GET['nama_wisata'];
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="zxx">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title> Synergi Ravelino Tours & Travel</title>
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="images/logo1.png">
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <!--Custom CSS-->
    <link href="css/hotel.css" rel="stylesheet" type="text/css">
    <!--Flaticons CSS-->
    <link href="font/flaticon.css" rel="stylesheet" type="text/css">
    <!--Plugin CSS-->
    <link href="css/plugin.css" rel="stylesheet" type="text/css">
    <!--Font Awesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

    <!-- Preloader -->
    <?php include 'preloader.php';?>
    <!-- Preloader Ends -->

    <!-- Header -->
    <?php include 'header.php';?>
    <!-- Header Ends -->

    <!-- Navigation Bar -->
    <?php include 'navbar.php';?>
    <!-- Navigation Bar Ends -->

    <?php
    $query_mysql = mysqli_query($koneksi,"SELECT * FROM tbl_WisataWilayah WHERE nama_wisata = '$namaDestinasi' ")or die(mysqli_error());
    $nomor = 1;
    while($data = mysqli_fetch_array($query_mysql)){
    $id = $data['id_wisata'];
    $nama = $data['nama_wisata'];
    $deskripsi = $data['deskripsi_wisata'];
    $gambar = $data['gambar_wisata'];
    ?>
    <!-- Breadcrumb -->
    <section class="breadcrumb-outer text-center" style="background: url('<?php echo "admin/images/".$gambar ?>');background-repeat: initial;object-fit: cover;background-position: center;">
        <div class="container">
            <div class="breadcrumb-content">
                <h2>Place of Interest</h2>
                <nav aria-label="breadcrumb">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="hotel.html">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Place of Interest</li>
                    </ul>
                </nav>
            </div>
        </div>
        <div class="section-overlay"></div>
    </section>
    <!-- BreadCrumb Ends -->

    <!-- Popular Packages --> 
    <section class="popular-packages pad-bottom-80">
        <div class="container">
        
            <div class="section-title">
                <h2><span><?php echo $nama ?></span></h2>
                <p><?php echo $deskripsi ?></p>
            </div>
            <?php } ?>
            <div class="row">
                <?php
                $query_mysql = mysqli_query($koneksi,"SELECT * FROM tbl_WisataWilayahArea WHERE nama_wisata = '$namaDestinasi' ")or die(mysqli_error());
                $nomor = 1;
                while($data = mysqli_fetch_array($query_mysql)){
                $id = $data['id_wisata_area'];
                $nama = $data['nama_wisata_area'];
                $deskripsi = $data['deskripsi_wisata_area'];
                $gambar = $data['gambar_wisata_area'];
                ?>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="package-item">
                        <img src="<?php echo "admin/images/".$gambar ?>" alt="Image" width="293px" height="195px" style="object-fit: cover;">
                        <div class="package-content">
                            <h3><a href="destination?nama_wisata=<?php echo $nama; ?>"  style="color: green"><?php echo $nama ?></a></h3>
                            <p><?php echo $deskripsi ?></p>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </section>
    <!-- Popular Packages Ends -->

    <!-- Footer -->
    <?php include 'footer.php';?>
    <!-- Footer Ends -->   

    <!-- *Scripts* -->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/rangeslider.js"></script>
    <script src="js/plugin.js"></script>
    <script src="js/main.js"></script>
    <script src="js/preloader.js"></script>
</body>
</html>