<?php
include '../control/connect.php';
include '../control/function.php';
$from= $_GET['from'];
$until= $_GET['until'];
$p=mysqli_query($con, "SELECT count(station_penerima) as total, station_pengiriman,station_penerima, id_station from ima_data where id_station='$_GET[id]' and tanggal between '$from' and '$until' group by station_penerima  ");
$q=mysqli_fetch_array(mysqli_query($con, "select nama_station from ima_station where id_station='$_GET[id]'"));

 ?>
<html>
<head>
	<title> PT MITRA TEKNOLOGI IMA</title>
</head>
<body>
	<style type="text/css">
	body{
		font-family: sans-serif;
	}
	table{
		margin: 20px auto;
		border-collapse: collapse;
	}
	table th,
	table td{
		border: 1px solid #3c3c3c;
		padding: 3px 8px;

	}
	a{
		background: blue;
		color: #fff;
		padding: 8px 10px;
		text-decoration: none;
		border-radius: 2px;
	}
	</style>

	<?php
	header("Content-type: application/vnd-ms-excel");
	header("Content-Disposition: attachment; filename=nama-station$from-$until.xls");
	?>

  <center>
    <h3 class="text-center font-weight-bold"> PT MITRA TEKNOLOGI IMA</h3>
    <H4 class="text-center font-weight-normal"> HASIL LAPORAN DATA STATION PENGIRIM DAN PENERIMAAN  PEMELIHARAAN PTS RSKD</h4>
      <h5 class="text-center font-weight-bold"><?php echo "".namastation($con, $_GET['id']).""; ?></h5>
      
      <?php
      if (!empty($from)) {
        echo '<H5 class="text-center font-weight-normal"> '.tanggal_indo($from).' / '.tanggal_indo($from).' </h5>';
      }else{
        echo '<H5 class="text-center font-weight-normal"> '.tanggal_indo($date).' </h5>';
      }
       ?>
  </center>

  <table class="table table-striped">
    <thead>
        <tr >


            <th>ID</th>
            <th>Station pengiriman</th>
            <th>Total</th>
            <th>Station Penerimaan</th>
            <th>Total</th>
            <th>Complete</th>
            <th>Canceled</th>
            <th>Aborted</th>


        </tr>
    </thead>
      <tbody>
        <?php

           while ($r=mysqli_fetch_array($p)) {
            $station_penerima=$r['station_penerima'];
         ?>
         <?php

              echo "<tr>


               <td>$r[id_station]</td>
               <td>$r[station_pengiriman] <i class='ti-arrow-right'></i> $station_penerima</td>
               <td align='right'>".number_format($r['total'])."</td>
               <td>$station_penerima <i class='ti-arrow-right'></i> $r[station_pengiriman]</td>
               <td align='right'>".number_format(totalpenerimaanstation($con,$station_penerima,$r['station_pengiriman'],$from,$until))."</td>
               <td align='right'>".number_format(status_station($con,'Complete',$r['id_station'],$station_penerima,$from,$until ))."</td>
               <td align='right'>".number_format(status_station($con,'Cancelled',$r['id_station'],$station_penerima,$from,$until ))."</td>
               <td align='right'>".number_format(status_station($con,'Aborted',$r['id_station'],$station_penerima,$from,$until ))."</td>


               </tr>";

            }
            ?>


      </tbody>

  </table>
</body>
</html>
