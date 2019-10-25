<?php
//no1
for($b=0; $b<=10;$b++){
	for($j=1;$j<=$b;$j++){
		echo"&nbsp.";
	}
	for($b1=10; $b1>$b; $b1--){
		echo"x";
	}
	for($b2=10; $b2>$b; $b2--){
		echo"x";
	}
	echo"<br>";
}
for( $a=10;$a>0;$a--){
	for($i=1; $i<=$a; $i++){
		echo "&nbsp.";
	}
	for($a1=10;$a1>$a; $a1--){
		echo"x";
	}
	for($a2=10;$a2>$a; $a2--){
		echo"x";
	}
	echo"<br>";
}

//no2

//inisialisasi angka yang mau dibandingkan
$a1 = 3;
$a2 = 5;
$a3 = 6;
$a4 = 1;

//cek apakah variabel a1 angka terbesar
if ($a1 > $a2 && $a1 > $a3 && $a1 > $a4) {
	echo $a1." merupakan angka terbesar";
}

//cek apakah variabel a2 angka terbesar
else if ($a2 > $a1 && $a2 > $a3 && $a2 > $a4) {
	echo $a2." merupakan angka terbesar";
}

//cek apakah variabel a3 angka terbesar
else if ($a3 > $a1 && $a3 > $a2 && $a3 > $a4) {
	echo $a3." merupakan angka terbesar";
}

//cek apakah variabel a4 angka terbesar
else if ($a4 > $a1 && $a4 > $a2 && $a4 > $a3) {
	echo $a4." merupakan angka terbesar";
}

?>