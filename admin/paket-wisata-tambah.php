<?php
include 'koneksi.php';

session_start();
if($_SESSION['status']!="login"){
  header("location:login");
}

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
                            <h1>Tambah Paket Wisata</h1>
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
                                <form role="form" method="POST" action="paket-wisata-tambah-aksi" enctype="multipart/form-data">
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Nama Paket</label>
                                            <input name="nama" type="text" class="form-control" id="exampleInputEmail1">
                                            <input type="hidden" name="id">
                                        </div>
                                        <div class="form-group">
                                            <label>Jenis Paket</label>
                                            <select class="custom-select" name="jenis">
                                                <?php
                                                $query_mysql = mysqli_query($koneksi,"SELECT * FROM jenis_paket")or die(mysqli_error());
                                                while($data = mysqli_fetch_array($query_mysql)){
                                                    $namaPaket = $data['nama_paket'];
                                                ?>
                                                <option><?php echo $namaPaket ; ?></option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Harga</label>
                                            <input name="harga" type="number" class="form-control" id="exampleInputEmail1">
                                        </div>
                                        <div class="form-group">
                                        	<label for="exampleInputPassword1">Deskripsi Wisata</label>
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
					                         		<textarea name="deskripsi" class="textarea" style="width: 100%; height: 400px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">
					                                </textarea>
					                            </div>
					                        </div>
					                           <!-- /. tools -->
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Fasilitas Wisata</label>
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
                                                    <textarea name="fasilitas" class="textarea" style="width: 100%; height: 400px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">
                                                        <table>
                                                            <thead>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td class="title">Departure</td>
                                                                    <td><i class="fa fa-map-marker" aria-hidden="true"></i> San Francisco International Airport</td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="title">Departure Time</td>
                                                                    <td><i class="fa fa-clock-o" aria-hidden="true"></i> Please arrive by 10:20 AM for a prompt departure at 10:50 AM</td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="title">Maximum travellers</td>
                                                                    <td><i class="fa fa-user-o" aria-hidden="true"></i> 23</td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="title">Languages</td>
                                                                    <td><i class="fa fa-file-audio-o" aria-hidden="true"></i> English, Thai, Malayt</td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="title">Includes</td>
                                                                    <td>
                                                                        <ul>
                                                                            <li><i class="fa fa-check" aria-hidden="true"></i> Airfare</li>
                                                                            <li><i class="fa fa-check" aria-hidden="true"></i> Transportation</li>
                                                                            <li><i class="fa fa-check" aria-hidden="true"></i> Professional Guide</li>
                                                                        </ul>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="title">Excludes</td>
                                                                    <td class="excludes">
                                                                        <ul>
                                                                            <li><i class="fa fa-times" aria-hidden="true"></i> Departure Taxes</li>
                                                                            <li><i class="fa fa-times" aria-hidden="true"></i> Entry Fees</li>
                                                                            <li><i class="fa fa-times" aria-hidden="true"></i> Insurance</li>
                                                                        </ul>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="title">Popular Places</td>
                                                                    <td>
                                                                        <ul>
                                                                            <li><i class="fa fa-map-marker" aria-hidden="true"></i> Eiffel Tower</li>
                                                                            <li><i class="fa fa-map-marker" aria-hidden="true"></i> Eiffel Tower</li>
                                                                            <li><i class="fa fa-map-marker" aria-hidden="true"></i> Eiffel Tower</li>
                                                                        </ul>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </textarea>
                                                </div>
                                            </div>
                                               <!-- /. tools -->
                                        </div>
                                        <div class="form-group">
                                            <label for="customFile">Preview Gambar</label>
                                            <img id="image-preview" alt="image preview"/><br/>
                                            <div class="custom-file">
                                                <input type="file" class="" name="gambar" id="image-source" onchange="previewImage();">
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.card-body -->

                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-block btn-info">Tambah Data Paket</button>
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