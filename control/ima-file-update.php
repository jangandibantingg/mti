<?php

error_reporting(1);
include 'connect.php';
if ($_POST['search']) {

$filename = $_POST['search'];
$file_handle = fopen("file:///$filename", "rb");

while (!feof($file_handle) ) {
    $line_of_text = fgets($file_handle);

    $part2 = explode('|', $line_of_text); //mencari  id transfer

    $part3 = explode('"', $line_of_text); //mencari station Penerima

    $idstart = explode('(', $part3[5]);

    $id = explode(')',$idstart[1]); // id station Penerimaan

    $idpenerimaan=explode(' (', $part3[7]);

    $id2=explode(')',$idpenerimaan[1]); // id station Penerima

    $logdatepenerima=explode(' ',$part3[11]);

    $tp =" $logdatepenerima[2] $logdatepenerima[3] $logdatepenerima[4] "; //tanggal penerima
    $tanggalpenerima=date('Y/m/d', strtotime($tp));

    $station_penerima=str_replace("(".$id[0].")"," ",$part3[5]);
    $station_penerimaan=str_replace("(".$id2[0].")"," ",$part3[7]);

    if ($part3[5] != 'Clear (-1)' && $part2[3] != null ) {
      // code...

      mysqli_query($con,
      " INSERT INTO ima_data (filename, transfer, station_penerimaan, station_penerima, log_penerimaan, log_penerima, tanggal, status, id_station)
            VALUES ('$filename','$part2[3]', '$station_penerimaan', '$station_penerima', '$part3[9]', '$logdatepenerima[0]', '$tanggalpenerima', '$part3[1]','$id[0]')");


        }
}

fclose($file_handle);



// ==================================================================================
mysqli_query($con, "insert into ima_file  (filename,date) values ('$filename','$date')");

echo "<script type='text/javascript'> window.location.href = './pt-settings.aspx' </script>";

// code...
}else {
  echo "no data";
}
 ?>
