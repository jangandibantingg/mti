<?php


include 'connect.php';

if(isset($_POST['edit_row']))
{
 $row   =$_POST['row_id'];
 $date  =$_POST['date'];
 $kredit=$_POST['kredit'];
 $keterangan=$_POST['keterangan'];





 mysqli_query($con, "update arus_khas set dt='$date', kredit='$kredit', keterangan='$keterangan' where id_arus_khas='$row' ");
 echo "success";
 exit();
}

if(isset($_POST['delete_row']))
{
 $row_no=$_POST['row_id'];
 mysqli_query($con,"DELETE FROM arus_khas WHERE id_arus_khas='$row_no'");
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
