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
    <?php include 'slider.php' ?>


    <section class="amazing-tours popular-packages pad-bottom-80"style="padding-top: 30px;">
        <div class="container">
            <div class="section-title text-center">
                <h2>Tour Destination</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Duis aute irure dolor in reprehenderit..</p>
            </div>
            <div class="row">
                <?php
                $query_mysql = mysqli_query($koneksi,"SELECT * FROM destinasi LIMIT 3")or die(mysqli_error());
                while($data = mysqli_fetch_array($query_mysql)){
                    $idDestinasi = $data['id'];
                    $namaDestinasi = $data['nama'];
                    $deskripsiDestinasi = $data['deskripsi'];
                    $gambarDestinasi = $data['gambar'];
                ?>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="package-item">
                        <img src="<?php echo $gambarDestinasi ?>" alt="Image" width="100%" height="100%" style="object-fit: cover;">
                        <div class="package-content" style="padding-bottom: 5px;"><center>
                            <h2 style="text-align: center;"><a href="destination-detail?destination=<?php echo $namaDestinasi; ?>"  style="color: green; text-align: center;" ><?php echo $namaDestinasi ?></a></h2></center>
                        </div>
                    </div>
                </div>
            <?php } ?>
            </div>
        </div>
    </section>
    <!-- Banner Ends -->

    <section class="popular-packages" style="padding-top: 50px;">
        <div class="container">
            <div class="section-title text-center">
                <h2>Top Tour Packages</h2>
                <div class="section-icon">
                    <i class="flaticon-diamond"></i>
                </div>
                <!--<p>At Authentic Indonesia, we take pleasure in making authentic escapes. From exceptional day trips and tour packages to tailor-made and unique programs, our team of passionate travel designers is pleased to meet your special needs.</p>-->
            </div>
            <div class="row package-slider slider-button">
                <?php
                function limit_words($string, $word_limit)
                {
                    $words = explode(" ",$string);
                    return implode(" ",array_splice($words,0,$word_limit));
                }
                $query_mysql = mysqli_query($koneksi,"SELECT DISTINCT(B.paket_wisata_id), A.nama AS nama, A.deskripsi AS deskripsi, B.gambar FROM paket_wisata A, paket_wisata_gambar B WHERE A.id = B.paket_wisata_id")or die(mysqli_error());
                while($data = mysqli_fetch_array($query_mysql)){
                    //$id = $data['id'];
                    $nama = $data['nama'];
                    $deskripsi = $data['deskripsi'];
                    $gambar = $data['gambar'];
                ?>
                <div class="col-sm-4">
                    <div class="package-item">
                        <div class="package-image">
                            <img src="<?php echo $gambar;?>" alt="Image">
                            <div class="package-price">
                                <p><?php echo $nama; ?></span></p>
                            </div>
                        </div>
                        <div class="package-content">
                            <!--<h3><?php //echo $namaWisata; ?></h3>-->
                            <p><?php echo (limit_words($deskripsi,20))." ..."; ?></p>
                            <div class="package-info">
                                <a href="tour?tourName=<?php echo $nama; ?>" class="btn-blue btn-red">Package Detail</a>
                            </div>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </section>

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
    <script src="js/preloader.js"></script>
</body>
</html>