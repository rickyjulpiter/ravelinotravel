    <!-- Trusted Partners -->
    <section class="trusted-partners" style="background-color: #e67e22">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-xs-4">
                    <div class="partners-title">
                        <h3>Our <span>Partners</span></h3>
                    </div>
                </div>
                <div class="col-md-9 col-xs-8">
                    <ul class="partners-logo partners-slider">
                        <?php
                        $query_mysql = mysqli_query($koneksi, "SELECT * FROM partner") or die(mysqli_error());
                        while ($data = mysqli_fetch_array($query_mysql)) {
                            $idPartner = $data['id'];
                            $namaPartner = $data['nama'];
                            $gambarPartner = $data['gambar'];
                            ?>
                            <li><a href="#"><img src="<?php echo $gambarPartner; ?>" alt="Image"></a></li>
                        <?php } ?>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- Trusted Partners Ends -->