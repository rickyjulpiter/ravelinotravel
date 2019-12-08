<?php include 'koneksi.php'; ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="zxx">
<?php
function limit_words($string, $word_limit)
{
    $words = explode(" ", $string);
    return implode(" ", array_splice($words, 0, $word_limit));
}
?>
<?php include 'template/head.php' ?>
<style>
    .ticketStyle {
        margin-left:10px;
    }
    .ticketStyle p {
        text-align:left;
    }
</style>

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
    <section class="breadcrumb-outer text-center" style="padding-top: 50px; background: url(images/bg442.jpg) no-repeat;background-size: cover;">
        <div class="container">
            <div class="breadcrumb-content">
                <h2>Ticket</h2>
                <nav aria-label="breadcrumb">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Ticket</li>
                    </ul>
                </nav>
            </div>
        </div>
        <div class="section-overlay"></div>
    </section>
    <!-- BreadCrumb Ends -->

    <!-- Destinations -->
    <section class="destinations destination-padding" style="padding-top: 50px; background: url(images/83.jpg) no-repeat;background-size: cover;">
        <div class="container">
            <div class="row">
                <div class="text-center">
                    <p style="text-align:center;font-size:16px;">We provide all types of International air ticket, domestic tour, domestic travel & tour packages, domestic flights services. We attend to all your air ticket services. We provide ticket services for all individuals, groups and families. We take an in-depth view about the requirements of the customers and provide tem tour package accordingly. Our services are marked by the following features:
                        High levels of customization :
                        Timely delivery of information and service
                        Take care of the comfort levels of our clients
                        Affordable rates of service
                        Provides all types of travel documentation, hotel reservations, cargo clearing and forwarding services
                        Adept in customer handling and event management
                    </p>
                </div>
                <?php
                $query_mysql = mysqli_query($koneksi, "SELECT * FROM ticket") or die(mysqli_error());
                while ($data = mysqli_fetch_array($query_mysql)) {
                    $idTicket = $data['id'];
                    $namaTicket = $data['nama'];
                    $deskripsiTicket = $data['deskripsi'];
                    $gambarTicket = $data['gambar'];
                    ?>
                    <div class="col-md-4 col-sm-6">
                        <div class="destination-item destination-4-col">
                            <div class="destination-image">
                                <img src="<?php echo $gambarTicket; ?>" alt="Image" style="height:200px;object-fit:contain;">
                                <div class="destination-overlay"></div>
                                <div class="destination-btn">
                                    <a href="contactus" class="btn-blue btn-red">Contact Us For Further Book</a>
                                </div>
                            </div>
                            <div class="destination-content">
                                <h3><a href="contactus"><?php echo $namaTicket; ?></a></h3>
                                <div class="ticketStyle">
                                    <?= $deskripsiTicket; ?>
                                </div>
                                <!-- <p><?php //echo limit_words(strip_tags($deskripsiTicket), 20) . "..."; ?></p> -->
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