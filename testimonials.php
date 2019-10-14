    <section class="testimonials" style="margin-top: -40px;">
        <div class="section-title text-center">
            <h2>Testimonial</h2>
            <div class="section-icon section-icon-white">
                <i class="flaticon-diamond"></i>
            </div>       
        </div>
        <!-- Paradise Slider -->
        <div id="testimonial_094" class="carousel slide testimonial_094_indicators thumb_scroll_x swipe_x ps_easeOutSine" data-ride="carousel" data-pause="hover" data-interval="3000" data-duration="1000" style="margin-bottom: -50px;">

            <!-- Wrapper For Slides -->
            <div class="carousel-inner" role="listbox">
                <?php
                $query_mysql = mysqli_query($koneksi,"SELECT * FROM testimonial")or die(mysqli_error());
                $nomor = 0;
                while($data = mysqli_fetch_array($query_mysql)){
                    $namaTesti = $data['nama_testi'];
                    $deskripsiTesti = $data['deskripsi_testi'];
                    $nomor++;
                    if ($nomor == 1) {
                        $class = 'active';
                    }
                    else {
                        $class = '';
                    }
                ?>
                <div class="item <?php echo $class; ?>">
                    <!-- Text Layer -->
                    <div class="testimonial_094_slide">
                        <p><?php echo $deskripsiTesti;?></p>
                        <div class="deal-rating">
                        </div>
                        <h5><a href="#"><?php echo $namaTesti;?></a></h5>
                    </div> <!-- /Text Layer -->
                </div> <!-- /item -->
                <!-- End of First Slide -->
                <?php } ?>
                <!-- End of Fifth Slide -->
            </div> <!-- End of Wrapper For Slides -->
        </div> <!-- End Paradise Slider -->
    </section>