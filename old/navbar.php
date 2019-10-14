    <div class="navigation">  
        <div class="container">
            <div class="navigation-content">
                <div class="header_menu">
                    <!-- start Navbar (Header) -->
                    <nav class="navbar navbar-default navbar-sticky-function navbar-arrow">
                        <div class="logo pull-left">
                            <a href="index">
                                <?php
                                include 'admin/koneksi.php';
                                $query_mysql = mysqli_query($koneksi,"SELECT * FROM tbl_TentangTravel")or die(mysqli_error());
                                while($data = mysqli_fetch_array($query_mysql)){
                                    $gambar = $data['logo_travel'];
                                    if ($gambar == '') {
                                        $status = 'display:none;';
                                    }
                                    else {
                                        $logo = $gambar;
                                    }
                                ?>
                                <img alt="Image" src="admin/images/<?php echo $logo ?>" style="<?php echo $status ?>">
                                <?php } ?>
                            </a>
                        </div>
                        <div id="navbar" class="navbar-nav-wrapper pull-right">
                            <ul class="nav navbar-nav" id="responsive-menu">
                                <li class="<?php if($page=='index'){echo 'active';} ?>">
                                    <a href="index">Home</a>
                                </li>
                                <li class="<?php if($page=='aboutus'){echo 'active';} ?>">
                                    <a href="aboutus">About Us</a>
                                </li>
                                 <li>
                                    <a href="#">Our Services <i class="fa fa-angle-down"></i></a>
                                    <ul>
                                        <li><a href="#">Tour & Destination</a></li>
                                        <li><a href="#">Tour Packages</a></li>
                                        <li><a href="#">Ticketing</a></li>
                                        <li><a href="rent-car">Car Rental</a></li>
                                    </ul>
                                </li>
                                <li class="<?php if($page=='contactus'){echo 'active';} ?>">
                                    <a href="contactus">Contact Us</a>
                                </li>
                            </ul>
                        </div><!--/.nav-collapse -->
                        <div id="slicknav-mobile"></div>
                    </nav>
                </div>
            </div>
        </div>
    </div>