
<?php
include '../control/connect.php';
include '../control/function.php';
$from= $_GET['from'];
$until= $_GET['until'];
$p=mysqli_query($con, "SELECT count(station_penerima) as total, station_pengiriman,station_penerima, id_station from ima_data where id_station='$_GET[id]' and tanggal between '$from' and '$until' group by station_penerima  ");
$q=mysqli_fetch_array(mysqli_query($con, "select nama_station from ima_station where id_station='$_GET[id]'"));
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>.</title>

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

	<div align="center"></div>
	<center>
	<H6 class="text-right font-weight-bold"> PT MITRA TEKNOLOGI IMA</h6>
	<H4 class="text-center font-weight-bold"> REKAPITULASI</h4>
    <H4 class="text-center font-weight-bold"> PENGGUNAAN &nbsp PNEUMATIC TUBE SYSTEM / PTS</h4>
	<H4 class="text-center font-weight-bold"> PADA MASING - MASING USER</h4>
	<H4 class="text-center font-weight-bold"> RS KANKER DHARMAIS</h4>





	  	<?php

	  	if (!empty($from)) {

	  		echo ' <H6 class="text-right font-weight-bold">Periode : &nbsp'.tanggal_indo($from).' </h6>';
	  	}else{
	  		echo '<H6 class="text-right font-weight-bold"> '.tanggal_indo($date).' </h6>';
	  	}
	  	 ?>
	</center>


  <div class="col-md-18">

        <!--  -->
        <div class="card-body">


          <div class="row">
                <div class="col-lg-3 col-md-6 m-b-10 text-center"> <small> Total Transfer</small>
                    <h5><i class="ti-arrows-horizontal text-info"></i> <?php echo "".number_format(subdata($con,'datalog',$from,$until)).""; ?></h5>
                    <div id="sparklinedash"></div>
                </div>
                <div class="col-lg-3 col-md-6 m-b-10 text-center"> <small> Complete Transfer</small>
                    <h5><i class="ti-arrow-up text-success"></i> <?php echo "".number_format(subdata($con,'Complete',$from,$until)).""; ?></h5>
                    <div id="sparklinedash2"></div>
                </div>
                <div class="col-lg-3 col-md-6 m-b-30 text-center"> <small> Cancelled Transfer</small>
                    <h5><i class="ti-arrow-left text-primary"></i> <?php echo "".number_format(subdata($con,'Cancelled',$from,$until)).""; ?></h5>
                    <div id="sparklinedash3"></div>
                </div>
                <div class="col-lg-3 col-md-6 m-b-30 text-center"> <small> Aborted Transfer</small>
                    <h5><i class="ti-arrow-down text-danger"></i> <?php echo "".number_format(subdata($con,'Aborted',$from,$until)).""; ?></h5>
                    <div id="sparklinedash"></div>
                </div>
            </div>


            <div id="morris-bar-chart-dashboard"></div>
        </div>
  </div>
  <!-- ==================================================================================== -->


	<table class="table">


				<tr >


						<th>NO.</th>
						<th>User</th>
						<th >Pengiriman</th>
						<th>Penerimaan</th>
						<th>Catatan</th>


				</tr>
		</thead>
			<tbody>
				<?php $no=1;
							$p=mysqli_query($con, "SELECT * from ima_station ");
							while ($r=mysqli_fetch_array($p)) {
						echo "
						<tr>
							 <td>$no</td>
							 <td>$r[nama_station]</td>
							 <td>".cekstatus($con,'data', $r['id_station'], $from, $until)."</td>
							 <td>".totalpenerimaan($con, $r['nama_station'], $from, $until)."</td>
							  <td></td>
					 </tr>";
           $no++;
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

<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script> -->
<script src="../library/assets/node_modules/raphael/raphael-min.js"></script>
<script src="../library/assets/node_modules/morrisjs/morris.js"></script>
<?php require "../chart/bar-status-station.php"; ?>
<!-- <?php require "../chart/donute-total-transfer.php"; ?> -->
<script type="text/javascript">
$(function () {


    // Morris bar chart
Morris.Bar({
element: 'morris-bar-chart',
data: <?php echo json_encode($arr_station); ?>,
xkey: 'y',
ykeys: ['Total Pengiriman','Total Penerimaan'],
labels: ['Total Pengiriman','Penerimaan'],
barColors: ['#58D68D', '#e3ec63'],
hideHover: 'auto',
gridLineColor: '#7063ec',

resize: true
});


//

// Extra chart
Morris.Bar({
 element: 'morris-bar-chart-dashboard',
 data:  <?php echo json_encode($arr_dashboard); ?>,
 lineColors: ['#58D68D', '#e3ec63'],
 ykeys:  ['Total Pengiriman','Total Penerimaan'],
 labels:  ['Total Pengiriman','Total Penerimaan'],
 barColors: ['#58D68D', '#e3ec63'],
 hideHover: 'auto',
 gridLineColor: '#7063ec',
 xkey: 'station',
 xLabelMargin : 5,
 xmax: 5,

});
// donat



});
</script>
</body>
</html>
beranda.php
Page 1 of 2
