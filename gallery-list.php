<?php include 'koneksi.php'; ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="zxx">
<?php
function limit_words($string, $word_limit)
{
    $words = explode(" ", $string);
    return implode(" ", array_splice($words, 0, $word_limit));
}
$idGallery = $_GET['idDestinasi'];
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

    <!-- Banner -->
    <?php //include 'slider.php' 
    ?>


    <!-- Breadcrumb -->
    <section class="breadcrumb-outer text-center" style="padding-top: 50px; background-size: cover;">
        <div class="container">
            <div class="breadcrumb-content">
                <h2>Photo Gallery</h2>
                <nav aria-label="breadcrumb">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Photo Gallery List</li>
                    </ul>
                </nav>
            </div>
        </div>
        <div class="section-overlay"></div>
    </section>
    <!-- BreadCrumb Ends -->

    <!-- Destinations -->
    <section class="destinations destination-padding" style="padding-top: 50px; background: url(3040791.jpg) no-repeat;background-size: cover;">
        <div class="container">
            <div class="row">
                <?php
                $query = "SELECT A.id, A.gambar, A.nama, A.deskripsi FROM galeri A, galeri_detail B, destinasi_area C, destinasi D WHERE A.id = B.galeri_id AND B.destinasi_area_id = C.id_area AND C.destinasi_id = D.id AND D.id = '$idGallery'";
                // echo $query;
                $query_mysql = mysqli_query($koneksi, $query) or die(mysqli_error());
                while ($data = mysqli_fetch_array($query_mysql)) {
                    // $idTicket = $data['id'];
                    $namaTicket = $data['nama'];
                    $idDestinasi = $data['id'];
                    $gambarTicket = $data['gambar'];
                    ?>
                    <div class="col-md-6 col-sm-6">
                        <div class="destination-item destination-4-col">
                            <div class="destination-image">
                                <img src="<?= $gambarTicket; ?>" alt="Image" style="height: 500px;object-fit: cover;">
                            </div>
                            <div class="destination-content">
                                <h3><a href="gallery-list?idDestinasi=<?= $idDestinasi ?>"><?= $namaTicket; ?></a></h3>
                                <!-- <p><?= limit_words(strip_tags($deskripsiTicket), 50) . "..."; ?></p> -->
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
            <!--<div class="row">
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
            </div>-->
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
    <script src="js/preloader.js"></script>
</body>

</html>