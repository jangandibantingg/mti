<?php


 ?>

<div class="row">
<div class="col-md-12">

      <div class="card">
                            <div class="card-body">
                              <small>
                              <table id="config-table" class="table display no-wrap">
                                <thead>
                                    <tr >
                                      <th>Transfer</th>
                                        <th>ID</th>
                                        <th>Station pengiriman</th>
                                        <th>Station Penerima</th>
                                        <th>Log Penerimaan</th>
                                        <th>Log Penerima</th>
                                        <th>Tanggal</th>
                                        <th>Status</th>


                                    </tr>
                                </thead>
                                <tbody>

<?php
$file_handle = fopen("file:///D:/maret/transfers.20191231.log", "rb");

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

    $station_pengiriman=str_replace("(".$id[0].")"," ",$part3[5]);
    $station_penerima=str_replace("(".$id2[0].")"," ",$part3[7]);

    if ($part3[5] != 'Clear (-1)' && $part2[3] != null ) {
      // code...

    echo "<tr>

          <td>$part2[3]</td>
          <td>$id[0] </td>
          <td>$station_pengiriman</td>
          <td>$station_penerima</td>
          <td>$part3[9]</td>
          <td>$logdatepenerima[0]</td>
          <td>$tanggalpenerima</td>
          <td>$part3[1]</td>

          </tr>";
        }
}
fclose($file_handle);
?>
</tbody>
</table>
</small>
</div>
</div>
</div>
</div>
