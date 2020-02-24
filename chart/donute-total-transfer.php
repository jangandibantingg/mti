<?php
  // include "../control/connect.php";
  // $month=date('m');
  // echo "bulan $month";
  $id=$_GET['id'];
  $a=mysqli_query($con, "SELECT count(station_penerima) as totaltransfer, station_pengiriman,station_penerima, id_station from ima_data where id_station='$id' group by station_penerima");

  $arr=array();
  while ($r=mysqli_fetch_assoc($a)) {
    $total_transfer= $r['totaltransfer'];
     array_push($arr, array('label' => $r['station_penerima'], 'value' => $total_transfer ));

  }


 ?>
