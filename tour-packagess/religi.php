    <?php
    $queryTourPackagesReligi = mysqli_query($koneksi,"SELECT * FROM jenis_paket WHERE id_paket = 3")or die(mysqli_error());
    $religi = mysqli_fetch_assoc($queryTourPackagesReligi);
    $namaPaket = $religi['nama_paket'];
    $deskripsiPaket = $religi['deskripsi_paket'];
    ?>
    <section class="deals-on-sale">
        <div class="container">
            <div class="section-title text-center">
                <h2><?php echo($namaPaket); ?></h2>
                <div class="section-icon">
                    <i class="flaticon-diamond"></i>
                </div>
                <p><?php echo($deskripsiPaket); ?></p>
            </div>
            <div class="row sale-slider slider-button">
                <?php
                    $query_mysql = mysqli_query($koneksi,"SELECT * FROM paket_wisata WHERE jenis_paket = 3")or die(mysqli_error());
                    while($data = mysqli_fetch_array($query_mysql)){
                        $idWisata = $data['id_wisata'];
                        $namaWisata = $data['nama_wisata'];
                        $deskripsiWisata = $data['deskripsi_wisata'];
                        $hargaWisata = $data['harga_wisata'];
                        $gambarWisata = $data['gambar_wisata'];
                ?>
                <div class="col-md-12">
                    <div class="sale-item">
                        <div class="sale-image">
                            <img src="<?php echo $gambarWisata;?>" alt="Image" width="359px" height="449px" style="object-fit: cover;">
                        </div>
                        <div class="sale-content">
                            <div class="sale-review">
                            </div>
                            <h3><a href="#"><?php echo $namaWisata;?></a></h3>
                            <p><i class="flaticon-time"></i> 5 days</p>
                            <p><?php echo $deskripsiWisata;?></p>
                            <a href="paket-tour-detail?idWisata=<?php echo $idWisata; ?>" class="btn-blue btn-red">Package Detail</a>
                        </div>
                        <div class="sale-tag">
                            <span class="new-price">Rp. <?php echo number_format($hargaWisata, 0, ".",".") ?></span>
                        </div>
                        <div class="sale-overlay"></div>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </section>