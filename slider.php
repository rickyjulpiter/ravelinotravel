    <section id="home_banner">
        <!-- Paradise Slider -->
        <div id="kenburns_061" class="carousel slide ps_indicators_txt_icon ps_control_txt_icon kbrns_zoomInOut thumb_scroll_x swipe_x ps_easeOutQuart" data-ride="carousel" data-pause="hover" data-interval="10000" data-duration="2000">
            <!-- Wrapper For Slides -->
            <div class="carousel-inner" role="listbox">
                <?php
                $query_mysql = mysqli_query($koneksi,"SELECT * FROM (SELECT DISTINCT(pw.id),pw.nama AS nama,pw.deskripsi AS deskripsi,pwg.gambar FROM paket_wisata AS pw INNER JOIN paket_wisata_gambar AS pwg ON pw.id = pwg.paket_wisata_id) AS tabel GROUP BY id")or die(mysqli_error());
                $no = 0;
                while($data = mysqli_fetch_array($query_mysql)){
                    //$idDestinasi = $data['id'];
                    $namaDestinasi = $data['nama'];
                    $deskripsiDestinasi = $data['deskripsi'];
                    $gambarDestiansi = $data['gambar'];
                    $no++;
                    if ($no == 1) {
                        $status = "active";
                    }
                    else {
                        $status = "";
                    }
                ?>
                <!-- Slide -->
                <div class="item <?php echo $status; ?> ">
                    <!-- Slide Background -->
                    <img src="<?php echo $gambarDestiansi; ?>" alt="kenburns_061_01" />
                    <!-- Left Slide Text Layer -->
                    <div class="kenburns_061_slide" data-animation="animated fadeInRight">
                        <h2><?php echo $namaDestinasi; ?></h2>
                        <h1><?php echo limit_words(strip_tags($deskripsiDestinasi),50)."..."; ?></h1>

                        <a href="tour?tourName=<?php echo $namaDestinasi; ?>" class="btn-blue btn-red">Destination Detail</a>
                    </div><!-- /Left Slide Text Layer -->
                </div><!-- /item -->
                <!-- End of Slide -->
                <?php } ?>
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