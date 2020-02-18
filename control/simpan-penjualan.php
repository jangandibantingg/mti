<?php
session_start();
$act=$_GET['pros'];
include 'connect.php';
$numb=mysqli_num_rows(mysqli_query($con, "select * from inv"));
$notgl=date('dmy');
$char = "invoice$notgl";
$kode = $char . sprintf("%05s", $numb);

if ($act == 'penjualan') {

  mysqli_query($con, "insert into inv ( invoice, date, dt, amount, metode ) values ('$kode','$date','$datetime','$_POST[total]','cash' )  ");
  mysqli_query($con, "update orders set cashier='Y', id='$_SESSION[id]' where cashier='N' and transaksi='penjualan' and username='$_SESSION[user_session]'");
  echo "<script>window.location.href='../?page=$act'</script>";


}

 ?>
