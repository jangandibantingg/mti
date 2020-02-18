<?php
     date_default_timezone_set('Asia/Jakarta');

     include 'connect.php';

     if($_POST['date'] != '' && $_POST['pengeluaran'] !='' && $_POST['id_kategori_khas'] !='' && $_POST['keterangan'] !=''  ){
         $pengeluran    = $_POST['pengeluaran'];
         $id_kategori_khas  = $_POST['id_kategori_khas'];
         $dt=$_POST['date'];
         $keterangan=$_POST['keterangan'];
         $gerai=$_POST['gerai'];
         mysqli_query($con, "insert into arus_khas (kredit, id_subkategori_khas, keterangan, dt, dtime,gerai) values ('$pengeluran','$id_kategori_khas','$keterangan','$dt','$datetime','$gerai') ");
         echo "<div class='alert alert-success alert-dismissible'> data berhasil dimasukan  </div>";
         echo " <script type='text/javascript'> window.location.href = './$_POST[location].aspx' </script>";

     }else{
        echo "<div class='alert alert-danger alert-dismissible'>masukan data dengan lengkap</div>";
     }


  ?>
