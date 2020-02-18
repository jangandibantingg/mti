<?php
error_reporting(0);
include 'connect.php';

if(isset($_POST['edit_row']))
{
 $row=$_POST['row_id'];
 $kredit=$_POST['kredit'];
 $keterangan=$_POST['keterangan'];


 mysqli_query($con, "update arus_khas set keterangan='$keterangan', kredit='$kredit' where id_arus_khas='$row'");
 echo "success";
 exit();
}



if(isset($_POST['edit_saldo']))
{
 $row=$_POST['row_id'];
 $saldo_awal=$_POST['saldo_awal'];
 $saldo_akhir=$_POST['saldo_akhir'];


 mysqli_query($con, "update saldo set saldo_awal='$saldo_awal', saldo_akhir='$saldo_akhir' where id_saldo='$row'");
 echo "success";
 exit();
}
if(isset($_POST['edit_penjualan']))
{
 $row=$_POST['row_id'];
 $metode=$_POST['metode'];
 mysqli_query($con, "update inv set metode='$metode'  where id_inv='$row'");
 echo "success";
 exit();
}


// ====================
if(isset($_POST['delete_row']))
{
 $row_no=$_POST['row_id'];
 mysqli_query($con,"delete from kategori_menu where id_kategori_menu='$row_no'");
 echo "success";
 exit();
}

if(isset($_POST['delete_menu']))
{
 $row_no=$_POST['row_id'];
 mysqli_query($con,"delete from menu where id_menu='$row_no'");
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
