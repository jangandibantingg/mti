<?php
// error_reporting(0);
// include '../control/connect.php';
// include '../control/function.php';
  $id=$_GET['id'];
  $arr_station=array();
  $a=mysqli_query($con, "SELECT count(station_penerima) as totaltransfer, station_pengiriman,station_penerima, id_station from ima_data where id_station='$id' and tanggal between '$from' and '$until' group by station_penerima  ");
    while ($r=mysqli_fetch_array($a)) {
    $Penerimaan=totalpenerimaanstation($con,$r['station_penerima'],$r['station_pengiriman'],$from,$until);
     array_push($arr_station, array('y' => $r['station_penerima'], 'Total Pengiriman' => $r['totaltransfer'], 'Total Penerimaan' => $Penerimaan  ));

  }



  $arr_dashboard=array();
  $b=mysqli_query($con, "SELECT count(station_pengiriman) as totaltransfer, station_pengiriman,station_penerima, id_station from ima_data  where tanggal between '$from' and '$until' group by station_pengiriman  ");
    while ($r=mysqli_fetch_array($b)) {
      $totalpenerimaan=totalpenerimaan($con,$r['station_pengiriman'],$from,$until );

     array_push($arr_dashboard, array('station' => $r['station_pengiriman'], 'Total Pengiriman' => $r['totaltransfer'], 'Total Penerimaan' => $totalpenerimaan ));
  }

 ?>
