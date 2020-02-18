<?php
     date_default_timezone_set('Asia/Jakarta');

     include 'connect.php';
     $nama    = $_POST['nama'];
     $email   = $_POST['email'];
     $level   = $_POST['level'];
     $id_plan   = $_POST['id_plan'];
     $gerai      = $_POST['gerai'];
     $sponsoring  = $_POST['sponsoring'];
     $rd      = $date;
     $password = md5("1234");

     $numbemail=mysqli_num_rows(mysqli_query($con, "select email from user where email='$email'"));


     if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
       $email_valid = false;
       $valid_email_konfirm_msg = "Format email salah.<br>";
       echo "<div class='alert alert-warning alert-dismissible'>$valid_email_konfirm_msg</div>";
     }elseif($numbemail > 0){
       $valid_email_konfirm_msg = "email sudah terdaftar.<br>";
       echo "<div class='alert alert-warning alert-dismissible'>$valid_email_konfirm_msg</div>";
     }elseif($_POST['nama'] != '' && $_POST['email'] !='' && $_POST['level'] !=''   ){

        // Kode cek username hanya boleh huruf a-z dan A-Z
        // if(!preg_match("/^[a-zA-Z]*$/",$username)){
        //   $username_valid = false;
        //   $username_valid_msg = "Hanya huruf yang diijinkan, dan tidak boleh menggunakan spasi.<br>";
        // }

        // Kode validasi nama hanya boleh huruf a-z, A-Z, dan spasi
        // if(!preg_match("/^[a-zA-Z ]*$/",$nama)){
        //   $name_valid = false;
        //   $name_valid_msg = "Hanya huruf dan spasi yang diijinkan.<br>";
        // }

        // Cek minimal karakter password (minimal 8 digit)
        // if(strlen($pass) <= 8){
        //   $valid_panjang_pass = false;
        //   $valid_panjang_pass_msg = "Password minimal 8 digit.<br>";
        //   echo "<div class='alert alert-danger alert-dismissible'>$valid_panjang_pass_msg</div>";
        // }

        // cek konfirmasi password sama atau tidak
        // if($pass != $pass_komfrim){
        //   $valid_pass_konfirm = false;
        //   $valid_pass_konfirm_msg = "Password konfirmasi tidak sama.<br>";
        // }

         $numb=mysqli_num_rows(mysqli_query($con, "select id from user"));
         $char = "ID";
         $kode = $char . sprintf("%07s", $numb);

         mysqli_query($con, "insert into user (gerai, nama, email, level, rd, password, sponsoring,id,id_plan)
         values ('$gerai','$nama','$email','$level','$rd','$password','$sponsoring','$kode','$id_plan') ");
         echo "<div class='alert alert-success alert-dismissible'> data berhasil dimasukan  </div>";
         echo " <script type='text/javascript'> window.location.href = './karyawan.aspx' </script>";

     }else{
        echo "<div class='alert alert-warning alert-dismissible'>masukan data dengan lengkap</div>";


     }


  ?>
