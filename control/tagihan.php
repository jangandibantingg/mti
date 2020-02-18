<?php
error_reporting(0);
session_start();
include 'connect.php';
// var_dump($_POST);

if ($_POST['post'] == 'insert') {
  //
            if ($_POST['nama_tagihan'] != '' and $_POST['jangka_waktu'] !='' and $_POST['amount'] != '' && $_POST['post'] == 'insert' ) {
            mysqli_query($con, "INSERT into tagihan (nama_tagihan, jangka_waktu, amount, keterangan,gerai) values ( '$_POST[nama_tagihan]','$_POST[jangka_waktu]','$_POST[amount]','$_POST[keterangan]','$_POST[gerai]') ");

              echo "<script>window.location.href='./tagihan.aspx'</script>";

            }
            else {
              echo "<i class=' ti-hand-point-right text-danger'> masukan data dengan lengkap  </i>";
            }
  //
}elseif($_POST['post'] == 'update') {

  if ($_POST['nama_tagihan'] != '' and $_POST['jangka_waktu'] !='' and $_POST['amount'] != '' && $_POST['post'] == 'update' ) {
    mysqli_query($con, "update tagihan set nama_tagihan ='$_POST[nama_tagihan]',
                                                jangka_waktu    ='$_POST[jangka_waktu]',
                                                amount          ='$_POST[amount]',
                                                bank            ='$_POST[bank]',
                                                norek           ='$_POST[norek]',
                                                keterangan      ='$_POST[keterangan]'
                                                where id_tagihan='$_POST[id]' and gerai='$_POST[gerai]'");

    echo "<i class=' ti-hand-point-right text-success'> updated </i>";
    echo "<script>window.location.href='./tagihan.aspx'</script>";
  }
  else  {
    echo "<i class=' ti-hand-point-right text-danger'> masukan data dengan lengkap </i>";
  }

}





 ?>
