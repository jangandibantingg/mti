<?php
error_reporting(0);
session_start();
// var_dump($_POST);

$total=$_GET['cash'] - $_GET['total'];
$_SESSION['subtotal']  =$_GET['total'];
$_SESSION['pembayaran']  =$_GET['cash'];
$_SESSION['kembalian'] = $total;
$_SESSION['metode'] = $_GET['metode'];
$_SESSION['gerai'] = $_GET['gerai'];
if ($_POST['id'] == '') {
  $_SESSION['id']=$_SESSION['user_session'];
}else {
  $_SESSION['id']=$_POST['id'];
}

echo "<script>window.location.href='./simpan-belanja.php?proses=place_order&act=penjualan'</script>";

?>
