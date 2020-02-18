<?php


include 'connect.php';


if(isset($_POST['delete_row']))
{
 $row_no=$_POST['row_id'];
 mysqli_query($con,"DELETE FROM inv WHERE invoice='$row_no'");
 mysqli_query($con,"DELETE FROM orders WHERE invoice='$row_no'");
 echo "success";
 exit();
}

?>
