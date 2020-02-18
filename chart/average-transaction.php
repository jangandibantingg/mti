<?php
// error_reporting(0);
// include '../control/connect.php';
// include '../control/function.php';
  $arr_transaction=array();
for ($i=30; $i >= 1 ; $i--)  {
     $h=mktime(0, 0, 0, date("m"), date("d")-$i, date("Y"));
     $period=tanggal_indo(date('d M', $h));
     $transaction=transactiontoday($con,date('Y-m-d', $h),$gerai);

     // if ($transaction != 0) {
       array_push($arr_transaction, array('y' => $period, 'transaction' => $transaction ));
     // }



  }


 ?>
