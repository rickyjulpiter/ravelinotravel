<?php
include 'koneksi.php';

session_start();
if($_SESSION['status']!="login"){
  header("location:login.php");
}
?>
<!DOCTYPE html>
<html>

<!-- HEAD -->
<?php include 'adm_template/head.php'; ?>
<!-- END HEAD -->

<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
  <?php //include 'adm_template/navbar.php'; ?>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <?php include 'adm_template/sidebar.php'; ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Area Destinasi Wisata</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-12">

          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Area Destinasi Wisata Berdasarkan Wilayah 
                <span style="margin-left: 10px;"><a href="area-destinasi-tambah.php" class="btn btn-info btn-xs">+ Tambah Area Destinasi Wisata</a></span>
              </h3>
              
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <td>No</td>
                    <td>Nama Destinasi</td>
                    <td>Deskripsi Destinasi</td>
                    <td>Wilayah</td>
                    <td>Gambar</td>
                    <td>Aksi</td>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $query_mysql = mysqli_query($koneksi,"SELECT * FROM tbl_WisataWilayahArea")or die(mysqli_error());
                  $nomor = 1;
                  while($data = mysqli_fetch_array($query_mysql)){
                    $id = $data['id_wisata_area'];
                    $nama = $data['nama_wisata_area'];
                    $deskripsi = $data['deskripsi_wisata_area'];
                    $wilayah = $data['nama_wisata'];
                    if ($data['gambar_wisata_area'] == '')
                    {
                      $gambar = '';
                      $tampakGambar = 'display:none;';
                    }
                    else {
                      $gambar = "images/".$data['gambar_wisata_area'];
                    }
                  ?>
                  <tr>
                    <td><?php echo $nomor++; ?></td>
                    <td><?php echo $nama; ?></td>
                    <td><?php echo $deskripsi; ?></td>
                    <td><?php echo $wilayah; ?></td>
                    <td><img src="<?php echo $gambar; ?>" alt="Image" width="293px" height="195px" style="object-fit: cover; <?php echo($tampakGambar); ?> "></td>
                    <td>
                      <a href='area-destinasi-ubah.php?id_wisata=<?php echo $id; ?>' class="btn btn-primary btn-block">Ubah</a>
                      <a href='area-destinasi-hapus.php?id_wisata=<?php echo $id; ?>' class="btn btn-danger btn-block">Hapus</a>
                    </td>
                  </tr>
                  <?php } ?>
                </tbody>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <?php include 'adm_template/footer.php'; ?>

</div>
<!-- ./wrapper -->

<!-- jQuery -->
<?php include 'adm_template/script.php'; ?>
</body>
<!-- DataTables -->
<script>
  $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
    });
  });
</script>
</html>
