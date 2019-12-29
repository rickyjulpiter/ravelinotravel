<?php include 'koneksi.php';

// $namaTour = $_GET['tourName'];

if (isset($_GET['tourName'])) {
    $namaTour = $_GET['tourName'];
} else if (isset($_GET['tourID'])) {
    $idTour = $_GET['tourID'];
}

$id_ticket = $_GET['id'];
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
    $queryTour = mysqli_query($koneksi, "SELECT * FROM ticket WHERE id = '$id_ticket '") or die(mysqli_error());
    $detail = mysqli_fetch_assoc($queryTour);
    $idTicket = $detail['id'];
    $namaTicket = $detail['nama'];
    $deskripsiTicket = $detail['deskripsi'];
    $gambarTicket = $detail['gambar'];
    ?>
    <!-- Breadcrumb -->
    <section class="breadcrumb-outer text-center" style="padding-top: 50px; background-size: cover;">
        <div class="container">
            <div class="breadcrumb-content">
                <h2><?php echo ($namaTicket); ?></h2>
                <nav aria-label="breadcrumb">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Ticketing</li>
                    </ul>
                </nav>
            </div>
        </div>
        <div class="section-overlay"></div>
    </section>
    <!-- BreadCrumb Ends -->
    <section class="main-content-detail" style="background: url(3040791.jpg) no-repeat;background-size: cover;">
        <div class="container">
            <div class="row">
                <div id="content" class="col-md-8">
                    <div class="detail-content content-wrapper">
                        <div>
                            <img src="<?php echo $gambarTicket; ?>" style="height:100%; width:100%">
                        </div>
                        <br>
                        <div class="description detail-box">
                            <div class="detail-title">
                                <h3>Flight route</h3>
                            </div>
                            <?php echo $deskripsiTicket; ?>
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
                                <?php
                                $query_mysql = mysqli_query($koneksi, "SELECT * FROM (SELECT DISTINCT(pw.id),pw.nama AS nama,pw.deskripsi AS deskripsi,pwg.gambar FROM paket_wisata AS pw INNER JOIN paket_wisata_gambar AS pwg ON pw.id = pwg.paket_wisata_id) AS tabel GROUP BY id") or die(mysqli_error());
                                while ($data = mysqli_fetch_array($query_mysql)) {
                                    //$id = $data['id'];
                                    $namaTour = $data['nama'];
                                    $deskripsiTour = $data['deskripsi'];
                                    $gambarTour = $data['gambar'];
                                    ?>
                                    <div class="sidebar-package">
                                        <div class="sidebar-package-image">
                                            <img src="<?php echo $gambarTour; ?>" alt="Images" style="height:200px;">
                                        </div>
                                        <div class="destination-content sidebar-package-content">
                                            <h4><a href="tour?tourName=<?php echo $namaTour; ?>"><?php echo $namaTour; ?></a></h4>
                                            <a href="tour?tourID=<?php echo $data['id']; ?>" class="btn-blue btn-red">Tour Detail</a>
                                        </div>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>
                        <?php
                        $queryTentang = mysqli_query($koneksi, "SELECT * FROM tentang WHERE id = 1") or die(mysqli_error());
                        $tentang = mysqli_fetch_assoc($queryTentang);
                        // $namaTentang = $tentang['nama'];
                        // $deskripsiTentang = $tentang['deskripsi'];
                        $telepon = $tentang['telepon'];
                        $email = $tentang['email'];
                        $whatsapp = $tentang['whatsapp'];
                        ?>
                        <div class="sidebar-item sidebar-helpline">
                            <div class="sidebar-helpline-content">
                                <h3>Any Questions?</h3>
                                <p>If you require any further information, please call or write us to our below contact.</p>
                                <p><i class="fa fa-phone" aria-hidden="true"></i> <?php echo $telepon; ?></p>
                                <p><a href="https://wa.me/<?= $whatsapp; ?>" style="color:white;"><i class="fa fa-whatsapp" aria-hidden="true"></i> <?php echo $whatsapp; ?></a></p>
                                <p><a href="mailto:<?= $email ?>" style="color:white;"><i class="fa fa-envelope" aria-hidden="true"></i> <?php echo $email; ?></a></p>
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