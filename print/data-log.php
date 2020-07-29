<?php
session_start();
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
	  <H4 class="text-center font-weight-normal"> LAPORAN DATALOG PEMELIHARAAN PTS RSKD</h4>

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
         if (!empty($_SESSION['namestation'])) {
         $p=mysqli_query($con, "SELECT * from ima_data where tanggal between '$from' and '$until' and station_pengiriman like '%$_SESSION[namestation]%' ");
         }else{
         $p=mysqli_query($con, "SELECT * from ima_data where tanggal between '$from' and '$until' ");
       }
       }
       $no=1;
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



       <?php $no++; } ?>
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
