
<?php
date_default_timezone_set('Asia/Jakarta');
include 'connect.php';
session_start();

$numb=mysqli_num_rows(mysqli_query($con, "select * from inv"));
$notgl=date('dmy');
$char = "$notgl";
$kode = $char . sprintf("%05s", $numb);
$gerai=$_SESSION['gerai'];
if(isset($_POST["place_order"]) || $_GET['proses'] ==  'place_order')
{
     $order_id = "";
     $_SESSION["order_id"] = $order_id;
     $order_details = "";
     foreach($_SESSION["shopping_cart"] as $keys => $values)
     {
          if($_GET['act'] == 'penjualan') {
            $transaksi='penjualan';
          }else{
            $transaksi='pembelian';
            $kode="";
          }
          $order_details .= "
          INSERT INTO orders(gerai,invoice,id_menu,transaksi,dt,kode_item, price, qty,username,date)
          VALUES('".$gerai."','".$kode."','".$values["product_id_menu"]."','".$transaksi."','".$date."', '".$values["product_id"]."', '".$values["product_price"]."', '".$values["product_quantity"]."','".$_SESSION['user_session']."','".$datetime."');
          ";
          // echo "$order_details";
     }

     if ($transaksi == 'penjualan' ) {
       mysqli_query($con, "insert into inv ( gerai,invoice, date, dt, amount,paid, metode ) values ('$gerai','$kode','$date','$datetime','$_SESSION[subtotal]','$_SESSION[pembayaran]','$_SESSION[metode]' )  ");
       mysqli_query($con, "update orders set cashier='Y', id='$_SESSION[id]' where cashier='N' and transaksi='penjualan' and username='$_SESSION[user_session]'");
     }




     if(mysqli_multi_query($con, $order_details))
     {
          unset($_SESSION["shopping_cart"]);
          echo "<script>window.location.href='../?page=$transaksi&act=success'</script>";
     }

}
?>
