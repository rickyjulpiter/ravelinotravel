    <div class="navigation" style="background: url(images/83.jpg) no-repeat;background-size: cover; padding-bottom: -100px;">  
        <div class="container" style="">
            <div class="navigation-content">
                <div class="header_menu">
                    <!-- start Navbar (Header) -->
                    <nav class="navbar navbar-default navbar-sticky-function navbar-arrow">
                        <div class="logo pull-left">
                            <a href="index"><img alt="Image" src="<?php echo $logo; ?>" style="float: left;width: 25%;"><img alt="Image" src="images/indo.png" style="float: right;width: 20%;"></a>
                        </div>
                        <div id="navbar" class="navbar-nav-wrapper" style="margin-top: -15px; /*margin-bottom: -20px*/;">
                            <ul class="nav navbar-nav" id="responsive-menu">
                                <li>
                                    <a href="index" style="font-size: 12px;">Home</a>
                                </li>
                                <li>
                                    <a href="about" style="font-size: 12px;">About</a>
                                </li>
                                <li>
                                    <a href="#" style="font-size: 12px;">Destination <i class="fa fa-angle-down"></i></a>
                                    <ul style="display: none;" style="background: url(images/83.jpg) no-repeat;background-size: cover;">
                                        <?php
                                        $query_destinasi = mysqli_query($koneksi,"SELECT * FROM destinasi")or die(mysqli_error());
                                        while($data = mysqli_fetch_array($query_destinasi)){
                                            $idDestinasi = $data['id'];
                                            $namaDestinasi = $data['nama'];
                                        ?>
                                        <li>
                                            <a href="destination-detail?destination=<?php echo $namaDestinasi; ?>"><?php echo $namaDestinasi; ?> <i class="arrow-indicator fa fa-angle-right"></i></a>
                                            <ul style="display: none;">
                                                <?php 
                                                $query_area_destinasi = mysqli_query($koneksi,"SELECT * FROM destinasi_area WHERE destinasi_id = '$idDestinasi'")or die(mysqli_error());
                                                while ($area = mysqli_fetch_array($query_area_destinasi)) {
                                                    $namaDestinasiArea = $area['nama_area'];
                                                ?>
                                                <li><a href="destination-area-detail?destination=<?php echo $namaDestinasiArea; ?>"><?php echo $namaDestinasiArea; ?></a></li>
                                                <?php } ?>
                                            </ul>
                                        </li>
                                        <?php } ?>
                                    </ul>
                                </li>
                                <!-- Contoh seharusnya gini rud, tapi pakailah kek sebelumnya, ini biar bisa nampak aja harusnya dia ngeredirect kemana -->
                                <li>
                                    <a href="#" style="font-size: 12px;">Tour Packages <i class="fa fa-angle-down"></i></a>
                                    <ul>
                                        <?php
                                        $query_destinasi = mysqli_query($koneksi,"SELECT DISTINCT(d.id),d.nama FROM paket_wisata_detail AS pwd INNER JOIN destinasi_area AS da ON pwd.destinasi_area_id = da.id_area INNER JOIN destinasi AS d ON d.id = da.destinasi_id")or die(mysqli_error());
                                        while($data = mysqli_fetch_array($query_destinasi)){
                                            $idDestinasi = $data['id'];
                                            $namaDestinasi = $data['nama'];
                                        ?>
                                        <li><a href="#"><?= $namaDestinasi ?><i class="arrow-indicator fa fa-angle-right"></i></a>  
                                            <ul>
                                                <?php 
                                                $query_area_destinasi = mysqli_query($koneksi,"SELECT DISTINCT(pw.nama) FROM paket_wisata_detail AS pwd INNER JOIN paket_wisata as pw ON pwd.paket_wisata_id = pw.id INNER JOIN destinasi_area AS da ON pwd.destinasi_area_id = da.id_area  WHERE da.destinasi_id = '$idDestinasi'")or die(mysqli_error());
                                                while ($area = mysqli_fetch_array($query_area_destinasi)) {
                                                    $namaPaket = $area['nama'];
                                                ?>
                                                <li><a href="tour?tourName=<?= $namaPaket;?>"><?= $namaPaket?></a></li>
                                                <?php } ?>
                                            </ul>
                                        </li>
                                        <?php } ?>
                                    </ul>
                                </li>
                                
                                <li>
                                    <a href="#" style="font-size: 12px;">Services</a>
                                    <ul style="display: none;">
                                        <li> <a href="ticket">Ticketing</a></li>
                                        <li> <a href="rent">Car Rental</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="gallery" style="font-size: 12px;">Photo Gallery</a>
                                </li>
                                <li>
                                    <a href="contactus" style="font-size: 12px;">Contact</a>
                                </li>
                                <li>
                                    <a href="request" style="font-size: 12px;">Special Request</a>
                                </li>
                            </ul>
                        </div><!--/.nav-collapse -->
                        <div id="slicknav-mobile"></div>
                    </nav>
                </div>
            </div>
        </div>
    </div>