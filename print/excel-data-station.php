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
	header("Content-Disposition: attachment; filename=data-station$from-$until.xls");
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
				<tr >


						<th>ID</th>
						<th>Station</th>
						<th >Total Transfer</th>
						<th>Aborted</th>
						<th>Cancelled</th>
						<th>Complete</th>


				</tr>
		</thead>
			<tbody>
				<?php
							$p=mysqli_query($con, "SELECT * from ima_station ");
							while ($r=mysqli_fetch_array($p)) {
						echo "
						<tr>
							 <td>$r[id_station]</td>
							 <td>$r[nama_station]</td>
							 <td>".cekstatus($con,'data', $r['id_station'], $from, $until)."</td>
							 <td>".cekstatus($con, 'Aborted', $r['id_station'], $from, $until)."</td>
							 <td>".cekstatus($con, 'Cancelled', $r['id_station'], $from, $until)."</td>
							 <td>".cekstatus($con, 'Complete', $r['id_station'], $from, $until)."</td>
					 </tr>";
				 }
				 ?>
			</tbody>

	</table>
</body>
</html>
