<?php
include 'connect.php';
if ($_POST['password_lama']) {
  $password_lama  =md5($_POST['password_lama']);
  $password_baru  =md5($_POST['password_baru']);
  $confirm_password=md5($_POST['confirm_password']);
  $numb=mysqli_num_rows(mysqli_query($con, "select email,password from user where password='$password_lama' and email='$_POST[email]' "));
  if($numb > 0 ){
          if (!empty($password_baru) || $password_baru == $confirm_password) {
            mysqli_query($con, "update user set password='$confirm_password' where email='$_POST[email]'");
            echo "<br>";
            echo "<div class='alert alert-success alert-dismissible fade show font-weight-normal'>Password Berhasil Diubah</div>";
               echo " <script type='text/javascript'> window.location.href = './logout.html' </script>";
          }else {
            echo "<br>";
            echo "<div class='alert alert-warning alert-dismissible fade show font-weight-normal'>password baru tidak sama </div>";
          }

  }else{
    echo "<br>";
    echo "<div class='alert alert-danger alert-dismissible fade show font-weight-normal'>password lama yang anda masukan salah</div>";
  }
}else {
  exit();
}

 ?>
