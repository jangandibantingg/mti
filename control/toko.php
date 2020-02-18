<?php
     date_default_timezone_set('Asia/Jakarta');

     include 'connect.php';

     if($_POST['nama_toko'] != '' && $_POST['id'] !='' && $_POST['alamat'] !='' ){
         $nama_toko    = $_POST['nama_toko'];
         $id   = $_POST['id'];
         $alamat  = $_POST['alamat'];


         mysqli_query($con, "insert into toko (nama_toko, alamat, id)
         values ('$nama_toko','$alamat','$id') ");
         echo "<div class='alert alert-success alert-dismissible'> data berhasil dimasukan  </div>";
         echo " <script type='text/javascript'> window.location.href = './toko.aspx' </script>";

     }else{
        echo "<div class='alert alert-danger alert-dismissible'>masukan data dengan lengkap  $_POST[id] </div>";


     }


  ?>
