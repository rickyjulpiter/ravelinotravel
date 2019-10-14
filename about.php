<?php include 'koneksi.php';

$queryTentang = mysqli_query($koneksi,"SELECT * FROM tentang WHERE id = 1")or die(mysqli_error());
$tentang = mysqli_fetch_assoc($queryTentang);
$namaTentang = $tentang['nama'];
$deskripsiTentang = $tentang['deskripsi'];
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

    <!-- Breadcrumb -->
    <section class="breadcrumb-outer text-center" style="background: url(images/danautoba.jpg ) no-repeat; object-fit: cover;">
        <div class="container">
            <div class="breadcrumb-content">
                <h2>About Us</h2>
                <nav aria-label="breadcrumb">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">About Us</li>
                    </ul>
                </nav>
            </div>
        </div>
        <div class="section-overlay"></div>
    </section>
    <!-- BreadCrumb Ends -->

    <!-- About Us -->
    <section class="aboutus">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="section-title text-center">
                        <h2>Why Choose Us?</h2>
                        <div class="section-icon section-icon-white">
                            <i class="flaticon-diamond"></i>
                        </div>
                         <p><?php echo($deskripsiTentang); ?></p> 
                    </div>
                </div>
            </div>
            </div>
            <!--
            <div class="row">
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="about-item">
                        <div class="about-icon">
                            <i class="fa fa-superpowers" aria-hidden="true"></i>
                        </div>
                        <div class="about-content">
                            <h3>Perfect Planning</h3>
                            <p>Plan your perfect vacation with our travel agency. Choose among hundreds of all-inclusive offers!</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="about-item">
                        <div class="about-icon">
                            <i class="fa fa-paw" aria-hidden="true"></i>
                        </div>
                        <div class="about-content">
                            <h3>Secure Venues</h3>
                            <p>We work hard to secure the best hotel rates in the most popular destinations. Search and book adventure tours now!</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="about-item">
                        <div class="about-icon">
                            <i class="fa fa-fire" aria-hidden="true"></i>
                        </div>
                        <div class="about-content">
                            <h3>Beautiful Memories</h3>
                            <p>Book international vacation packages with us and create memories that will last a lifetime! Create History !</p>
                        </div>
                    </div>
                </div>
            </div>
            -->
        </div>
    </section>
    <!-- About Us Ends -->

    <!-- Testimonials -->
    <?php include 'testimonials.php' ;?>
    <!-- Testimonials -->

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
    <script src="js/custom-countdown.js"></script>
    <script src="js/preloader.js"></script>
</body>
</html>