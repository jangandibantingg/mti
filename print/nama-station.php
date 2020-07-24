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
    <H4 class="text-center font-weight-normal"> HASIL LAPORAN DATA STATION PENGIRIM DAN PENERIMAAN  PEMELIHARAAN PTS RSKD</h4>


	  	<?php
	  	if (!empty($from)) {
	  		echo '<H5 class="text-center font-weight-normal"> '.tanggal_indo($from).' / '.tanggal_indo($until).' </h5>';
	  	}else{
	  		echo '<H5 class="text-center font-weight-normal"> '.tanggal_indo($date).' </h5>';
	  	}
	  	 ?>
	</center>


  <div class="col-md-12">

        <!--  -->
        <div class="card-group">
  <div class="card">
      <div class="card-body">
          <div class="row">
              <div class="col-md-12">
                  <div class="d-flex no-block align-items-center">
                      <div>
                          <h3><i class="icon-screen-desktop"></i></h3>
                          <small class="text-muted">TOTAL LOG</small>
                      </div>
                      <div class="ml-auto">
                          <h2 class="counter text-info"><?php echo number_format(cekstatus($con,'data',$_GET['id'],$from,$until)); ?></h2>
                      </div>
                  </div>
              </div>
              <div class="col-12">
                  <div class="progress">
                      <div class="progress-bar bg-info" role="progressbar" style="width: 100%; height: 6px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <!-- Column -->
  <!-- Column -->
  <div class="card">
      <div class="card-body">
          <div class="row">
              <div class="col-md-12">
                  <div class="d-flex no-block align-items-center">
                      <div>
                          <h3><i class="icon-note"></i></h3>
                          <small class="text-muted">PENGIRIMAN</small>
                      </div>
                      <div class="ml-auto">
                          <h2 class="counter text-success"><?php echo number_format(cekstatus($con,'Complete',$_GET['id'],$from,$until)); ?></h2>
                      </div>
                  </div>
              </div>
              <div class="col-12">
                  <div class="progress">
                      <div class="progress-bar bg-success" role="progressbar" style="width: 100%; height: 6px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <div class="card">
      <div class="card-body">
          <div class="row">
              <div class="col-md-12">
                  <div class="d-flex no-block align-items-center">
                      <div>
                          <h3><i class="icon-note"></i></h3>
                          <small class="text-muted">PENERIMAAN</small>
                      </div>
                      <div class="ml-auto">
                          <h2 class="counter text-cyan">
                            <?php echo number_format(totalpenerimaan($con,$q['nama_station'],$from,$until)); ?>
                          </h2>
                      </div>
                  </div>
              </div>
              <div class="col-12">
                  <div class="progress">
                      <div class="progress-bar bg-cyan" role="progressbar" style="width: 100%; height: 6px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <!-- Column -->
  <div class="card">
      <div class="card-body">
          <div class="row">
              <div class="col-md-12">
                  <div class="d-flex no-block align-items-center">
                      <div>
                          <h3><i class="icon-doc"></i></h3>
                          <small class="text-muted">COMPLETE </small>
                      </div>
                      <div class="ml-auto">
                          <h2 class="counter text-success"><?php echo number_format(cekstatus($con,'Complete',$_GET['id'],$from,$until)); ?></h2>
                      </div>
                  </div>
              </div>
              <div class="col-12">
                  <div class="progress">
                      <div class="progress-bar bg-success" role="progressbar" style="width: 100%; height: 6px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <!-- Column -->
  <div class="card">
      <div class="card-body">
          <div class="row">
              <div class="col-md-12">
                  <div class="d-flex no-block align-items-center">
                      <div>
                          <h3><i class="icon-doc"></i></h3>
                          <small class="text-muted">CANCELLED </small>
                      </div>
                      <div class="ml-auto">
                          <h2 class="counter text-primary"><?php echo number_format(cekstatus($con,'Cancelled',$_GET['id'],$from,$until)); ?></h2>
                      </div>
                  </div>
              </div>
              <div class="col-12">
                  <div class="progress">
                      <div class="progress-bar bg-primary" role="progressbar" style="width: 100%; height: 6px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <!-- Column -->
  <!-- Column -->
  <div class="card">
      <div class="card-body">
          <div class="row">
              <div class="col-md-12">
                  <div class="d-flex no-block align-items-center">
                      <div>
                          <h3><i class="icon-bag"></i></h3>
                          <small class="text-muted">ABORTED </small>
                      </div>
                      <div class="ml-auto">
                          <h2 class="counter text-danger"><?php echo number_format(cekstatus($con,'Aborted',$_GET['id'],$from,$until)); ?></h2>
                      </div>
                  </div>
              </div>
              <div class="col-12">
                  <div class="progress">
                      <div class="progress-bar bg-danger" role="progressbar" style="width: 100%; height: 6px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
              </div>
          </div>
      </div>
  </div>
  </div>
  </div>
  <!-- ==================================================================================== -->

  <div class="col-md-12">

     <div class="card ">
       <div class="card-header">
          <span class="card-title font-weight-bold">Total Pengiriman dan penerimaan  </span>
       </div>
         <div class="card-body">

             <div id="morris-bar-chart"></div>

         </div>
       </div>
     </div>


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
barColors: ['#58D68D', '#EC7063'],
hideHover: 'auto',
gridLineColor: '#eef0f2',
resize: true
});


//

// Extra chart
Morris.Bar({
 element: 'morris-bar-chart-dashboard',
 data:  <?php echo json_encode($arr_dashboard); ?>,
 lineColors: ['#58D68D', '#EC7063'],
 ykeys:  ['Total Pengiriman','Total Penerimaan'],
 labels:  ['Total Pengiriman','Total Penerimaan'],
 barColors: ['#58D68D', '#EC7063'],
 hideHover: 'auto',
 gridLineColor: '#eef0f2',
 xkey: 'station',
 xLabelMargin :15,
 xmax: 20,

});
// donat



});
</script>


</body>
</html>
