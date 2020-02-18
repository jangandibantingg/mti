<?php
session_start();
// var_dump($_POST);
if ($_POST['cash']) {
$total=$_POST['cash'] - $_POST['total'];
$_SESSION['subtotal']  =$_POST['total'];
$_SESSION['pembayaran']  =$_POST['cash'];
$_SESSION['kembalian'] = $total;


if($total < 0){
 echo "<div class='alert alert-danger alert-dismissible text-center'><i class='ti-face-sad'></i> Tidak dapat diproses, karena nilai cash kurang dari subtotal belanja </div>";
}else {
  echo "<p><div class='alert alert-success  alert-rounded text-center'><h2>Kembali  ".number_format($_SESSION['kembalian'] )."</h2></div></p>";
  echo "<p><div class='alert alert-rounded text-center'>

          <a href='my.bluetoothprint.scheme://http://backoffice.codercoffee.id/json.php' class='btn btn-outline-primary' id='cetakstruk'><i id='cetakstruk' class='fa fa-print'></i> Cetak Struk</a>
          <hr>
          <form method='post' action='control/simpan-penjualan.php?pros=penjualan'>
               <input type='hidden' name='place_order' class='btn btn-outline-info text-info' value='Place Order' />
               <button class='btn btn-outline-info' '><i class='fa fa-save'></i> Save</button>

          </form>
        </div></p>";

?>



<?php
}
}elseif($total == 0) {
echo "<p><div class='alert alert-danger alert-dismissible text-center'>Please Complete Form Payment </div></p>";
}

?>
