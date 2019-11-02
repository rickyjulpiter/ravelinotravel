<?php include 'koneksi.php'; 

$namaWisata = $_GET['destination'];

?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="zxx">

<?php include 'template/head.php' ?>
<body>

    <!-- Preloader -->
    <?php include 'template/preloader.php' ?>
    <!-- Preloader Ends -->

    <!-- Header -->
    <?php include 'template/header.php' ?>
    <!-- Header Ends -->

    <!-- Navigation Bar -->
    <?php include 'template/nav.php' ?>
    <!-- Navigation Bar Ends -->

    <?php 
    $query_sql = "SELECT * FROM destinasi WHERE nama = '$namaWisata'";
    $queryDetailDestinasi = mysqli_query($koneksi,$query_sql)or die(mysqli_error());
    $data = mysqli_fetch_assoc($queryDetailDestinasi);
    $namaDestinasi = $data['nama'];
    $deskripsi_singkatDestinasi = $data['deskripsi_singkat'];
    $deskripsiDestinasi = $data['deskripsi'];
    $gambarDestinasi = $data['gambar'];

    ?>
    <!-- Breadcrumb -->
    <section class="breadcrumb-outer text-center" style="padding-top: 50px; background: url(images/bg442.jpg) no-repeat;background-size: cover;">
        <div class="container">
            <div class="breadcrumb-content">
                <h2><?php echo $namaDestinasi; ?></h2>
                <nav aria-label="breadcrumb">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page"><?php echo $namaDestinasi; ?></li>
                    </ul>
                </nav>
            </div>
        </div>
        <div class="section-overlay"></div>
    </section>
    <!-- BreadCrumb Ends -->

    <!-- Detail -->
    <section class="item-content" style="background: url(images/83.jpg) no-repeat;background-size: cover;">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-md-offset-0">
                    <div class="item-wrapper">
                        <div class="cover-content">
                            <div class="author-detail">
                                <a href="#" class="tag tag-blue">#Destination #<?php echo $namaDestinasi; ?></a>
                            </div>
                            <h2 style="text-align: justify;"><?php echo $deskripsi_singkatDestinasi; ?></h2>
                        </div>
                        <div class="cover-image">
                            <img src="<?php echo $gambarDestinasi ;?>" alt="Image">
                        </div>
                        <div class="item-detail">
                            <?php echo($deskripsiDestinasi);?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <?php include 'template/footer.php' ?>
    <!-- Footer Ends -->  

    <!-- Back to top start -->
    <div id="back-to-top">
        <a href="#"></a>
    </div>
    <!-- Back to top ends -->

    <!-- *Scripts* -->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/plugin.js"></script>
    <script src="js/main.js"></script>
    <script src="js/main-1.js"></script>
    <script src="js/preloader.js"></script>
</body>
</html>