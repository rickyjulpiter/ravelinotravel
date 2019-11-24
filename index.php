<?php include 'koneksi.php'; ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="zxx">

<?php include 'template/head.php';
function limit_words($string, $word_limit)
{
    $words = explode(" ", $string);
    return implode(" ", array_splice($words, 0, $word_limit));
}
?>
<style>
    .dropdownUL ul {
        list-style: none;
        /* height: 1000px; */
        overflow-x: hidden;
        overflow-y: scroll;
    }

    .dropdownUL li {
        /* height: 300px; */
        /* background: #ccc;
        border-bottom: black 1px solid; */
    }

    h2 {
        /* text-align: center; */
        padding: 20px;
    }
</style>

<body>

    <!-- Preloader -->
    <?php //include 'template/preloader.php' 
    ?>
    <!-- Preloader Ends -->

    <!-- Header -->
    <?php include 'template/header.php' ?>
    <!-- Header Ends -->

    <!-- Navigation Bar -->
    <?php include 'template/nav.php' ?>
    <!-- Navigation Bar Ends -->

    <!-- Slider -->
    <?php include 'slider.php' ?>

    <section class="amazing-tours popular-packages pad-bottom-80" style="padding-top: 50px; background: url(images/bg442.jpg) no-repeat;background-size: cover;">
        <div class="container">
            <div class="section-title text-center">
                <h2>Tour Destination</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Duis aute irure dolor in reprehenderit..</p>
            </div>
            <div class="row">
                <?php
                $query_mysql = mysqli_query($koneksi, "SELECT * FROM destinasi LIMIT 6") or die(mysqli_error());
                while ($data = mysqli_fetch_array($query_mysql)) {
                    $idDestinasi = $data['id'];
                    $namaDestinasi = $data['nama'];
                    $deskripsiDestinasi = $data['deskripsi'];
                    $gambarDestinasi = $data['gambar'];
                    ?>
                    <a href="destination-detail?destination=<?php echo $namaDestinasi; ?>">
                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <div class="package-item">
                                <img src="<?php echo $gambarDestinasi ?>" alt="Image" width="100%" height="100%" style="object-fit: cover;">
                                <div class="package-content" style="padding-bottom: 5px;">
                                    <center>
                                        <h2 style="text-align: center;"><a href="destination-detail?destination=<?php echo $namaDestinasi; ?>" style="color: green; text-align: center;"><?php echo $namaDestinasi ?></a></h2>
                                    </center>
                                </div>
                            </div>
                        </div>
                    </a>
                <?php } ?>
            </div>
        </div>

        <div class="container">
            <div class="section-title text-center" style="padding-top: 30px;">
                <h2>Top Destination</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Duis aute irure dolor in reprehenderit..</p>
            </div>
            <div class="row package-slider slider-button">
                <?php
                $query_mysql = mysqli_query($koneksi, "SELECT * FROM (SELECT DISTINCT(pw.id),pw.nama AS nama,pw.deskripsi AS deskripsi,pwg.gambar FROM paket_wisata AS pw INNER JOIN paket_wisata_gambar AS pwg ON pw.id = pwg.paket_wisata_id) AS tabel GROUP BY id") or die(mysqli_error());
                while ($data = mysqli_fetch_array($query_mysql)) {
                    $namaTour = $data['nama'];
                    $deskripsiTour = $data['deskripsi'];
                    $gambarTour = $data['gambar'];
                    ?>
                    <div class="col-sm-4">
                        <div class="package-item">
                            <div class="package-image">
                                <img src="<?= $gambarTour; ?>" alt="Image" height="300">
                                <div class="package-price">
                                    <p><?php echo $namaTour; ?></p>
                                </div>
                            </div>
                            <div class="package-content">
                                <!--<h3><?php //echo $namaWisata; 
                                            ?></h3>-->
                                <p><?php echo limit_words(strip_tags($deskripsiTour), 20) . "..."; ?></p>
                                <div class="package-info">
                                    <a href="tour?tourID=<?php echo $data['id']; ?>" class="btn-blue btn-red">Tour Detail</a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>

        <div class="container">
            <div class="section-title text-center">
                <h2>Our Partner</h2>
            </div>
            <div class="row">
                <?php
                $query_mysql = mysqli_query($koneksi, "SELECT * FROM partner") or die(mysqli_error());
                while ($data = mysqli_fetch_array($query_mysql)) {
                    $idPartner = $data['id'];
                    $namaPartner = $data['nama'];
                    $gambarPartner = $data['gambar'];
                    ?>
                    <a href="#">
                        <div class="col-md-3">
                            <img src="<?php echo $gambarPartner ?>" alt="Image" style="width:80%; height:80%">
                        </div>
                    </a>
                <?php } ?>
            </div>
        </div>
    </section>
    <!-- Banner Ends -->

    <?php // include 'partner.php' 
    ?>

    <!-- Testimonials -->
    <?php //include 'partner.php' 
    ?>
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