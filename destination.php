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
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="package-item">
                        <img src="https://www.larutadelsorigens.cat/wallpic/full/80-807611_berastagi-by-berastagi-indonesia.jpg" alt="Image" width="293px" height="195px" style="object-fit: cover;">
                        <div class="package-content">
                            <h3><a href="tour-area.php"  style="color: green">Brastagi, North Sumatra</a></h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="package-item">
                        <img src="https://www.en.safariwisata.co.id/wp-content/uploads/2019/04/IMG_20190227_134658_514.jpg" alt="Image" width="293px" height="195px" style="object-fit: cover;">
                        <div class="package-content">
                            <h3><a href="tour-area.php"  style="color: green">Dua Island, Aceh</a></h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="package-item">
                        <img src="https://steemitimages.com/DQmeQhFUfegFFSj2vBNqVUirhaX55ViLUX8Ua8C6CJGcJqd/0858062Aceh-Singkil-Pulau-Asok780x390.jpg" alt="Image" width="293px" height="195px" style="object-fit: cover;">
                        <div class="package-content">
                            <h3><a href="tour-area.php"  style="color: green">Asok Island, Aceh</a></h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="package-item">
                        <img src="https://4.bp.blogspot.com/-BC_VgwXvybY/VntCSid5ovI/AAAAAAAAL7I/foHh66dZMyc/s1600/pulaubalai1.JPG" alt="Image" width="293px" height="195px" style="object-fit: cover;">
                        <div class="package-content">
                            <h3><a href="tour-area.php"  style="color: green">Balai Island, Aceh</a></h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="package-item">
                        <img src="http://1.bp.blogspot.com/-Z2XoSSzm7o0/U2ooa1tZsZI/AAAAAAAABw8/6sN-NPWgVj0/s1600/IMG_1591.jpg" alt="Image" width="293px" height="195px" style="object-fit: cover;">
                        <div class="package-content">
                            <h3><a href="tour-area.php"  style="color: green">Balong Island, Aceh</a></h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="package-item">
                        <img src="http://1.bp.blogspot.com/-QQyYT4eQ5rM/VH1ja-HUZHI/AAAAAAAAAZg/y424d-QK3n0/s1600/Pulau%2Bbanyak.jpg" alt="Image" width="293px" height="195px" style="object-fit: cover;">
                        <div class="package-content">
                            <h3><a href="tour-area.php"  style="color: green">Bangkaru Island, Aceh</a></h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod.</p>
                        </div>
                    </div>
                </div>
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