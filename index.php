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

<body>
    <?php
    $queryTentang = mysqli_query($koneksi, "SELECT * FROM tentang WHERE id = 1") or die(mysqli_error());
    $tentang = mysqli_fetch_assoc($queryTentang);
    $whatsapp = $tentang['whatsapp'];
    ?>
    <a href="https://wa.me/<?= $whatsapp ?>" class="float" target="_blank">
        <i class="fa fa-whatsapp my-float"></i> Contact Us
    </a>

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

    <section class="amazing-tours popular-packages pad-bottom-80" style="padding-top: 50px; background: url(3040791.jpg) no-repeat;background-size: cover;">
        <div class="container">
            <div class="text-center">
                <h2>Tour Destination</h2>
                <p style="text-align:center">Indonesia is a very unique destination located in South east region. The country is famous throughout the world for its islands and beautiful landscapes <br>
                    Indonesia is the world's fourth most populous country the extreme geographical diversity means plenty of beaches, jungles, and volcanoes are waiting to be enjoyed. Each region is unique and has something to offer intrepid to our customers the best experience possible. <br>
                    With amazing places to visit in Indonesia spread across more than 17,000 islands, you'll never run out of opportunities for adventure, Leisure and cultural interaction. <br>
                    Having stopover in myriad places in Indonesia is what makes this country a wonderful place to visit. The beauty of scenic natural landscapes blended with various unique culture of its people. Enjoy the untouched beaches, mountains, lakes, and many more pleasing destinations as well as the magnificent city skylines throughout the country. And when you decide to see them all, a visit won’t be enough to embrace the wonders of Indonesia.
                </p>
            </div>
            <div class="row">
                <?php
                $query_mysql = mysqli_query($koneksi, "SELECT A.id, A.nama,A.deskripsi, A.deskripsi_singkat, A.prioritas, B.gambar FROM destinasi A, destinasi_gambar B WHERE A.id = B.destinasi_id ORDER BY A.prioritas ASC LIMIT 6") or die(mysqli_error());
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
                                <div class="package-content" style="padding-bottom: 5px;height:125px">
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
            <div class="text-center" style="padding-top: 30px;">
                <h2>OUR INDONESIA HOLIDAYS PACKAGE</h2>
                <p style="text-align:center;"><b>Established Since 1998</b>, our team creates awesome tours all over Indonesia. Alongside our local partners and clients, we imagine the best experiences to live in the largest archipelago on Earth. <br />

                    We offer wide range or the greatest variety of popular tour packages and we keenly specialized on custom-made tours around Indonesia. We have developed in-depth tours that go far beyond the surface to reveal the heart of each destination. Along with our team of local and in-destination travel experts and time-tested logistics, we combine encyclopedic knowledge of the region with a progressive vision to make us one of most trusted and exciting Destination Management Company in Indonesia. <br />

                    We are dedicated to the task of remaining responsible, We fight to run our business along ethical lines, in a sustainable and socially responsible manner. <br />

                    Take a look at our most sought tour packages based on the main island destination that we handle on regular basis. <br />

                    Our team of passionate travel designers is pleased to meet your special needs.
                </p>
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
                                <img src="<?= $gambarTour; ?>" alt="Image" style="height: 300px;object-fit: cover;">
                                <div class="package-price">
                                    <p><?php echo $namaTour; ?></p>
                                </div>
                            </div>
                            <div class="package-content" style="height:640px;">
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
                    $link = $data['link'];
                    $gambarPartner = $data['gambar'];
                ?>
                    <!--<a href="<?= $link ?>">-->
                    <a target="_blank" href="http://<?= $link ?>">
                        <div class="col-md-3" style="margin-bottom:10px;">
                            <img src="<?php echo $gambarPartner ?>" alt="Image" style="width:240px; height:120px;object-fit:contain;">
                        </div>
                    </a>
                <?php } ?>
            </div>
        </div>

        <div class="container" style="margin-top: 25px;">
            <div class="section-title text-center">
                <h2>News & Event</h2>
            </div>
            <div class="col-md-12 col-sm-12">
                <div class="blog-wrapper">
                    <div class="row">
                        <?php
                        $query_mysql = mysqli_query($koneksi, "SELECT * FROM news ORDER BY id DESC LIMIT 4") or die(mysqli_error());
                        while ($data = mysqli_fetch_array($query_mysql)) {
                            $id = $data['id'];
                            $nama = $data['nama'];
                            $deskripsi = $data['deskripsi'];
                            $gambar = $data['gambar'];
                        ?>
                            <div class="col-sm-3 col-xs-12">
                                <div class="blog-item">
                                    <div class="blog-image" style="background-color:white">
                                        <img src="<?= $gambar ?>" alt="Image" style="width:240px; height:120px;object-fit: contain;background-color:white">
                                    </div>
                                    <div class="blog-content" style="height:250px">
                                        <h5>
                                            <a href="news-detail?id=<?= $id ?>"><?php echo limit_words(strip_tags(trim($deskripsi)), 20) . "..."; ?></p>
                                                <div class="blog-date">
                                                    <p>Click for Detail</p>
                                                </div>
                                        </h5>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>
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