<?php
// error_reporting(0);
// include '../control/connect.php';
// include '../control/function.php';
  $id=$_GET['id'];
  $arr_station=array();
  $a=mysqli_query($con, "SELECT count(station_penerima) as totaltransfer, station_pengiriman,station_penerima, id_station from ima_data where id_station='$id' group by station_penerima  ");
    while ($r=mysqli_fetch_array($a)) {

     array_push($arr_station, array('y' => $r['station_penerima'], 'Total Transfer' => $r['totaltransfer']  ));
  }



 ?>
