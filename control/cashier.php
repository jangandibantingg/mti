<?php
error_reporting(0);
session_start();
// var_dump($_POST);
if ($_POST['cash']) {
$total=$_POST['cash'] - $_POST['total'];
$_SESSION['subtotal']  =$_POST['total'];
$_SESSION['pembayaran']  =$_POST['cash'];
$_SESSION['kembalian'] = $total;
$_SESSION['metode'] = $_POST['metode'];
$_SESSION['gerai'] = $_POST['gerai'];
if ($_POST['id'] == '') {
  $_SESSION['id']=$_SESSION['user_session'];
}else {
  $_SESSION['id']=$_POST['id'];
}



if($total < 0){
 echo "<div class='alert alert-danger alert-dismissible text-center'><i class='ti-face-sad'></i><span class='font-weight-bold'> Tidak dapat diproses, karena nilai cash kurang dari subtotal belanja </span></div>";
}else {
  echo "<p><div class='alert alert-info  alert-rounded text-center'><span class='font-weight-bold'>Kembali Rp. ".number_format($_SESSION['kembalian'] )."</span></div></p>";
  echo "<p><div class='alert alert-rounded text-center'>



          <form method='post' action='control/simpan-belanja.php?act=penjualan'>
              <input type='hidden' name='place_order' class='btn btn-outline-info' value='save' />
              <button type='submit' class='btn btn-info'> <i class='ti-save-alt'></i> Save </button>

          </form>

        </div></p>";

?>



<?php
}
}elseif($total == 0) {
echo "<p><div class='alert alert-danger alert-dismissible text-center'>Please Complete Form Payment </div></p>";
}

?>
