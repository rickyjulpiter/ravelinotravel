 <?php 
 include '../../koneksi.php';
// DB credentials.

define('DB_HOST',$usr_name);
define('DB_USER',$user);
define('DB_PASS',$password);
define('DB_NAME',$dbname);

// Establish database connection.
/*
// DB credentials Server.
define('DB_HOST','localhost');
define('DB_USER','u4502442_ravelinotravel');
define('DB_PASS','HB1~LE#fJhN@');
define('DB_NAME','u4502442_ravelinotravel');
*/
// Establish database connection.

try{
	$dbh = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME,DB_USER, DB_PASS,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));
}
catch (PDOException $e){
	exit("Error: " . $e->getMessage());
}

?> 