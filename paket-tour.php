<?php include 'koneksi.php';

$jenisWisata = $_GET['jenis_wisata'];
$queryWisata = "SELECT * FROM paket_wisata WHERE jenis_paket = '$jenisWisata'";

$queryJenisPaket = mysqli_query($koneksi,"SELECT * FROM jenis_paket WHERE id_paket = '$jenisWisata'")or die(mysqli_error());
$jenisPaket = mysqli_fetch_assoc($queryJenisPaket);
$jenisPaketNama = $jenisPaket['nama_paket'];
$gambarPaket = $jenisPaket['gambar_paket'];
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
    <section class="breadcrumb-outer text-center" style="background: url(<?php echo($gambarPaket); ?>) no-repeat; object-fit: cover;">
        <div class="container">
            <div class="breadcrumb-content">
                <h2><?php echo($jenisPaketNama); ?></h2>
                <nav aria-label="breadcrumb">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page"><?php echo($jenisPaketNama); ?></li>
                    </ul>
                </nav>
            </div>
        </div>
        <div class="section-overlay"></div>
    </section>
    <!-- BreadCrumb Ends -->

    <!-- Destinations -->
    <section class="destinations">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="destination-outer">
                        <?php
                        $query_mysql = mysqli_query($koneksi,$queryWisata)or die(mysqli_error());
                        while($data = mysqli_fetch_array($query_mysql)){
                            $idWisata = $data['id_wisata'];
                            $namaWisata = $data['nama_wisata'];
                            $deskripsiWisata = $data['deskripsi_wisata'];
                            $hargaWisata = $data['harga_wisata'];
                            $gambarWisata = $data['gambar_wisata'];
                            /*
                            if ($data['gambar_wisata_area'] == '')
                            {
                              $gambar = '';
                              $tampakGambar = 'display:none;';
                            }
                            else {
                              $gambar = "images/".$data['gambar_wisata_area'];
                            }
                            */
                        ?>
                        <div class="destination-fw-item">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="destination-fw-image">
                                        <img src="<?php echo $gambarWisata;?>" alt="Image">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="destination-fw-desc fw-content">
                                        <h3><a href="paket-tour-detail?idWisata=<?php echo $idWisata; ?>"><?php echo $namaWisata;?></a></h3>
                                        <p><?php echo $deskripsiWisata;?></p>
                                        <div class="destination-fw-content">
                                            <p class="fw-info"><i class="fa fa-clock-o" aria-hidden="true"></i> Kategori : <?php echo($jenisPaketNama); ?></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="fw-btns">
                                        <div class="fw-price"><p>Harga mulai:<span class="bold">Rp. <?php echo number_format($hargaWisata, 0, ".",".") ?></span></p></div>
                                        <div class="destination-btns">
                                            <a href="paket-tour-detail?idWisata=<?php echo $idWisata; ?>" class="btn-blue btn-red" tabindex="0">Lihat Paket</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
            <!--
            <div class="row">
                <div class="col-md-12">
                    <div class="pagination-content">
                        <ul class="pagination">
                            <li><a href="#"><i class="fa fa-angle-double-left" aria-hidden="true"></i></a></li>
                            <li class="active"><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i></a></li>
                        </ul>
                    </div> 
                </div>
            </div>
            -->
        </div>
    </section>
    <!-- Destination Ends -->

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