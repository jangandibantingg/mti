<?php
  // include "../control/connect.php";
  // $month=date('m');
  // echo "bulan $month";
  $a=mysqli_query($con, "SELECT nama_station, id_station from ima_station");

  $arr=array();
  while ($r=mysqli_fetch_assoc($a)) {
    $total_transfer=totaltransfer($con, $r['id_station']);
     array_push($arr, array('label' => $r['nama_station'], 'value' => $total_transfer ));

  }


 ?>
