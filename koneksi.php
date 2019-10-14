<?php 

$koneksi = mysqli_connect("localhost","root","","ravelinotravel");

//$koneksi = mysqli_connect("localhost","u4502442_fegatravel","A(#mE[6%O,z1","u4502442_fegatravel");
 
// Check connection
if (mysqli_connect_errno()){
	echo "Koneksi database gagal : " . mysqli_connect_error();
}
?>