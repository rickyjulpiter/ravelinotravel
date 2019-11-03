<?php include 'koneksi.php'; 
$idWisata = $_GET['idWisata'];

$queryDetailWisata = mysqli_query($koneksi,"SELECT * FROM paket_wisata A, jenis_paket B WHERE id_wisata = '$idWisata' AND A.jenis_paket = B.id_paket")or die(mysqli_error());
$detailWisata = mysqli_fetch_assoc($queryDetailWisata);
$namaWisata = $detailWisata['nama_wisata'];
$deskripsiWisata = $detailWisata['deskripsi_wisata'];
$hargaWisata = $detailWisata['harga_wisata'];
$fasilitasWisata = $detailWisata['fasilitas_wisata'];
$gambarWisata = $detailWisata['gambar_wisata'];
$jenisPaket = $detailWisata['nama_paket'];
$idPaket = $detailWisata['id_paket'];
$gambarPaket = $detailWisata['gambar_paket'];

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
    <section class="breadcrumb-outer text-center" style="background: url(<?php echo($gambarPaket); ?>) no-repeat;">
        <div class="container">
            <div class="breadcrumb-content">
                <h2><?php echo $namaWisata; ?></h2>
                <nav aria-label="breadcrumb">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="paket-tour?jenis_wisata=<?php echo $idPaket ?>"><?php echo $jenisPaket; ?></a></li>
                        <li class="breadcrumb-item active" aria-current="page"><?php echo $namaWisata; ?></li>
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
                        <div class="detail-info">
                            <div class="detail-info-content clearfix" style="margin-bottom: 0px;">
                                <h2><?php echo $namaWisata; ?></h2>
                                <p class="detail-info-price"><span class="bold">Rp. <?php echo number_format($hargaWisata, 0, ".",".") ?></span></p>
                            </div>
                        </div>
                        <div class="gallery detail-box">
                            <!-- Paradise Slider -->
                            <div id="in_th_030" class="carousel slide in_th_brdr_img_030 thumb_scroll_x swipe_x ps_easeOutQuint" data-ride="carousel" data-pause="hover" data-interval="4000" data-duration="2000">
                                <!-- Wrapper For Slides -->
                                <div class="carousel-inner" role="listbox">
                                    <!-- First Slide -->
                                    <div class="item active">
                                        <!-- Slide Background -->
                                        <img src="<?php echo $gambarWisata; ?>" alt="in_th_030_01" />                                        
                                    </div>
                                </div> <!-- End of Wrapper For Slides -->
                            </div> <!-- End Paradise Slider -->
                        </div>
                        <div class="description detail-box">
                            <div class="detail-title">
                                <h3>Deskripsi</h3>
                            </div>
                            <div class="description-content">
                                <p><?php echo $deskripsiWisata; ?></p>
                                <?php echo $fasilitasWisata; ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="sidebar-sticky" class="col-md-4">
                    <aside class="detail-sidebar sidebar-wrapper">
                        <div class="sidebar-item">
                            <div class="detail-title">
                                <h3>Paket Tour Lainnya</h3>
                            </div>
                            <div class="sidebar-content sidebar-slider">
                                <?php
                                $query_mysql = mysqli_query($koneksi,"SELECT * FROM paket_wisata")or die(mysqli_error());
                                while($data = mysqli_fetch_array($query_mysql)){
                                    $idWisata = $data['id_wisata'];
                                    $namaWisata = $data['nama_wisata'];
                                    $deskripsiWisata = $data['deskripsi_wisata'];
                                    $hargaWisata = $data['harga_wisata'];
                                    $gambarWisata = $data['gambar_wisata'];
                                ?>
                                <div class="sidebar-package">
                                    <div class="sidebar-package-image">
                                        <img src="<?php echo $gambarWisata; ?>" alt="Images">
                                    </div>
                                    <div class="destination-content ">
                                        <h4 style="text-align: center; margin-bottom: 1px;"><a href="tour-detail.html"><?php echo $namaWisata; ?></a></h4>
                                        <div class="deal-rating">
                                        </div>
                                        <p style="text-align: center">Harga Mulai  <span class="bold">Rp. <?php echo number_format($hargaWisata, 0, ".",".") ?></span> </p>
                                        <a href="paket-tour-detail?idWisata=<?php echo $idWisata; ?>" class="btn-blue btn-red btn-block" style="text-align: center">Lihat Paket</a>
                                    </div>
                                </div>
                                <?php } ?>
                            </div>
                            
                        </div>
                        <?php include 'koneksi.php';
                        $queryTentang = mysqli_query($koneksi,"SELECT * FROM tentang WHERE id = 1")or die(mysqli_error());
                        $tentang = mysqli_fetch_assoc($queryTentang);
                        $namaTentang = $tentang['nama'];
                        $deskripsiTentang = $tentang['deskripsi'];
                        $telepon = $tentang['telepon'];
                        $email = $tentang['email'];
                        ?>
                        <div class="sidebar-item sidebar-helpline">
                            <div class="sidebar-helpline-content">
                                <h3>Any Questions?</h3>
                                <p><?php echo $deskripsi; ?></p>
                                <p><i class="flaticon-phone-call"></i> <?php echo $telepon; ?></p>
                                <p><i class="flaticon-mail"></i> <?php echo $email; ?></p>
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
    <script src="js/custom-countdown.js"></script>
    <script src="js/preloader.js"></script>
</body>
</html>