<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="zxx">

<?php $page = 'contactus' ;include 'head.php';?>
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
    <!-- Breadcrumb -->
    <section class="breadcrumb-outer text-center">
        <div class="container">
            <div class="breadcrumb-content">
                <h2>Contact Us Page</h2>
                <nav aria-label="breadcrumb">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
                    </ul>
                </nav>
            </div>
        </div>
        <div class="section-overlay"></div>
    </section>
    <!-- BreadCrumb Ends -->

    <section class="contact">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div id="contact-form" class="contact-form">

                        <div id="contactform-error-msg"></div>

                        <form method="post" action="#" name="contactform" id="contactform">
                            <div class="row">
                                <div class="form-group col-xs-12">
                                    <label>Name:</label>
                                    <input type="text" name="full_name" class="form-control" id="Name" placeholder="Enter full name" required>
                                </div>
                                <div class="form-group col-xs-6">
                                    <label>Email:</label>
                                    <input type="email" name="email" class="form-control" id="email" placeholder="abc@xyz.com" required>
                                </div>
                                <div class="form-group col-xs-6 col-left-padding">
                                    <label>Phone Number:</label>
                                    <input type="text" name="phone" class="form-control" id="phnumber" placeholder="XXXX-XXXXXX" required>
                                </div>
                                <div class="textarea col-xs-12">
                                    <label>Message:</label>
                                    <textarea name="comments" placeholder="Enter a message" required></textarea>
                                </div>
                                <div class="col-xs-12">
                                    <div class="comment-btn">
                                         <input type="submit" class="btn-blue btn-red" id="submit" value="Send Message">
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="contact-about footer-margin">
                        <?php
                        include 'admin/koneksi.php';
                        $query_mysql = mysqli_query($koneksi,"SELECT * FROM tbl_TentangTravel")or die(mysqli_error());
                        while($data = mysqli_fetch_array($query_mysql)){
                            $title = $data['nama_travel'];
                            $slogan = $data['slogan_travel'];
                            $gambar = $data['logo_travel'];
                            $alamat = $data['alamat_travel'];
                            $nohp = $data['nohp_travel'];
                            $email = $data['email_travel'];
                            if ($gambar == '') {
                                $status = 'display:none;';
                            }
                            else {
                                $logo = $gambar;
                            }
                        ?>
                        <div class="about-logo">
                            <img src="admin/images/<?php echo $logo ?>" alt="Image" style="<?php echo $status ?>">
                        </div>
                        <h4><?php echo $slogan ?></h4>
                        <div class="contact-location">
                            <ul>
                                <li><i class="flaticon-maps-and-flags" aria-hidden="true"></i> <?php echo $alamat ?></li>
                                <li><i class="flaticon-phone-call"></i> <?php echo $nohp ?></li>                                        
                                <li><i class="flaticon-mail"></i> <?php echo $email ?></li>
                            </ul>
                        </div>
                        <?php } ?>
                        <div class="footer-social-links">
                            <ul>
                                <li class="social-icon"><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                <li class="social-icon"><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                <li class="social-icon"><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                <li class="social-icon"><a href="#"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
                                <li class="social-icon"><a href="#"><i class="fa fa-google" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>    
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="map">
        <div id="map" style="height: 350px; width: 100%;"></div>
    </div>

    <!-- Footer -->
    <?php include 'footer.php';?>
    <!-- Footer Ends -->  

    <!-- back to top start -->
    <div id="back-to-top">
        <a href="#"></a>
    </div>

    <!-- *Scripts* -->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/plugin.js"></script>
    <script src="js/map.js"></script>
    <script src="js/main.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB4JwWo5VPt9WyNp3Ne2uc2FMGEePHpqJ8&amp;callback=initMap" async defer></script>
    <script src="js/preloader.js"></script>

</body>
</html>