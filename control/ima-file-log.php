<?php
error_reporting(0);
set_time_limit(120);
include 'connect.php';
include 'function.php';
$row=1;
$log = $_POST['log'];
if ($_POST['log'])
{


    $dirlist = getFileList("$log");
    foreach ($dirlist as $file)
    {

        $filename = $file['name'];
        // ganti namafile Ruang Isolasi LT.5'
        if($filename == 'Ruang Isolasi LT.5' ){
          $filename = "RIM LT.5";
        }


        $a = mysqli_query($con, "SELECT filename from ima_file where filename='$filename'");
        if (!$a || mysqli_num_rows($a) == 0)
        {

            $file_handle = fopen("file:///$log/$filename", "rb");

            while (!feof($file_handle))
            {
                $line_of_text = fgets($file_handle);

                $part2 = explode('|', $line_of_text); //mencari  id transfer
                $part3 = explode('"', $line_of_text); //mencari station Penerima
                $idstart = explode('(', $part3[5]);

                $id = explode(')', $idstart[1]); // id station Penerimaan
                $idpenerimaan = explode(' (', $part3[7]);

                $id2 = explode(')', $idpenerimaan[1]); // id station Penerima
                $logdatepenerima = explode(' ', $part3[11]);

                $tp = " $logdatepenerima[2] $logdatepenerima[3] $logdatepenerima[4] "; //tanggal penerima
                $tanggalpenerima = date('Y/m/d', strtotime($tp));

                $station_pengiriman=str_replace("(".$id[0].")"," ",$part3[5]);
                $station_penerima=str_replace("(".$id2[0].")"," ",$part3[7]);

                if ($part3[5] != 'Clear (-1)' && $part2[3] != null)
                {
                    // code...
                    mysqli_query($con, " INSERT INTO ima_data (filename, transfer, station_pengiriman, station_penerima, log_penerimaan, log_penerima, tanggal, status, id_station)
            VALUES ('$filename','$part2[3]', '$station_pengiriman', '$station_penerima', '$part3[9]', '$logdatepenerima[0]', '$tanggalpenerima', '$part3[1]','$id[0]')");
            // console.log("Message here");


                }

            }

            echo ' <script type="text/javascript"> $.notify("Access granted", "success"); </script>';
        }
        mysqli_query($con, "insert into ima_file  (filename,date) values ('$filename','$date')");
        
        fclose($filename);
        $row++;

    }
    // echo "jumlah log terupdate $row log";
    echo "<script type='text/javascript'> window.location.href = './pt-settings.aspx' </script>";
}
elseif ($_POST['station']) {
  $a=mysqli_query($con, "	SELECT id_station, station_pengiriman from ima_data group by id_station ");
  while ($r=mysqli_fetch_array($a)) {
    $b=mysqli_num_rows(mysqli_query($con, "select * from ima_station where id_station='$r[id_station]' "));
    if (empty($b)) {
        mysqli_query($con, "INSERT into ima_station (id_station, nama_station) values ('$r[id_station]','$r[station_pengiriman]')" );
        $no=1;
    }else{
       $no=2;
    }

  }
  if ($no == 1) {
    echo ' <script type="text/javascript"> $.notify("update berhasil", "success"); </script>';

  }else{
    echo ' <script type="text/javascript"> $.notify("semua data station sudah terupdate", "success"); </script>';

  }
}
else
{
    echo "no data";
}


?>
