<?php
  // include "../control/connect.php";
  $month=date('m');
  // echo "bulan $month";
  $a=mysqli_query($con, "select * from menu,kategori_menu where menu.id_kategori_menu=kategori_menu.id_kategori_menu and kategori_menu.gerai='$gerai'");
  $no=0;
  $arr=array();
  while ($r=mysqli_fetch_assoc($a)) {
    $c=mysqli_fetch_array(mysqli_query($con, "SELECT count(id_menu) as count from orders where id_menu='$r[id_menu]' and month(dt)='$month' "));

    array_push($arr, array('label' => $r['name'], 'value' => $c['count'] ));


    $no++;
  }


 ?>
