<?php include 'koneksi.php'; ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="zxx">

<?php include 'template/head.php' ?>
<body>
    <!--
    <a href="https://wa.me/<?php echo $telepon; ?>" class="float" target="_blank">
        <i class="fa fa-whatsapp my-float"></i>
    </a>
    -->

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
    <?php include 'slider.php' ?>
    <!-- Banner Ends -->

    <!-- Paket Tour Domestik --> 
    <?php include 'tour-packages/domestik.php' ?>
    <!-- Paket Tour Domestik Ends -->

    <!-- Paket Tour International --> 
    <?php include 'tour-packages/international.php' ?>
    <!-- Paket Tour International Ends -->

    <!-- Paket Tour Religi --> 
    <?php include 'tour-packages/religi.php' ?>
    <!-- Paket Tour Religi --> 

    <!-- Testimonials -->
    <?php include 'testimonials.php' ?>
    <!-- Testimonials -->

    <!-- Testimonials -->
    <?php include 'partner.php' ?>
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