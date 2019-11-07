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
    $query_sql = "SELECT * FROM destinasi_area WHERE nama_area = '$namaWisata'";
    $queryDetailDestinasi = mysqli_query($koneksi,$query_sql)or die(mysqli_error());
    $data = mysqli_fetch_assoc($queryDetailDestinasi);
    $namaDestinasi = $data['nama_area'];
    $deskripsi_singkatDestinasi = $data['deskripsi_area_singkat'];
    $deskripsiDestinasi = $data['deskripsi_area'];
    $gambar = $data['gambar_area'];
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
                <div class="col-md-10 col-md-offset-1">
                    <div class="item-wrapper">
                        <div class="cover-content">
                            <div class="author-detail">
                                <a href="#" class="tag tag-blue">#Destination #<?php echo $namaDestinasi; ?></a>
                            </div>
                            <h2><?php echo $deskripsi_singkatDestinasi; ?></h2>
                        </div>
                        <div class="cover-image">
                            <!-- Paradise Slider -->
                            <div id="in_th_030" class="carousel slide in_th_brdr_img_030 thumb_scroll_x swipe_x ps_easeOutQuint" data-ride="carousel" data-pause="hover" data-interval="4000" data-duration="2000">
                                <!-- Indicators -->
                                <ol class="carousel-indicators">
                                    <!-- 1st Indicator -->
                                    <?php
                                    $i=0;
                                    $query_mysql = mysqli_query($koneksi,"SELECT dag.gambar FROM destinasi_area_gambar AS dag INNER JOIN destinasi_area AS da ON dag.destinasi_area_id = da.id_area WHERE da.nama_area = '$namaWisata' ")or die(mysqli_error());
                                    while($data = mysqli_fetch_array($query_mysql)){
                                        $gambar = $data['gambar'];
                                    ?>
                                    <li data-target="#in_th_030" data-slide-to="<?= $i?>" class="<?php if($i==1) echo 'active' ?>">
                                        <!-- 1st Indicator Image -->
                                        <img src="<?= $gambar?>" alt="in_th_030_01_sm" />
                                    </li>
                                    <!-- 2nd Indicator -->
                                    <?php $i++; } ?>
                                </ol> <!-- /Indicators -->
                                <!-- Wrapper For Slides -->
                                <div class="carousel-inner" role="listbox">
                                    <!-- First Slide -->
                                    <?php
                                    $i=0;
                                    $query_mysql = mysqli_query($koneksi,"SELECT dag.gambar FROM destinasi_area_gambar AS dag INNER JOIN destinasi_area AS da ON dag.destinasi_area_id = da.id_area WHERE da.nama_area = '$namaWisata' ")or die(mysqli_error());
                                    while($data = mysqli_fetch_array($query_mysql)){
                                        $gambar = $data['gambar'];
                                    ?>
                                    <div class="item <?php if($i==0) echo "active" ?>">
                                        <!-- Slide Background -->
                                        <img src="<?= $gambar?>" alt="in_th_030_01" />                                        
                                    </div>

                                    <!-- End of Slide -->
                                    <?php $i++; } ?>
                                </div> <!-- End of Wrapper For Slides -->
                            </div> <!-- End Paradise Slider -->
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