<?php
// error_reporting(0);
// include '../control/connect.php';
// include '../control/function.php';
  $id=$_GET['id'];
  $arr_station=array();
  $a=mysqli_query($con, "SELECT count(station_penerima) as totaltransfer, station_pengiriman,station_penerima, id_station from ima_data where id_station='$id' group by station_penerima  ");
    while ($r=mysqli_fetch_array($a)) {

     array_push($arr_station, array('y' => $r['station_penerima'], 'Total Pengiriman' => $r['totaltransfer'], 'Total Penerimaan' => 299  ));

  }



  $arr_dashboard=array();
  $b=mysqli_query($con, "SELECT count(station_penerima) as totaltransfer, station_pengiriman,station_penerima, id_station from ima_data  group by station_penerima  ");
    while ($r=mysqli_fetch_array($b)) {
      $canceled=cekstatus($con,'Cancelled',$r['id_station'] );
      $aborted=cekstatus($con,'Aborted',$r['id_station'] );
      $complete=cekstatus($con,'Complete',$r['id_station'] );
     array_push($arr_dashboard, array('y' => $r['station_penerima'], 'Cancelled' => $canceled, 'Aborted' => $aborted, 'Complete' => $complete ));
  }

 ?>
