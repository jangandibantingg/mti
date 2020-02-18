<?php

// error_reporting(0);
include 'connect.php';

if(isset($_POST['edit_row']))
{
  // var_dump($_POST);
 $row   =$_POST['row_id'];
 $nama  =$_POST['nama'];
 $email=$_POST['email'];
 $alamat=$_POST['alamat'];
 $no_hp=$_POST['no_hp'];





 mysqli_query($con, "update user set nama='$nama', email='$email', alamat='$alamat', no_hp='$no_hp' where id_user='$row' ");

 echo "success";
 exit();
}

if(isset($_POST['delete_row']))
{
 $row_no=$_POST['row_id'];
 mysqli_query($con,"DELETE from toko where id_toko='$row_no'");
 echo "success";
 exit();
}

if(isset($_POST['insert_row']))
{
 $name=$_POST['name_val'];
 $age=$_POST['age_val'];
 mysqli_query($con,"insert into user_detail values('','$name','$age')");
 echo mysql_insert_id();
 exit();
}
?>
