<?php
error_reporting(0);
session_start();
include 'connect.php';
// var_dump($_POST);

if ($_POST['post'] == 'insert') {
  //
            if ($_POST['id_item'] != '' and  $_POST['satuan'] != '' and $_POST['id_menu'] !='' and $_POST['takaran'] != '' && $_POST['post'] == 'insert' ) {
            mysqli_query($con, "INSERT into hpp (kode_item, id_menu, qty,satuan) values ('$_POST[id_item]','$_POST[id_menu]','$_POST[takaran]','$_POST[satuan]')");

            echo "<script>window.location.href='./?page=data-hpp&id=$_POST[id_menu]&addrow=$_POST[id_item]'</script>";

            }
            else {
              echo "<i class='ti-hand-point-right text-danger'> masukan data dengan lengkap  </i>";
            }
  //
}elseif($_POST['post'] == 'update') {

  if ($_POST['id_item'] != '' and $_POST['satuan'] != '' and $_POST['id'] !='' and $_POST['takaran'] != '' && $_POST['post'] == 'update' ) {
    mysqli_query($con, "update hpp set kode_item ='$_POST[id_item]',
                                             qty ='$_POST[takaran]',
                                          satuan = '$_POST[satuan]'
                                    where id_hpp ='$_POST[id]'");

    echo "<i class='ti-hand-point-right text-success'> Updated </i> ";
    echo "<script>window.location.href='./?page=data-hpp&id=$_POST[id_menu]'</script>";
  }
  else  {
    echo "<i class=' ti-hand-point-right text-danger'> masukan data dengan lengkap </i>";
  }

}





 ?>
