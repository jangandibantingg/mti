<?php
include '../control/connect.php';
include '../control/function.php';
$from= $_GET['from'];
$until= $_GET['until'];

 ?>

<!DOCTYPE html>
<html>
<head>
	<title> PT MITRA TEKNOLOGI IMA</title>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

	    <!--This page plugins -->
	       <script src="../library/assets/node_modules/datatables.net/js/jquery.dataTables.min.js"></script>
	       <script src="../library/assets/node_modules/datatables.net-bs4/js/dataTables.responsive.min.js"></script>
				 <link rel="stylesheet" type="text/css"
				 		href="../library/assets/node_modules/datatables.net-bs4/css/dataTables.bootstrap4.css">
				 <link rel="stylesheet" type="text/css"
				 		href="../library/assets/node_modules/datatables.net-bs4/css/responsive.dataTables.min.css">
				 <link href="../library/material/dist/css/style.min.css" rel="stylesheet">
				 <link href="../library/material/dist/css/pages/floating-label.css" rel="stylesheet">
</head>
<body>

	<center>
		<h3 class="text-center font-weight-bold"> PT MITRA TEKNOLOGI IMA</h3>
	  <H4 class="text-center font-weight-normal"> REKAPITULASI HASIL LAPORAN PEMELIHARAAN PTS RSKD</h4>

	  	<?php
	  	if (!empty($from)) {
	  		echo '<H5 class="text-center font-weight-normal"> '.tanggal_indo($from).' / '.tanggal_indo($until).' </h5>';
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

	<script type="text/javascript">
	window.print();
	window.onfocus=function(){ window.close();}
	</script>
	<!-- This is data table -->
<script src="https://cdn.datatables.net/buttons/1.5.1/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.flash.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.print.min.js"></script>
<script src="../ajax/datatables.js"></script>
</body>
</html>
