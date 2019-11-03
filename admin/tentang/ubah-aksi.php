<?php
	include '../../koneksi.php';

	$lokasi_file= $_FILES['logo']['tmp_name'];
	$nama_file = $_FILES['logo']['name'];

	$folder = "../../images/$nama_file";

	$id = $_POST['id'];
	$nama = $_POST['nama'];
	$slogan = mysqli_escape_string($koneksi,$_POST['slogan']);
	$alamat = mysqli_escape_string($koneksi,$_POST['alamat']);
	$email = mysqli_escape_string($koneksi,$_POST['email']);
	$telepon = mysqli_escape_string($koneksi,$_POST['telepon']);
	$facebook = $_POST['facebook'];
	$twitter = $_POST['twitter'];
	$instagram = $_POST['instagram'];
	$youtube = $_POST['youtube'];
	$deskripsi = mysqli_escape_string($koneksi,$_POST['deskripsi'];
	

	if ($nama_file != '') {
		$queryUpdate = "UPDATE tentang SET
						nama = '$nama',
						slogan = '$slogan',
						alamat = '$alamat',
						email = '$email',
						telepon = '$telepon',
						facebook = '$facebook',
						twitter = '$twitter',
						instagram = '$instagram',
						youtube = '$youtube',
						deskripsi = '$deskripsi',
						logo = 'images/$nama_file'
						WHERE id = 1
						";
		if (move_uploaded_file($lokasi_file, "$folder")) {
			mysqli_query($koneksi,$queryUpdate);
			echo "<script>
            alert('Berhasil diupdate');
            window.location.href='index';
            </script>";
            //header("location:tentang");
		}
	}
	else if ($nama_file == '') {
		$queryUpdate = "UPDATE tentang SET
						nama = '$nama',
						slogan = '$slogan',
						alamat = '$alamat',
						email = '$email',
						telepon = '$telepon',
						facebook = '$facebook',
						twitter = '$twitter',
						instagram = '$instagram',
						youtube = '$youtube',
						deskripsi = '$deskripsi'
						WHERE id = 1
						";
		mysqli_query($koneksi,$queryUpdate);
		echo "<script>
            alert('Berhasil diupdate');
            window.location.href='index';
            </script>";
            //header("location:tentang");
	}
	else{
		echo "error";
	}
	
?>