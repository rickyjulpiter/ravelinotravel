    <?php
    $queryTourPackagesInternational = mysqli_query($koneksi,"SELECT * FROM jenis_paket WHERE id_paket = 1")or die(mysqli_error());
    $international = mysqli_fetch_assoc($queryTourPackagesInternational);
    $namaPaket = $international['nama_paket'];
    $deskripsiPaket = $international['deskripsi_paket'];
    $gambarPaket = $international['gambar_paket'];
    ?>
    <section class="deals"  style="background: url(<?php echo($gambarPaket); ?>) no-repeat;">
        <div class="container">
            <div class="section-title section-title-white text-center">
                <h2><?php echo($namaPaket); ?></h2>
                <div class="section-icon">
                    <i class="flaticon-diamond"></i>
                </div>
                <p><?php echo($deskripsiPaket); ?></p>
            </div>
            <div class="deals-outer">
                <div class="row deals-slider slider-button">
                    <?php
                    $query_mysql = mysqli_query($koneksi,"SELECT * FROM paket_wisata WHERE jenis_paket = 1")or die(mysqli_error());
                    while($data = mysqli_fetch_array($query_mysql)){
                        $idWisata = $data['id_wisata'];
                        $namaWisata = $data['nama_wisata'];
                        $deskripsiWisata = $data['deskripsi_wisata'];
                        $hargaWisata = $data['harga_wisata'];
                        $gambarWisata = $data['gambar_wisata'];
                    ?>
                    <div class="col-md-3">
                        <div class="deals-item">
                            <div class="deals-item-outer">
                                <div class="deals-image">
                                    <img src="<?php echo $gambarWisata;?>" alt="Image">
                                    <span class="deal-price">Rp. <?php echo number_format($hargaWisata, 0, ".",".") ?></span>
                                </div>
                                <div class="deal-content">
                                    <h3><?php echo $namaWisata; ?></h3>
                                    <p><?php echo $deskripsiWisata; ?></p>
                                    <a href="paket-tour-detail?idWisata=<?php echo $idWisata; ?>" class="btn-blue btn-red">Package Detail</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </div>
        <div class="section-overlay"></div>
    </section>