<?php
include 'admin/koneksi.php';
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="zxx">

<?php $page = 'index' ;include 'head.php';?>
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

    <!-- Banner -->
    <section id="home_banner">
        <!-- Paradise Slider -->
        <div id="kenburns_061" class="carousel slide ps_indicators_txt_icon ps_control_txt_icon kbrns_zoomInOut thumb_scroll_x swipe_x ps_easeOutQuart" data-ride="carousel" data-pause="hover" data-interval="10000" data-duration="2000">
            <!-- Wrapper For Slides -->
            <div class="carousel-inner" role="listbox">

                <!-- First Slide -->
                <div class="item active">
                    <!-- Slide Background -->
                    <img src="images/slider/slider7.jpg" alt="kenburns_061_01" />
                    <!-- Left Slide Text Layer -->
                    <div class="kenburns_061_slide" data-animation="animated fadeInRight">
                        <h2>Book a ticket & Just Leave</h2>
                        <h1>Search your next destination</h1>

                        <a href="tour-detail.html" class="btn-blue btn-red">View Our Tour</a>
                    </div><!-- /Left Slide Text Layer -->
                </div><!-- /item -->

                <!-- Second Slide -->
                <div class="item">
                    <!-- Slide Background -->
                    <img src="images/slider/slider2.jpg" alt="kenburns_061_02" />
                    <!-- Right Slide Text Layer -->
                    <div class="kenburns_061_slide kenburns_061_slide_right" data-animation="animated fadeInUp">
                        <h2>exciting schemes just a click away</h2>
                        <h1>Amazing Santorini 7 days tour</h1>
                        <a href="tour-detail.html" class="btn-blue btn-red">View Our Tour</a>
                    </div><!-- /Right Slide Text Layer -->
                </div><!-- /item -->
                <!-- End of Slide -->

            </div><!-- End of Wrapper For Slides -->

            <!-- Left Control -->
            <a class="left carousel-control" href="#kenburns_061" role="button" data-slide="prev">
                <span>prev</span>
                <span class="sr-only">Previous</span>
            </a>

            <!-- Right Control -->
            <a class="right carousel-control" href="#kenburns_061" role="button" data-slide="next">
                <span>next</span>
                <span class="sr-only">Next</span>
            </a>
        </div> <!-- End Paradise Slider -->
    </section>
    <!-- Banner Ends -->

    <!--* bucket*-->
    <section id="bucket-list" class="bucket-list" style="padding-top: 40px">

        <div class="bucket-icons">
            <div class="container">   
                <div class="section-title text-center">
                    <h2>Welcome To</h2>
                    <h1 style="color: #009436">Synergi Ravelino Tour & Travel</h1><h2 style="color: #e67e22">Your Link to The Best Traveling</h2>
                    <div class="section-icon">
                        <i class="flaticon-compass"></i>
                    </div>
                    <p style="text-align: justify;">Our home island Sumatra - the second largest island in Indonesia - is in the fourth place in procuring total visits of foreign tourists following Jakarta, Bali and Batam. This region has a remarkable panorama, thick with virgin forests, lush vegetation, strong rivers, beautiful waterfalls, peaceful sandy beaches and large ancient lakes. The diversity of arts, people and culture literally make Sumatra a Garden of Eden for social scientists and culture seekers.</p>
                </div>
            </div>
        </div>
    </section>
    <!--* End bucket*-->

    <!-- Popular Packages --> 
    <section class="amazing-tours popular-packages pad-bottom-80">
        <div class="container">
            <div class="section-title text-center">
                <h2>Tour Destination</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Duis aute irure dolor in reprehenderit..</p>
            </div>
            <div class="row">
                <?php
                $query_mysql = mysqli_query($koneksi,"SELECT * FROM tbl_WisataWilayah")or die(mysqli_error());
                $nomor = 1;
                while($data = mysqli_fetch_array($query_mysql)){
                    $id = $data['id_wisata'];
                    $nama = $data['nama_wisata'];
                    $deskripsi = $data['deskripsi_wisata'];
                    $gambar = $data['gambar_wisata'];
                    ?>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="package-item">
                        <img src="<?php echo "admin/images/".$gambar ?>" alt="Image" width="293px" height="195px" style="object-fit: cover;">
                        <div class="package-content">
                            <h3><a href="destination.php?nama_wisata=<?php echo $nama; ?>"  style="color: green"><?php echo $nama ?></a></h3>
                            <p><?php echo $deskripsi ?></p>
                        </div>
                    </div>
                </div>
            <?php } ?>
            </div>
        </div>
    </section>
    <!-- Popular Packages Ends -->

    <!-- Trusted Partners -->
    <section class="trusted-partners" style="background-color: #009436">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-xs-4">
                    <div class="partners-title">
                        <h3>Our <span>Partners</span></h3>
                    </div>
                </div>
                <div class="col-md-9 col-xs-8">
                    <ul class="partners-logo partners-slider">
                        <li><a href="#"><img src="images/partner1.png" alt="Image"></a></li>
                        <li><a href="#"><img src="images/partner2.png" alt="Image"></a></li>
                        <li><a href="#"><img src="images/partner3.png" alt="Image"></a></li>
                        <li><a href="#"><img src="images/partner4.png" alt="Image"></a></li>
                        <li><a href="#"><img src="images/partner5.png" alt="Image"></a></li>
                        <li><a href="#"><img src="images/partner6.png" alt="Image"></a></li>
                        <li><a href="#"><img src="images/partner1.png" alt="Image"></a></li>
                        <li><a href="#"><img src="images/partner2.png" alt="Image"></a></li>
                        <li><a href="#"><img src="images/partner3.png" alt="Image"></a></li>
                        <li><a href="#"><img src="images/partner4.png" alt="Image"></a></li>
                        <li><a href="#"><img src="images/partner5.png" alt="Image"></a></li>
                        <li><a href="#"><img src="images/partner6.png" alt="Image"></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- Trusted Partners Ends -->

    <!-- Footer -->
    <?php include 'footer.php';?>
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
    <!--<script src="js/custom-countdown.js"></script>-->
    <script src="js/preloader.js"></script>
</body>
</html>