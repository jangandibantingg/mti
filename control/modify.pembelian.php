<?php

session_start();
include 'connect.php';

if(isset($_POST['edit_row']))
{
 $row=$_POST['row_id'];
 $qty=$_POST['qty'];


 mysqli_query($con, "update orders set qty='$qty' where id_order='$row'");
 // echo "update orders set qty='$qty' where id_order='$row'";
 echo "success";
 exit();
}

if(isset($_POST['checklist']))
{
  $row                 =$_POST['row_id'];
  $debit               =0;
  $kredit              =$_POST['sub'];
  $gerai               =$_SESSION['gerai'];
  $keterangan          ="order <b>$_POST[name] x$_POST[qty] ($_POST[satuan])</b> @".number_format($_POST['price'])." dari $_POST[suplier]";
  $id_subkategori_khas ="12"; //biaya produksi


  mysqli_query($con, "insert into arus_khas (gerai,debit,kredit,keterangan,id_subkategori_khas,dt,orders,operator,dtime) values ('$gerai','$debit','$kredit','$keterangan','$id_subkategori_khas','$date','Y','close','$datetime')");
  mysqli_query($con, "update orders set clear='Y' where id_order='$row' ");

 echo "success";
 exit();
}

if(isset($_POST['delete_row']))
{
 $row_no=$_POST['row_id'];
 mysqli_query($con,"delete from orders where id_order='$row_no'");
 echo "success";
 exit();
}


?>
