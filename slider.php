    <section id="home_banner">
        <!-- Paradise Slider -->
        <div id="kenburns_061" class="carousel slide ps_indicators_txt_icon ps_control_txt_icon kbrns_zoomInOut thumb_scroll_x swipe_x ps_easeOutQuart" data-ride="carousel" data-pause="hover" data-interval="10000" data-duration="2000">
            <!-- Wrapper For Slides -->
            <div class="carousel-inner" role="listbox">
                <?php
                $queryDetailWisata = mysqli_query($koneksi,"SELECT * FROM paket_wisata A, jenis_paket B WHERE jenis_paket = 1 AND A.jenis_paket = B.id_paket")or die(mysqli_error());
                $detailWisata = mysqli_fetch_assoc($queryDetailWisata);
                $namaWisata = $detailWisata['nama_wisata'];
                $deskripsiWisata = $detailWisata['deskripsi_wisata'];
                $hargaWisata = $detailWisata['harga_wisata'];
                $fasilitasWisata = $detailWisata['fasilitas_wisata'];
                $gambarWisata = $detailWisata['gambar_wisata'];
                
                $idPaket = $detailWisata['id_paket'];
                $deskripsiPaket = $detailWisata['deskripsi_paket'];
                $jenisPaket = $detailWisata['nama_paket'];
                $gambarPaket = $detailWisata['gambar_paket'];

                ?>

                <!-- First Slide -->
                <div class="item active">
                    <!-- Slide Background -->
                    <img src="<?php echo $gambarPaket; ?>" alt="kenburns_061_01" />
                    <!-- Left Slide Text Layer -->
                    <div class="kenburns_061_slide" data-animation="animated fadeInRight">
                        <h2><?php echo $jenisPaket; ?></h2>
                        <h1><?php echo $deskripsiPaket; ?></h1>

                        <a href="paket-tour?jenis_wisata=<?php echo $idPaket; ?>" class="btn-blue btn-red">Lihat Paket Tour</a>
                    </div><!-- /Left Slide Text Layer -->
                </div><!-- /item -->
                <!-- End of Slide -->

                <?php
                $queryDetailWisata = mysqli_query($koneksi,"SELECT * FROM paket_wisata A, jenis_paket B WHERE jenis_paket = 2 AND A.jenis_paket = B.id_paket")or die(mysqli_error());
                $detailWisata = mysqli_fetch_assoc($queryDetailWisata);
                $namaWisata = $detailWisata['nama_wisata'];
                $deskripsiWisata = $detailWisata['deskripsi_wisata'];
                $hargaWisata = $detailWisata['harga_wisata'];
                $fasilitasWisata = $detailWisata['fasilitas_wisata'];
                $gambarWisata = $detailWisata['gambar_wisata'];
                
                $idPaket = $detailWisata['id_paket'];
                $deskripsiPaket = $detailWisata['deskripsi_paket'];
                $jenisPaket = $detailWisata['nama_paket'];
                $gambarPaket = $detailWisata['gambar_paket'];

                ?>
                <!-- Second Slide -->
                <div class="item">
                    <!-- Slide Background -->
                    <img src="<?php echo $gambarPaket; ?>" alt="kenburns_061_01" />
                    <!-- Left Slide Text Layer -->
                    <div class="kenburns_061_slide kenburns_061_slide_right" data-animation="animated fadeInRight">
                        <h2><?php echo $jenisPaket; ?></h2>
                        <h1><?php echo $deskripsiPaket; ?></h1>

                        <a href="paket-tour?jenis_wisata=<?php echo $idPaket; ?>" class="btn-blue btn-red">Lihat Paket Tour</a>
                    </div><!-- /Left Slide Text Layer -->
                </div><!-- /item -->

                <?php
                $queryDetailWisata = mysqli_query($koneksi,"SELECT * FROM paket_wisata A, jenis_paket B WHERE jenis_paket = 3 AND A.jenis_paket = B.id_paket")or die(mysqli_error());
                $detailWisata = mysqli_fetch_assoc($queryDetailWisata);
                $namaWisata = $detailWisata['nama_wisata'];
                $deskripsiWisata = $detailWisata['deskripsi_wisata'];
                $hargaWisata = $detailWisata['harga_wisata'];
                $fasilitasWisata = $detailWisata['fasilitas_wisata'];
                $gambarWisata = $detailWisata['gambar_wisata'];
                
                $idPaket = $detailWisata['id_paket'];
                $deskripsiPaket = $detailWisata['deskripsi_paket'];
                $jenisPaket = $detailWisata['nama_paket'];
                $gambarPaket = $detailWisata['gambar_paket'];

                ?>
                <!-- Third Slide -->
                <div class="item">
                    <!-- Slide Background -->
                    <img src="<?php echo $gambarPaket; ?>" alt="kenburns_061_01" />
                    <!-- Left Slide Text Layer -->
                    <div class="kenburns_061_slide" data-animation="animated fadeInRight">
                        <h2><?php echo $jenisPaket; ?></h2>
                        <h1><?php echo $deskripsiPaket; ?></h1>

                        <a href="paket-tour?jenis_wisata=<?php echo $idPaket; ?>" class="btn-blue btn-red">Lihat Paket Tour</a>
                    </div><!-- /Left Slide Text Layer -->
                </div><!-- /item -->

                <?php
                $queryDetailWisata = mysqli_query($koneksi,"SELECT * FROM paket_wisata A, jenis_paket B WHERE jenis_paket = 4 AND A.jenis_paket = B.id_paket")or die(mysqli_error());
                $detailWisata = mysqli_fetch_assoc($queryDetailWisata);
                $namaWisata = $detailWisata['nama_wisata'];
                $deskripsiWisata = $detailWisata['deskripsi_wisata'];
                $hargaWisata = $detailWisata['harga_wisata'];
                $fasilitasWisata = $detailWisata['fasilitas_wisata'];
                $gambarWisata = $detailWisata['gambar_wisata'];
                
                $idPaket = $detailWisata['id_paket'];
                $deskripsiPaket = $detailWisata['deskripsi_paket'];
                $jenisPaket = $detailWisata['nama_paket'];
                $gambarPaket = $detailWisata['gambar_paket'];

                ?>
                <!-- Fourth Slide -->
                <div class="item">
                    <!-- Slide Background -->
                    <img src="<?php echo $gambarPaket; ?>" alt="kenburns_061_01" />
                    <!-- Left Slide Text Layer -->
                    <div class="kenburns_061_slide kenburns_061_slide_center" data-animation="animated fadeInRight">
                        <h2><?php echo $jenisPaket; ?></h2>
                        <h1><?php echo $deskripsiPaket; ?></h1>

                        <a href="paket-tour?jenis_wisata=<?php echo $idPaket; ?>" class="btn-blue btn-red">Lihat Paket Tour</a>
                    </div><!-- /Left Slide Text Layer -->
                </div><!-- /item -->

            </div><!-- End of Wrapper For Slides -->

            <!-- Left Control -->
            <a class="left carousel-control" href="#kenburns_061" role="button" data-slide="prev">
                <span>prev</span>
                <span class="sr-only">Previous</span>
            </a>

            <!-- Right Control -->
            <a class="right carousel-control" href="#kenburns_061" role="button" data-slide="next">
                <span>next</span>
                <span class="sr-only">Next</span>
            </a>
        </div> <!-- End Paradise Slider -->
    </section>