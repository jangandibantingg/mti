<?php
error_reporting(0);
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
  <!-- <link rel="stylesheet" href="./a4.css"> -->
	    <!--This page plugins -->
	       <script src="../library/assets/node_modules/datatables.net/js/jquery.dataTables.min.js"></script>
	       <script src="../library/assets/node_modules/datatables.net-bs4/js/dataTables.responsive.min.js"></script>
				 <link rel="stylesheet" type="text/css"	href="../library/assets/node_modules/datatables.net-bs4/css/dataTables.bootstrap4.css">
				 <link rel="stylesheet" type="text/css" href="../library/assets/node_modules/datatables.net-bs4/css/responsive.dataTables.min.css">
				 <link href="../library/material/dist/css/style.min.css" rel="stylesheet">
				 <link href="../library/material/dist/css/pages/floating-label.css" rel="stylesheet">


         <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
         <!-- <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script> -->
         <script src="http://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
         <script src="http://cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>

         <style media="screen">
           #morris-bar-chart-dashboard{
             height:1500px;
           }
         </style>
</head>
<body>
      <div class="impression-paysage">
<div class="page" size="A4"  >
	<center>
	<H6 class="text-center font-weight-bold"> PT MITRA TEKNOLOGI IMA</H6>
	<H3 class="text-center font-weight-bold"> REKAPITULASI</h3>
    <H4 class="text-center font-weight-bold"> PENGGUNAAN &nbsp; PNEUMATIC TUBE SYSTEM / PTS</h4>
	<H4 class="text-center font-weight-bold"> PADA MASING - MASING USER</h4>
	<H4 class="text-center font-weight-bold"> RS KANKER DHARMAIS</h4>





	  	<?php

      if (!empty($from)) {
	  		echo '<H5 class="text-center font-weight-normal"> '.tanggal_indo($from).' / '.tanggal_indo($until).' </h5>';
	  	}else{
	  		echo '<H5 class="text-center font-weight-normal"> '.tanggal_indo($date).' </h5>';
	  	}
	  	 ?>
	</center>

          <div id="morris-bar-chart-dashboard"></div>
    </div>



</div>

  <!-- ==================================================================================== -->






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

<?php require "../chart/bar-status-station.php"; ?>
<!-- <?php require "../chart/donute-total-transfer.php"; ?> -->


<script type="text/javascript">

$(function () {
Morris.Bar({
 element: 'morris-bar-chart-dashboard',

 data:  <?php echo json_encode($arr_dashboard); ?>,
 lineColors: ['#F2F4F4', '#C0392B'],
 ykeys:  ['Total Pengiriman','Total Penerimaan'],
 labels:  ['Total Pengiriman','Total Penerimaan'],
 barRatio: 2,
 barColors: ['#48C9B0', '#CD6155'],
 hideHover: 'auto',
 gridLineColor: '#000000',
 xkey: 'station',
 // yLabelFormat: function(y){return y != Math.round(y)?'':y;},
 yLabelFormat: function(y) {
  return y = Math.round(y);
},

 xLabelAngle:90,
 verticalGrid: true,
 padding: 75,
 xLabelMargin : 20,
 gridTextSize:11,
 numLines: 20,
 onlyIntegers: true,

});
// donat
});
</script>

<!-- <form name="doc_test" action="<?php echo ($_SERVER['PHP_SELF']);?>" method="post">
  <input type="submit" name="submit_doc" value="Ekspor ke MS WORD">
</form> -->

<?php
  if(isset($_POST['submit_doc'])) {
    header("Content-Type: application/vnd.msword");
    header("Expires: 0");
    header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
    header("content-disposition: attachment;filename=hasilekspor.doc");
  }
?>

</body>
</html>
