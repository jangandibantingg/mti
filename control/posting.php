
<?php

include 'connect.php';
include 'function.php';
session_start();
// var_dump($_POST);

if(isset($_POST['dana']))
{
$gerai=$_POST['gerai'];
$page =$_POST['page'];
$from=tanggal_indo($_POST['from']);
$until=tanggal_indo($_POST['until']);
$dana =$_POST['dana'];
$transaksi=$_GET['act'];
$keterangan = "<span>transaksi $transaksi periode $from s/d $until  </span>";
if($transaksi == 'pembelian' ){
   $kredit=$dana;
   $debit =0;
   $id_subkategori_khas='12';
}else{
  $kredit=0;
  $debit =$dana;
  $id_subkategori_khas='11';

}

 mysqli_query($con, "insert into arus_khas (debit,kredit,keterangan,id_subkategori_khas,dt,orders,operator,gerai) values ('$debit','$kredit','$keterangan','$id_subkategori_khas','$date','Y','close','$gerai')");
 mysqli_query($con, "update orders set clear='Y' where dt between '$from' and '$until' ");
 header('location:../khas.aspx');

}




 ?>
