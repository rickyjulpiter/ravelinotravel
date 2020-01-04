<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="zxx">
<?php include 'koneksi.php';

$queryTentang = mysqli_query($koneksi, "SELECT * FROM tentang WHERE id = 1") or die(mysqli_error());
$tentang = mysqli_fetch_assoc($queryTentang);
$namaTentang = $tentang['nama'];
$deskripsiTentang = $tentang['deskripsi'];
$staticImage = $tentang['static_image'];
?>
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
    <section class="breadcrumb-outer text-center" style="padding-top: 50px; background-size: cover;">
        <div class="container">
            <div class="breadcrumb-content">
                <h2>About Us</h2>
                <nav aria-label="breadcrumb">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">About</li>
                    </ul>
                </nav>
            </div>
        </div>
        <div class="section-overlay"></div>
    </section>
    <!-- BreadCrumb Ends -->

    <section class="contact" style="background: url(3040791.jpg) no-repeat;background-size: cover;">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div id="contact-form" class="contact-form">

                        <div id="contactform-error-msg"></div>
                        <img src="<?= $staticImage ?>" style="padding-bottom: 15px;height:400px;width:650px;object-fit:contain">
                        <?php echo ($deskripsiTentang); ?>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="contact-about footer-margin">
                        <div class="about-logo">
                            <img src="<?php echo $logo; ?>" alt="Image" style="width: 100%">
                        </div>
                        <h4><?php echo $slogan; ?></h4>
                        <p><?php //echo $deskripsi; 
                            ?></p>
                        <div class="contact-location">
                            <ul>
                                <li><i class="fa fa-map-marker" aria-hidden="true"></i></i> <?php echo $alamat; ?></li>
                                <li><i class="fa fa-phone" aria-hidden="true"></i> <?php echo $telepon; ?></li>
                                <li><a href="https://wa.me/<?= $whatsapp; ?>" style="color:#777;"><i class="fa fa-whatsapp" aria-hidden="true"></i> <?php echo $whatsapp; ?></a></li>
                                <li><a href="mailto:<?= $email ?>" style="color:#777;"><i class="fa fa-envelope" aria-hidden="true"></i> <?php echo $email; ?></a></li>
                            </ul>
                        </div>
                        <div class="footer-social-links">
                            <ul>
                                <li class="social-icon"><a href="<?php echo $facebook; ?>"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                <li class="social-icon"><a href="<?php echo $instagram; ?>"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                <li class="social-icon"><a href="<?php echo $twitter; ?>"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                <li class="social-icon"><a href="<?php echo $youtube; ?>"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <?php include 'template/footer.php' ?>
    <!-- Footer Ends -->

    <!-- back to top start -->
    <div id="back-to-top">
        <a href="#"></a>
    </div>

    <!-- *Scripts* -->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/plugin.js"></script>
    <script src="js/map.js"></script>
    <script src="js/main.js"></script>
    <script src="js/preloader.js"></script>

</body>

</html>