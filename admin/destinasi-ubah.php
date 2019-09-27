<?php
include 'koneksi.php';

session_start();
if($_SESSION['status']!="login"){
  header("location:login.php");
}

$idDestinasi = $_GET['id_wisata'];
?>

<!DOCTYPE html>
<html>

<!-- HEAD -->
<?php include 'adm_template/head.php'; ?>
<!-- END HEAD -->

<body class="hold-transition sidebar-mini">
    <div class="wrapper">
    	<!-- Navbar -->
    	<?php //include 'adm_template/navbar.php'; ?>
		<!-- /.navbar -->

		<!-- Main Sidebar Container -->
		<?php include 'adm_template/sidebar.php'; ?>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Ubah Detail Destinasi Wisata</h1>
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
                            <div class="card card-primary">
                                <div class="card-header">
                                    <h3 class="card-title"></h3>
                                </div>
                                <!-- /.card-header -->
                                <!-- form start -->
                                <form role="form">
                                	<?
                                	$data = mysqli_query($koneksi,"SELECT * FROM tbl_WisataWilayah WHERE id_wisata = '$idDestinasi'");
									while($d = mysqli_fetch_array($data)){
										//echo $d['nama_wisata'];
										//echo $d['deskripsi_wisata'];
									?>
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Nama Destinasi Wisata</label>
                                            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="<?php echo $d['nama_wisata']; ?>">
                                        </div>
                                        <div class="form-group">
                                        	<label for="exampleInputPassword1">Deskripsi Destinasi Wisata</label>
                                        	<!-- tools box -->
                                        	<div class="card-tools" style="margin-top: -22px;">
                                        		<button type="button" class="btn btn-tool btn-sm" data-card-widget="collapse" data-toggle="tooltip"
					                                 title="Collapse">
					                                 <i class="fas fa-minus"></i>
					                             </button>
					                             <button type="button" class="btn btn-tool btn-sm" data-card-widget="remove" data-toggle="tooltip"
					                                 title="Remove">
					                                 <i class="fas fa-times"></i>
					                             </button>
					                        </div>
					                        <div class="pad">
					                         	<div class="">
					                         		<textarea class="textarea" placeholder="sdsds" style="width: 100%; height: 400px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">
					                                </textarea>
					                            </div>
					                        </div>
					                           <!-- /. tools -->
                                        </div>
                                        <!--
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Deskripsi Destinasi Wisata</label>
                                            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="<?php //echo $d['deskripsi_wisata']; ?>">
                                        </div>
                                    	-->
                                        <div class="form-group">
                                        	<label for="customFile">Galeri Gambar</label>
						                    <div class="custom-file">
						                    	<input type="file" class="custom-file-input" id="customFile">
						                      	<label class="custom-file-label" for="customFile">Choose file</label>
						                    </div>
						                </div>
                                    </div>
                                	<?php } ?>
                                    <!-- /.card-body -->

                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-primary">Submit</button>
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
        <?php include 'adm_template/footer.php'; ?>
    </div>
    <!-- ./wrapper -->
    <?php include 'adm_template/script.php'; ?>
    <script src="plugins/summernote/summernote-bs4.min.js"></script>
    <script>
         $(function () {
           // Summernote
           $('.textarea').summernote()
         })
      </script>
</body>

</html>