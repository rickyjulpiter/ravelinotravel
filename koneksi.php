<?php 

$koneksi = mysqli_connect("localhost","root","","ravelinotravel");
//$koneksi = mysqli_connect("localhost","u4502442_ravelinotravel","HB1~LE#fJhN@","u4502442_ravelinotravel");
 
// Check connection
if (mysqli_connect_errno()){
	echo "Koneksi database gagal : " . mysqli_connect_error();
}
?>