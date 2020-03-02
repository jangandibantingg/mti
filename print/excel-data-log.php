<?php
include '../control/connect.php';
include '../control/function.php';
$from= $_GET['from'];
$until= $_GET['until'];

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
	header("Content-Disposition: attachment; filename=datalog-$until.xls");
	?>

  <center>
    <h3 class="text-center font-weight-bold"> PT MITRA TEKNOLOGI IMA</h3>
    <H4 class="text-center font-weight-normal"> REKAPITULASI HASIL LAPORAN PEMELIHARAAN PTS RSKD</h4>

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
      <tr>

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

     if (empty($_GET)) {
       $p=mysqli_query($con, "SELECT * from ima_data where tanggal='$date' ");
       // $p=mysqli_query($con, "SELECT * from ima_data ");
       echo "<p  align='right'><small class='font-weight-bold'>Data log hari ini -- ".date('D, d M Y')."</small></p>";
     }else {
       $p=mysqli_query($con, "SELECT * from ima_data where tanggal between '$from' and '$until' ");
       // echo "SELECT * from ima_data where tanggal between '$from' and '$until'";
     }

      while ($r=mysqli_fetch_array($p)) {
       ?>
       <tr>
         <td><?php echo "$r[transfer]"; ?></td>
         <td><?php echo "$r[id_station]"; ?></td>
         <td><?php echo "$r[station_pengiriman]"; ?></td>
         <td><?php echo "$r[station_penerima]"; ?></td>
         <td><?php echo "$r[log_penerimaan]"; ?></td>
         <td><?php echo "$r[log_penerima]"; ?></td>
         <td><?php echo "$r[tanggal]"; ?></td>
         <td><?php echo "$r[status]"; ?></td>

       </tr>



     <?php } ?>
    </tbody>

</table>
</body>
</html>
