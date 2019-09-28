	<?php
    include 'admin/koneksi.php';
    ?>
    <header>
        <div class="upper-head clearfix">
            <div class="container">
                <div class="contact-info">
                    <?php
                    $query_mysql = mysqli_query($koneksi,"SELECT * FROM tbl_TentangTravel")or die(mysqli_error());
                    while($data = mysqli_fetch_array($query_mysql)){
                        $phone = $data['nohp_travel'];
                        $email = $data['email_travel'];
                    ?>
                    <p><i class="flaticon-phone-call"></i> Phone: <?php echo $phone ?></p>
                    <p><i class="flaticon-mail"></i> Mail: <?php echo $email ?></p>
                    <?php } ?>
                </div>
            </div>
        </div>
    </header>