<?php
include 'koneksi.php';
error_reporting(0);
session_start();
if($_SESSION['status']!="login"){
  header("location:login.php");
}

$id_wisata = $_GET['id_wisata'];
?>
<style type="text/css">
    #image-preview{
    display:none;
    width : 293px;
    height : 195px;
}
</style>

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
                            <div class="card card-info">
                                <div class="card-header">
                                    <h3 class="card-title"></h3>
                                </div>
                                <!-- /.card-header -->
                                <!-- form start -->
                                <form role="form" method="POST" action="area-destinasi-ubah-aksi.php" enctype="multipart/form-data">
                                	<?
                                	$data = mysqli_query($koneksi,"SELECT * FROM tbl_WisataWilayahArea WHERE id_wisata_area = '$id_wisata' LIMIT 1");
									while($d = mysqli_fetch_array($data)){
									?>
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Nama Destinasi Wisata</label>
                                            <input name="nama_wisata" type="text" class="form-control" id="exampleInputEmail1" value="<?php echo $d['nama_wisata_area']; ?>">
                                            <input type="hidden" name="id_wisata" value="<?php echo $d['id_wisata_area']; ?>">
                                        </div>
                                        <div class="form-group">
                                        	<label for="exampleInputPassword1">Deskripsi Destinasi Wisata</label>
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
					                         		<textarea name="deskripsi_wisata" class="textarea" style="width: 100%; height: 400px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"><?php echo $d['deskripsi_wisata_area']; ?>
					                                </textarea>
					                            </div>
					                        </div>
					                           <!-- /. tools -->
                                        </div>
                                        <div class="form-group">
                                            <label>Pilih Area Destinasi</label>
                                            <select class="custom-select" name="kategori_wisata">
                                                <option readonly><?php echo $d['nama_wisata']; ?></option> 
                                                <?php
                                                $query_mysql = mysqli_query($koneksi,"SELECT * FROM tbl_WisataWilayah")or die(mysqli_error());
                                                $nomor = 1;
                                                while($data = mysqli_fetch_array($query_mysql)){
                                                    $nama = $data['nama_wisata'];
                                                ?>
                                                <option><?php echo $nama ; ?></option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="customFile">Galeri Gambar</label>
                                            <img id="image-preview" alt="image preview"/><br/>
                                            <div class="custom-file">
                                                <input type="file" class="" name="gambar_wisata" id="image-source" onchange="previewImage();">
                                            </div>
                                            <div>
                                                <?php
                                                if ($d['gambar_wisata_area'] == '') {
                                                    $tampakGambar = 'display:none;';
                                                }
                                                else {
                                                    echo "<label>Gambar Wisata Saat Ini</label><br>";
                                                }
                                                ?>
                                                
                                                <img src="<?php echo "images/".$d['gambar_wisata_area']; ?>" alt="Image" width="293px" height="195px" style="object-fit: cover; <?php echo($tampakGambar); ?> ">

                                                
                                            </div>
                                        </div>
                                    </div>
                                	<?php } ?>
                                    <!-- /.card-body -->

                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-block btn-info">Ubah Data</button>
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