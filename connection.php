<?php
$host = "localhost"; 
$user = "root"; 
$password = ""; 
$dbname = "cinema_db";

$con = mysqli_connect($host, $user, $password,$dbname);

if (!$con) {
  die("Connection failed: " . mysqli_connect_error());
}
?>  
<?php
 error_reporting(E_ALL);
 ini_set('display_errors',1);
 ?> 