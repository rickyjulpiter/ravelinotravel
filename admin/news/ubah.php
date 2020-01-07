<?php
include '../../koneksi.php';

session_start();
if ($_SESSION['status'] != "login") {
    header("location:../login");
}

if (!empty($_GET['id'])) {
    $id = $_GET['id'];
} else {
    header("location:../destination-area");
}
?>
<style type="text/css">
    #image-preview {
        display: none;
        width: 293px;
        height: 195px;
    }
</style>

<!DOCTYPE html>
<html>

<!-- HEAD -->
<?php include '../adm_template/head.php'; ?>
<!-- END HEAD -->

<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <!-- Navbar -->
        <?php //include 'adm_template/navbar.php'; 
        ?>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <?php include '../adm_template/sidebar.php'; ?>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Update News & Event</h1>
                        </div>
                    </div>
                </div>
                <!-- /.container-fluid -->
            </section>

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <!-- left column -->
                        <div class="col-md-12">
                            <!-- general form elements -->
                            <div class="card card-info">
                                <div class="card-header">
                                    <h3 class="card-title"></h3>
                                </div>
                                <!-- /.card-header -->
                                <!-- form start -->
                                <form role="form" method="POST" action="ubah-aksi" enctype="multipart/form-data">
                                    <?php
                                    $queryDetailAdmin = mysqli_query($koneksi, "SELECT * FROM news WHERE id = $id ");
                                    $d = mysqli_fetch_assoc($queryDetailAdmin);
                                    $id = $d['id'];
                                    $nama = $d['nama'];
                                    $deskripsi = $d['deskripsi'];
                                    $gambar = $d['gambar'];
                                    ?>
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Nama</label>
                                            <input name="nama" type="text" class="form-control" id="exampleInputEmail1" value="<?= $nama; ?>">
                                            <input type="hidden" name="id" value="<?= $id; ?>">
                                        </div>
                                        <div class="form-group">
                                        	<label for="exampleInputPassword1">Deskripsi</label>
                                        	<!-- tools box -->
                                        	<div class="card-tools" style="margin-top: -22px;">
                                        		<button type="button" class="btn btn-tool btn-sm" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                                        			<i class="fas fa-minus"></i>
					                             </button>
					                             <button type="button" class="btn btn-tool btn-sm" data-card-widget="remove" data-toggle="tooltip"
					                                 title="Remove">
					                                 <i class="fas fa-times"></i>
					                             </button>
					                        </div>
					                        <div class="pad">
					                         	<div class="">
					                         		<textarea name="deskripsi" class="textarea" style="width: 100%; height: 400px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"><?= $deskripsi; ?>
					                                </textarea>
					                            </div>
					                        </div>
					                           <!-- /. tools -->
                                        <!--</div>-->
                                        <!--<div class="form-group">-->
                                        <!--    <label for="exampleInputEmail1">Link</label>-->
                                        <!--    <input name="deskripsi" type="text" class="form-control" id="exampleInputEmail1" value="<?= $deskripsi; ?>">-->
                                        <!--</div>-->
                                        <div class="form-group">
                                            <label for="customFile">Preview Gambar</label>
                                            <img id="image-preview" alt="image preview" /><br />
                                            <div class="custom-file">
                                                <input type="file" class="" name="gambar" id="image-source" onchange="previewImage();" accept="image/*">
                                            </div>
                                            <div>
                                                <?php
                                                if ($gambar == '') {
                                                    $tampakGambar = 'display:none;';
                                                } else {
                                                    echo "<label>Gambar Destinasi Area Saat Ini</label><br>";
                                                }
                                                ?>
                                                <img src="<?php echo "../../" . $gambar; ?>" width="30%" style="<?php echo ($tampakGambar); ?>">
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.card-body -->

                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-block btn-info">Update News & Event</button>
                                    </div>
                                </form>
                            </div>
                            <!-- /.card -->
                        </div>
                        <!--/.col (right) -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container-fluid -->
            </section>

            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
        <?php include '../adm_template/footer.php'; ?>
    </div>
    <!-- ./wrapper -->
    <?php include '../adm_template/script.php'; ?>
    <script src="plugins/summernote/summernote-bs4.min.js"></script>
    <script>
        $(function() {
            // Summernote
            $('.textarea').summernote({
                toolbar: [
                    // [groupName, [list of button]]
                    ['style', ['bold', 'italic', 'underline', 'clear']],
                    ['font', ['strikethrough', 'superscript', 'subscript']],
                    ['fontsize', ['fontsize']],
                    ['color', ['color']],
                    ['para', ['ul', 'ol', 'paragraph']],
                    ['height', ['height']]
                ]
            });
        })
    </script>
    <script type="text/javascript">
        function previewImage() {
            document.getElementById("image-preview").style.display = "block";
            var oFReader = new FileReader();
            oFReader.readAsDataURL(document.getElementById("image-source").files[0]);

            oFReader.onload = function(oFREvent) {
                document.getElementById("image-preview").src = oFREvent.target.result;
            };
        };
    </script>

</body>

</html>