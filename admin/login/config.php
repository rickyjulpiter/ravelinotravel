 <?php 
// DB credentials.

define('DB_HOST','localhost');
define('DB_USER','root');
define('DB_PASS','');
define('DB_NAME','ravelinotravel');

// Establish database connection.
/*
// DB credentials Server.
define('DB_HOST','localhost');
define('DB_USER','u4502442_ravelinotravel');
define('DB_PASS','HB1~LE#fJhN@');
define('DB_NAME','u4502442_ravelinotravel');
*/
// Establish database connection.

// $koneksi = mysqli_connect("localhost","u4502442_ravelinotravel","HB1~LE#fJhN@","u4502442_ravelinotravel");
try
{
$dbh = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME,DB_USER, DB_PASS,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));
}
catch (PDOException $e)
{
exit("Error: " . $e->getMessage());
}
?> 