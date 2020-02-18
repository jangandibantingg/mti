<?php
error_reporting(0);
session_start();
include 'connect.php';
// var_dump($_POST);

if ($_POST['post'] == 'insert') {
  //
            if ($_POST['nama_operational'] != '' and $_POST['jangka_waktu'] !='' and $_POST['amount'] != '' && $_POST['post'] == 'insert' ) {
            mysqli_query($con, "INSERT into operational (nama_operational, jangka_waktu, amount, keterangan, bank, norek, gerai, due_date) values ( '$_POST[nama_operational]','$_POST[jangka_waktu]','$_POST[amount]','$_POST[keterangan]','$_POST[bank]','$_POST[norek]','$_POST[gerai]','$_POST[due_date]') ");

              echo "<script>window.location.href='./operasional.aspx'</script>";

            }
            else {
              echo "<i class=' ti-hand-point-right text-danger'> masukan data dengan lengkap  </i>";
            }
  //
}elseif($_POST['post'] == 'update') {

  if ($_POST['nama_operational'] != '' and $_POST['jangka_waktu'] !='' and $_POST['amount'] != '' && $_POST['post'] == 'update' ) {
    mysqli_query($con, "update operational set nama_operational ='$_POST[nama_operational]',
                                                jangka_waktu    ='$_POST[jangka_waktu]',
                                                amount          ='$_POST[amount]',
                                                bank            ='$_POST[bank]',
                                                norek           ='$_POST[norek]',
                                                norek           ='$_POST[norek]',
                                                due_date        ='$_POST[due_date]'
                                                where id_operational='$_POST[id]' and gerai='$_POST[gerai]'");

    echo "<i class=' ti-hand-point-right text-success'> updated </i>";
    echo "<script>window.location.href='./operasional.aspx'</script>";
  }
  else  {
    echo "<i class=' ti-hand-point-right text-danger'> masukan data dengan lengkap -update</i>";
  }

}





 ?>
