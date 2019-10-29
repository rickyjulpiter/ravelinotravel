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
    <section class="breadcrumb-outer text-center">
        <div class="container">
            <div class="breadcrumb-content">
                <h2>Special Request</h2>
                <nav aria-label="breadcrumb">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Special Request</li>
                    </ul>
                </nav>
            </div>
        </div>
        <div class="section-overlay"></div>
    </section>
    <!-- BreadCrumb Ends -->

    <section class="contact" style="background: url(images/83.jpg) no-repeat;background-size: cover;">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div id="contact-form" class="contact-form">

                        <div id="contactform-error-msg"></div>

                        <form method="post" action="request-aksi">
                            <div class="row">
                                <div class="form-group col-xs-12">
                                    <label>Name:</label>
                                    <input type="text" name="nama" class="form-control" id="Name" placeholder="Enter full name" required>
                                </div>
                                <div class="form-group col-xs-6">
                                    <label>Email:</label>
                                    <input type="email" name="email" class="form-control" id="email" placeholder="abc@xyz.com" required>
                                </div>
                                <div class="form-group col-xs-6 col-left-padding">
                                    <label>Phone Number:</label>
                                    <input type="text" name="telepon" class="form-control" id="phnumber" placeholder="XXXX-XXXXXX" required>
                                </div>
                                <div class="form-group col-xs-6">
                                    <label>Whatsapp Number:</label>
                                    <input type="number" name="whatsapp" class="form-control" id="email" placeholder="XXXX-XXXXXX" required>
                                </div>
                                <div class="form-group col-xs-6 col-left-padding">
                                    <label>Address</label>
                                    <input type="text" name="alamat" class="form-control" id="phnumber" placeholder="Your address" required>
                                </div>
                                <div class="form-group col-xs-12">
                                    <label>Subject:</label>
                                    <input type="text" name="tentang" class="form-control" id="Name" placeholder="Enter subject" required>
                                </div>
                                <div class="textarea col-xs-12">
                                    <label>Message / reqeust:</label>
                                    <textarea name="pesan" placeholder="Enter a message" required></textarea>
                                </div>
                                <?php
                                function generateRandomString($length = 10) {
                                    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
                                    $charactersLength = strlen($characters);
                                    $randomString = '';
                                    for ($i = 0; $i < $length; $i++) {
                                        $randomString .= $characters[rand(0, $charactersLength - 1)];
                                    }
                                    return $randomString;
                                }
                                    $captchaCode = generateRandomString(5);
                                ?>
                                <div class="col-xs-12" style="margin-top: 10px;">
                                    <label style="color: white;background-color: grey;font-weight: 20px;margin-right: 20px; padding: 10px"><?php echo $captchaCode; ?></label>
                                    <input name="captcha" placeholder="Fill Captcha Here" required></input>
                                </div>
                                <div class="col-xs-12">
                                    <input type="hidden" name="verif" value="<?php echo($captchaCode) ?>">
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
                        <div class="about-logo">
                            <img src="<?php echo $logo; ?>" alt="Image" style="width: 100%">
                        </div>
                        <h4><?php echo $slogan; ?></h4>
                        <p><?php //echo $deskripsi; ?></p>
                        <div class="contact-location">
                            <ul>
                                <li><i class="flaticon-maps-and-flags" aria-hidden="true"></i> <?php echo $alamat; ?></li>
                                <li><i class="flaticon-phone-call"></i> <?php echo $telepon; ?></li>                                        
                                <li><i class="flaticon-mail"></i> <?php echo $email; ?></li>
                            </ul>
                        </div>
                        <div class="footer-social-links">
                            <ul>
                                <li class="social-icon"><a href="<?php echo $facebook; ?>"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                <li class="social-icon"><a href="<?php echo $instagram; ?>"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                <li class="social-icon"><a href="<?php echo $twitter; ?>"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                <li class="social-icon"><a href="<?php echo $youtube; ?>"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>    
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Footer -->
    <?php include 'template/footer.php' ?>
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
    <script src="js/preloader.js"></script>

</body>
</html>