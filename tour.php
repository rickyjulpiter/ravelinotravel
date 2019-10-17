<?php include 'koneksi.php'; 

$namaTour = $_GET['tourName'];
//echo($namaTour);
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
    $queryTour = mysqli_query($koneksi,"SELECT * FROM paket_wisata WHERE nama = '$namaTour'")or die(mysqli_error());
    $detail = mysqli_fetch_assoc($queryTour);
    $nama_tour = $detail['nama'];
    $deskripsi_tour = $detail['deskripsi'];
    $peta_tour = $detail['peta'];
    $timeline_tour = $detail['timeline'];
    ?>
    <!-- Breadcrumb -->
    <section class="breadcrumb-outer text-center">
        <div class="container">
            <div class="breadcrumb-content">
                <h2><?php echo($nama_tour);?></h2>
                <nav aria-label="breadcrumb">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Tour Packages</li>
                    </ul>
                </nav>
            </div>
        </div>
        <div class="section-overlay"></div>
    </section>
    <!-- BreadCrumb Ends -->

    <section class="main-content detail">
        <div class="container">
            <div class="row">
                <div id="content" class="col-md-8">
                    <div class="detail-content content-wrapper">
                        <div class="gallery detail-box">
                            <!-- Paradise Slider -->
                            <div id="in_th_030" class="carousel slide in_th_brdr_img_030 thumb_scroll_x swipe_x ps_easeOutQuint" data-ride="carousel" data-pause="hover" data-interval="4000" data-duration="2000">
                                <!-- Indicators -->
                                <ol class="carousel-indicators">
                                    <!-- 1st Indicator -->
                                    <li data-target="#in_th_030" data-slide-to="0" class="active">
                                        <!-- 1st Indicator Image -->
                                        <img src="images/detailslider1.jpg" alt="in_th_030_01_sm" />
                                    </li>
                                    <!-- 2nd Indicator -->
                                    <li data-target="#in_th_030" data-slide-to="1">
                                        <!-- 2nd Indicator Image -->
                                        <img src="images/detailslider2.jpg" alt="in_th_030_02_sm" />
                                    </li>
                                    <!-- 3rd Indicator -->
                                    <li data-target="#in_th_030" data-slide-to="2">
                                        <!-- 3rd Indicator Image -->
                                        <img src="images/detailslider3.jpg" alt="in_th_030_03_sm" />
                                    </li>
                                    <li data-target="#in_th_030" data-slide-to="3">
                                        <!-- 3rd Indicator Image -->
                                        <img src="images/detailslider4.jpg" alt="in_th_030_03_sm" />
                                    </li>
                                </ol> <!-- /Indicators -->
                                <!-- Wrapper For Slides -->
                                <div class="carousel-inner" role="listbox">
                                    <!-- First Slide -->
                                    <div class="item active">
                                        <!-- Slide Background -->
                                        <img src="images/detailslider1.jpg" alt="in_th_030_01" />                                        
                                    </div>
                                    <!-- End of Slide -->
                                    <!-- Second Slide -->
                                    <div class="item">
                                        <!-- Slide Background -->
                                        <img src="images/detailslider2.jpg" alt="in_th_030_02" />
                                    </div>
                                    <!-- End of Slide -->
                                    <!-- Third Slide -->
                                    <div class="item">
                                        <!-- Slide Background -->
                                        <img src="images/detailslider3.jpg" alt="in_th_030_03" />
                                    </div>
                                    <!-- End of Slide -->
                                    <div class="item">
                                        <!-- Slide Background -->
                                        <img src="images/detailslider4.jpg" alt="in_th_030_03" />
                                    </div>
                                </div> <!-- End of Wrapper For Slides -->
                            </div> <!-- End Paradise Slider -->
                        </div>
                        <div class="description detail-box">
                            <div class="detail-title">
                                <h3>Description</h3>
                            </div>
                            <?php echo $deskripsi_tour; ?>

                        </div>
                        <div class="location-map detail-box">
                            <div class="detail-title">
                                <h3>Location Map</h3>
                            </div>
                            <div class="map-frame">
                                <?php echo $peta_tour ?>
                            </div>
                        </div>
                        <div class="detail-timeline detail-box">
                            <div class="detail-title">
                                <h3>Tour Timeline</h3>
                            </div>
                            <div class="timeline-content">
                                <?php echo $timeline_tour; ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="sidebar-sticky" class="col-md-4">
                    <aside class="detail-sidebar sidebar-wrapper">
                        <div class="sidebar-item">
                            <div class="detail-title">
                                <h3>Popular Tour Packages</h3>
                            </div>
                            <div class="sidebar-content sidebar-slider">
                                <div class="sidebar-package">
                                    <div class="sidebar-package-image">
                                        <img src="images/detailslider1.jpg" alt="Images">
                                    </div>
                                    <div class="destination-content sidebar-package-content">
                                        <h4><a href="tour-detail.html">Royal Caribbean Cruises</a></h4>
                                        <p><i class="flaticon-time"></i> 5 days starts from</p>
                                        <a href="#" class="btn-blue btn-red">Tour Detail</a>
                                    </div>
                                </div>
                                <div class="sidebar-package">
                                    <div class="sidebar-package-image">
                                        <img src="images/detailslider1.jpg" alt="Images">
                                    </div>
                                    <div class="destination-content sidebar-package-content">
                                        <h4><a href="tour-detail.html">Royal Caribbean Cruises</a></h4>
                                        <p><i class="flaticon-time"></i> 5 days starts from</p>
                                        <a href="#" class="btn-blue btn-red">Tour Detail</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="sidebar-item sidebar-helpline">
                            <div class="sidebar-helpline-content">
                                <h3>Any Questions?</h3>
                                <p>Lorem ipsum dolor sit amet, consectet ur adipiscing elit, sedpr do eiusmod tempor incididunt ut.</p>
                                <p><i class="flaticon-phone-call"></i> (012)-345-6789</p>
                                <p><i class="flaticon-mail"></i> tourntravel@testmail.com</p>
                            </div>
                        </div>
                    </aside>
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