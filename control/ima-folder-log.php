<?php
error_reporting(0);
include 'connect.php';




if(isset($_POST['namefile']))
{

 $namefile=$_POST['namefile'];

 mysqli_query($con, "update ima_log set link='$namefile' where id_log='1'");


 echo "<script type='text/javascript'> window.location.href = './pt-settings.aspx' </script>";
}


?>
