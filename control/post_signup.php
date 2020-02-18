<?php
     require_once "db.php";
     require_once "User.php";
     $user = new User($db);
     $email     = $_POST['email'];
     $nama      = $_POST['nama'];
     $password  = $_POST['password'];

     if(isset($email) && isset($nama) && isset($password)   ){

         if($user->register($email,$nama,$password)){
             $true = $user->getLasttrue();
         }else{
             $error = $user->getLastError();
         }
     }else{
       echo "<div class='alert alert-danger alert-dismissible'>please Complete form registration </div>";
     }

     if(isset($error)){
         echo "<div class='alert alert-danger alert-dismissible'>$error</div>";
     }elseif(isset($true)) {
         echo "<div class='alert alert-success alert-dismissible'>$true<div>";
     }
  ?>
