    <div class="navigation">  
        <div class="container">
            <div class="navigation-content">
                <div class="header_menu">
                    <!-- start Navbar (Header) -->
                    <nav class="navbar navbar-default navbar-sticky-function navbar-arrow">
                        <div class="logo pull-left">
                            <a href="index"><img alt="Image" src="<?php echo $logo; ?>"></a>
                        </div>
                        <div id="navbar" class="navbar-nav-wrapper pull-right">
                            <ul class="nav navbar-nav" id="responsive-menu">
                                <li>
                                    <a href="index" style="font-size: 12px;">Home</a>
                                </li>
                                <li>
                                    <a href="about" style="font-size: 12px;">About</a>
                                </li>
                                <li>
                                    <a href="index.html" style="font-size: 12px;">Destination <i class="fa fa-angle-down"></i></a>
                                    <ul style="display: none;">
                                        <?php
                                        $query_destinasi = mysqli_query($koneksi,"SELECT * FROM destinasi")or die(mysqli_error());
                                        while($data = mysqli_fetch_array($query_destinasi)){
                                            $idDestinasi = $data['id'];
                                            $namaDestinasi = $data['nama'];
                                        ?>
                                        <li>
                                            <a href="#"><?php echo $namaDestinasi; ?> <i class="arrow-indicator fa fa-angle-right"></i></a>
                                            <ul style="display: none;">
                                                <?php 
                                                $query_area_destinasi = mysqli_query($koneksi,"SELECT * FROM destinasi_area WHERE destinasi_id = '$idDestinasi'")or die(mysqli_error());
                                                while ($area = mysqli_fetch_array($query_area_destinasi)) {
                                                    $namaDestinasiArea = $area['nama_area'];
                                                ?>
                                                <li><a href="#"><?php echo $namaDestinasiArea; ?></a></li>
                                                <?php } ?>
                                            </ul>
                                        </li>
                                        <?php } ?>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#" style="font-size: 12px;">Tour Packages</a>
                                </li>
                                <li>
                                    <a href="about" style="font-size: 12px;">Services</a>
                                    <ul style="display: none;">
                                        <li> <a href="#">Ticketing</a></li>
                                        <li> <a href="#">Car Rental</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#" style="font-size: 12px;">Photo Gallery</a>
                                </li>
                                <li>
                                    <a href="contactus" style="font-size: 12px;">Contact</a>
                                </li>
                                <li>
                                    <a href="#" style="font-size: 12px;">Special Request</a>
                                </li>
                            </ul>
                        </div><!--/.nav-collapse -->
                        <div id="slicknav-mobile"></div>
                    </nav>
                </div>
            </div>
        </div>
    </div>