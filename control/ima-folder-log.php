<?php
error_reporting(0);
include 'connect.php';



var_dump($_POST['namefile']);

if(isset($_POST['namefile']))
{

 $namefile=$_POST['namefile'];

 mysqli_query($con, "update ima_log set link='$namefile' where id_log='1'");
 echo "update ima_log set link='$namefile' where id_log='1'";
 exit();
}


?>
