<?php
// error_reporting(0);
// include '../control/connect.php';
// include '../control/function.php';
  $arr_station=array();
  $a=mysqli_query($con, "SELECT * from ima_station  ");
    while ($r=mysqli_fetch_array($a)) {
      $Aborted=cekstatus($con,'Aborted',$r['id_station']);
      $Complete=cekstatus($con,'Complete',$r['id_station']);
      $Cancelled=cekstatus($con,'Cancelled',$r['id_station']);
     array_push($arr_station, array('y' => $r['nama_station'], 'Aborted' => $Aborted, 'Complete' => $Complete, 'Cancelled' => $Cancelled  ));
  }



 ?>
