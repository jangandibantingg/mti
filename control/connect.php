<?php
$server = "localhost";
$database = "ima";
$username = "root";
$password = "";



$con=mysqli_connect($server,$username,$password,$database);
// check connection
if (mysqli_connect_errno()) {
  exit('Connect failed: '. mysqli_connect_error());
}

// timezone
date_default_timezone_set('Asia/Jakarta');
$datetime=date('Y-m-d H:i:s');
$date=date('Y-m-d');
$jam=date('H:i"s');

?>
