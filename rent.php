<?php include 'koneksi.php'; ?>
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

    <!-- Banner -->
    <?php //include 'slider.php' ?>


    <!-- Breadcrumb -->
    <section class="breadcrumb-outer text-center" style="padding-top: 50px; background: url(images/bg442.jpg) no-repeat;background-size: cover;">
        <div class="container">
            <div class="breadcrumb-content">
                <h2>Car Rental</h2>
                <nav aria-label="breadcrumb">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Car Rental</li>
                    </ul>
                </nav>
            </div>
        </div>
        <div class="section-overlay"></div>
    </section>
    <!-- BreadCrumb Ends -->

    <!-- Destinations -->
    <section class="destinations destination-padding" style="background: url(images/83.jpg) no-repeat;background-size: cover;">
        <div class="container">
            <div class="row">
                <?php
                $query_mysql = mysqli_query($koneksi,"SELECT * FROM rent")or die(mysqli_error());
                while($data = mysqli_fetch_array($query_mysql)){
                    $idRent = $data['id'];
                    $namaRent = $data['nama'];
                    $deskripsiRent = $data['deskripsi'];
                    $gambarRent = $data['gambar'];
                ?>
                <div class="col-md-4 col-sm-4">
                    <div class="destination-item destination-4-col">
                        <div class="destination-image">
                            <img src="<?php echo $gambarRent; ?>" alt="Image" style="height: 200px;">
                            <div class="destination-overlay"></div>
                            <div class="destination-btn">
                                <a href="#" class="btn-blue btn-red">Contact Us For Further Book</a>
                            </div>
                        </div>
                        <div class="destination-content">
                            <h3><a href="#"><?php echo $namaRent; ?></a></h3>
                            <p><?php echo $deskripsiRent; ?></p>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
            <!--<div class="row">
                <div class="col-md-12">
                    <div class="pagination-content">
                        <ul class="pagination">
                            <li><a href="#"><i class="fa fa-angle-double-left" aria-hidden="true"></i></a></li>
                            <li class="active"><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i></a></li>
                        </ul>
                    </div> 
                </div>
            </div>-->
        </div>
    </section>
    <!-- Destination Ends -->

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