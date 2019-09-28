    <footer style="background-color: #e67e22"> 
        <div class="copyright">
            <div class="container">
                <div class="row" style="margin-top: 2%;">
                    <div class="col-xs-6">
                        <div class="copyright-content">
                            <?php
                            include 'admin/koneksi.php';
                            $query_mysql = mysqli_query($koneksi,"SELECT * FROM tbl_TentangTravel")or die(mysqli_error());
                            while($data = mysqli_fetch_array($query_mysql)){
                                $title = $data['nama_travel'];
                            ?>
                            <p><?php echo date("Y"); ?> <i class="fa fa-copyright" aria-hidden="true"></i> <?php echo $title; ?> by <a href="https://www.sistempintar.com" target="_blank">Sistem Pintar</a></p>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>