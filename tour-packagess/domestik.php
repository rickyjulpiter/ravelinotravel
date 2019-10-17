    <?php
    $queryTourPackagesDomestik = mysqli_query($koneksi,"SELECT * FROM jenis_paket WHERE id_paket = 2")or die(mysqli_error());
    $domestik = mysqli_fetch_assoc($queryTourPackagesDomestik);
    $namaPaket = $domestik['nama_paket'];
    $deskripsiPaket = $domestik['deskripsi_paket'];
    ?>
    <section class="popular-packages" style="margin-top: 30px;">
        <div class="container">
            <div class="section-title text-center">
                <h2><?php echo($namaPaket); ?></h2>
                <div class="section-icon">
                    <i class="flaticon-diamond"></i>
                </div>
                <p><?php echo($deskripsiPaket); ?></p>
            </div>
            <div class="row package-slider slider-button">
                <?php
                    $query_mysql = mysqli_query($koneksi,"SELECT * FROM paket_wisata WHERE jenis_paket = 2")or die(mysqli_error());
                    while($data = mysqli_fetch_array($query_mysql)){
                        $idWisata = $data['id_wisata'];
                        $namaWisata = $data['nama_wisata'];
                        $deskripsiWisata = $data['deskripsi_wisata'];
                        $hargaWisata = $data['harga_wisata'];
                        $gambarWisata = $data['gambar_wisata'];
                ?>
                <div class="col-sm-4">
                    <div class="package-item">
                        <div class="package-image">
                            <img src="<?php echo $gambarWisata;?>" alt="Image">
                            <div class="package-price">
                                <p><span>Rp. <?php echo number_format($hargaWisata, 0, ".",".") ?></span></p>
                            </div>
                        </div>
                        <div class="package-content">
                            <h3><?php echo $namaWisata; ?></h3>
                            <p class="package-days"><i class="flaticon-time"></i> 5 days</p>
                            <p><?php echo $deskripsiWisata; ?></p>
                            <div class="package-info">
                                <a href="paket-tour-detail?idWisata=<?php echo $idWisata; ?>" class="btn-blue btn-red">Package Detail</a>
                            </div>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </section>