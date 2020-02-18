<?php
error_reporting(0);
session_start();
include 'connect.php';
// var_dump($_POST);
if ($_POST['shift'] != '' and $_POST['saldo_awal'] !='' and $_POST['proses'] == 'insert' ) {
  mysqli_query($con, "insert saldo (date,saldo_awal,saldo_akhir,shift,gerai) values ('$date','$_POST[saldo_awal]','$POST[saldo_akhir]','$_POST[shift]','$_POST[gerai]') ");
  echo "<i class=' ti-hand-point-right text-success'> data berhasil diimput </i>";
  echo "<script>window.location.href='./penjualan.aspx'</script>";

}
elseif ( $_POST['proses'] == 'insert' ) {
  echo "<i class=' ti-hand-point-right text-danger'> masukan data dengan lengkap  </i>";
}

if ($_POST['saldo_akhir'] !='' and $_POST['proses'] == 'update' ) {
  mysqli_query($con, "update saldo set saldo_akhir='$_POST[saldo_akhir]', status='close', setoran='$_POST[setoran]', kasir='$_POST[kasir]', biaya_lain='$_POST[biaya_lain]' where date='$date' and status='open' and gerai='$_POST[gerai]'  ");
  mysqli_query($con, "update inv set operator='close' where date='$date' and operator='open' and gerai='$_POST[gerai]' ");
  mysqli_query($con, "update arus_khas set operator='close' where dt='$date' and operator='open' and gerai='$_POST[gerai]' ");
  echo "<i class=' ti-hand-point-right text-success'> data berhasil diimput </i>";
  echo "<script>window.location.href='./penjualan.aspx'</script>";
  // echo "update saldo set saldo_akhir='$_POST[saldo_akhir]', status='close' where date='$date' and status='open' and gerai='$_POST[gerai]'";
  // var_dump($_POST);
}
elseif( $_POST['proses'] == 'update' )  {
  echo "<i class=' ti-hand-point-right text-danger'> masukan data dengan lengkap </i>";
}

?>
