<!-- hello i am aang -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="library/assets/images/favicon.png">
    <title>
      <?php echo "$web[title] ";
              if ($page == 'pt-namestation' ) {
              echo "".namastation($con, $_GET['id'])."  Station Pengiriman";
              }

      ?></title>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css"
        href="library/assets/node_modules/datatables.net-bs4/css/dataTables.bootstrap4.css">
    <link rel="stylesheet" type="text/css"
        href="library/assets/node_modules/datatables.net-bs4/css/responsive.dataTables.min.css">
    <link href="library/material/dist/css/style.min.css" rel="stylesheet">
    <link href="library/material/dist/css/pages/floating-label.css" rel="stylesheet">

   <!--This page css - Morris CSS -->
    <link href="library/assets/node_modules/morrisjs/morris.css" rel="stylesheet">
   <!-- page css -->
    <link href="library/material/dist/css/pages/tab-page.css" rel="stylesheet">


</head>

<body class="skin skin-red fixed-layout">


    <!-- <div class="preloader">
        <div class="loader">
            <div class="loader__figure"></div>
            <p class="loader__label"><?php echo "$web[title]"; ?></p>
        </div>
    </div> -->


      <div id="main-wrapper">

        <?php if ($page != 'penjualan') {?>
        <?php include 'view/topbar.php'; ?>

        <?php include "left.sidebar.php"; ?>

         <div class="page-wrapper">

        <div class="container-fluid">

       <?php include  "view/toptittle.php"; ?>
      <?php } ?>


                <div class="row">
                    <div class="col-12">

                              <?php
                              if($member['id_plan'] == 0){
                                echo "<div class='alert alert-warning'>sebelum mengakses ke halaman lain, isi info bisnis anda terlebih dahulu</div>";
                                require "view/gerai.php";
                              }elseif (file_exists("view/$page.php")) {
                                    require "view/$page.php";
                                }elseif($page == '' ){
                                   require "view/beranda.php";
                                }else {

                                  if ($member['level'] == 'akun') {
                                    echo "<script type='text/javascript'> window.location.href = './penjualan.aspx' </script>";
                                  }
                                    echo '  <div class="col-md-12">
                                      <div class="card">
                                        <div class="card-body">
                                          <h4 class="card-title"><i class="icon icon-grid"></i> Dalam Proses pengembangan</h4>
                                          <p class="text-left"> © 2019  <i class="fa fa-code"></i> <a href="https://www.cloudflare.com/" target="_blank"> <b> <i class="icon-cup"></i> PT MITRA TEKNOLOGI IMA </b> </a></p>



                                        </div>
                                      </div>
                                    </div>';
                                }


                              ?>

                    </div>
                </div>

            </div>

        </div>

        <footer class="footer">
            © 2020  <i class="fa fa-code"></i> <a href="" target="_blank"> <b> <i class="icon-cup"></i> PT MITRA TEKNOLOGI IMA</b> </a>
        </footer>


    </div>
    <script src="library/assets/node_modules/jquery/jquery-3.2.1.min.js"></script>
    <script src="ajax/notify.js"></script>
    <script src="ajax/notify.min.js"></script>
    <script src="ajax/signup.js"></script>
    <script src="ajax/form.js"></script>
    <!-- <script src="library/assets/node_modules/popper/popper.min.js"></script> -->
    <script src="library/assets/node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="library/material/dist/js/perfect-scrollbar.jquery.min.js"></script>
    <!--Wave Effects -->
    <script src="library/material/dist/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="library/material/dist/js/sidebarmenu.js"></script>
    <!--stickey kit -->
    <script src="library/assets/node_modules/jquery-sparkline/jquery.sparkline.min.js"></script>
    <script src="library/assets/node_modules/sparkline/jquery.sparkline.min.js"></script>
    <!--Custom JavaScript -->
    <script src="library/material/dist/js/custom.min.js"></script>
    <!-- <script src="library/assets/node_modules/toast-master/js/jquery.toast.js"></script>
   <script src="library/material/dist/js/pages/toastr.js"></script> -->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.7.5/js/bootstrap-select.min.js"></script> -->





    <!--This page plugins -->
       <script src="library/assets/node_modules/datatables.net/js/jquery.dataTables.min.js"></script>
       <script src="library/assets/node_modules/datatables.net-bs4/js/dataTables.responsive.min.js"></script>

    <!-- This is data table -->
<script src="https://cdn.datatables.net/buttons/1.5.1/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.flash.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.print.min.js"></script>


   <script>
        $(function () {
            $('#myTable').DataTable();
            var table = $('#example').DataTable({
                "columnDefs": [{
                    "visible": false,
                    "targets": 2
                }],
                "order": [
                    [2, 'asc']
                ],
                "displayLength": 25,
                "drawCallback": function (settings) {
                    var api = this.api();
                    var rows = api.rows({
                        page: 'current'
                    }).nodes();
                    var last = null;
                    api.column(2, {
                        page: 'current'
                    }).data().each(function (group, i) {
                        if (last !== group) {
                            $(rows).eq(i).before('<tr class="group"><td colspan="5">' + group + '</td></tr>');
                            last = group;
                        }
                    });
                }
            });
            // Order by the grouping
            $('#example tbody').on('click', 'tr.group', function () {
                var currentOrder = table.order()[0];
                if (currentOrder[0] === 2 && currentOrder[1] === 'asc') {
                    table.order([2, 'desc']).draw();
                } else {
                    table.order([2, 'asc']).draw();
                }
            });
            // responsive table
            $('#config-table').DataTable({
                responsive: true,
                dom: 'Bfrtip',
                buttons: [
                    'copy', 'csv', 'excel', 'pdf', 'print'
                ]

            });
            $('#example23').DataTable({
                dom: 'Bfrtip',
                buttons: [
                    'copy', 'csv', 'excel', 'pdf', 'print'
                ]
            });
            $('.buttons-copy, .buttons-csv, .buttons-print, .buttons-pdf, .buttons-excel').addClass('btn btn-primary mr-1');



        });

    </script>


  <?php if ($page== 'pt-namestation' || $page == 'beranda' || $page  == '' ) { ?>

        <script src="library/material/dist/js/pages/jquery.PrintArea.js" type="text/JavaScript"></script>
        <script>
        $(document).ready(function() {
            $("#print").click(function() {
                var mode = 'iframe'; //popup
                var close = mode == "popup";
                var options = {
                    mode: mode,
                    popClose: close
                };
                $("div.printableArea").printArea(options);
            });
        });
        </script>

        <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script> -->
        <script src="library/assets/node_modules/raphael/raphael-min.js"></script>
        <script src="library/assets/node_modules/morrisjs/morris.js"></script>
        <?php require "chart/bar-status-station.php"; ?>
        <?php require "chart/donute-total-transfer.php"; ?>
        <script type="text/javascript">
$(function () {


            // Morris bar chart
 Morris.Bar({
     element: 'morris-bar-chart',
     data: <?php echo json_encode($arr_station); ?>,
     xkey: 'y',
     ykeys: ['Total Transfer'],
     labels: ['Total Transfer'],

     barColors: ['#55ce63', '#414755', '#40c4ff'],
     hideHover: 'auto',
     gridLineColor: '#eef0f2',
     resize: true
 });


 //

 // Extra chart
     Morris.Area({
         element: 'extra-area-chart',
         data:  <?php echo json_encode($arr_station); ?>,
         lineColors: ['#55ce63', '#414755', '#40c4ff'],
         xkey: 'y',
         ykeys:  ['Cancelled', 'Aborted', 'Complete'],
         labels:  ['Cancelled', 'Aborted', 'Complete'],
         parseTime: false,
         pointSize: 0,
         lineWidth: 0,
         resize: true,
         fillOpacity: 0.8,
         behaveLikeLine: true,
         gridLineColor: '#e0e0e0',
         hideHover: 'auto'

     });
     // donat
     Morris.Donut({
             element: 'morris-donut-chart',
             data: <?php echo json_encode($arr); ?>,
             resize: true,
             colors: ['#40c4ff', '#55ce63', '#414755']
         });




 });
        </script>
<?php } ?>
</body>

</html>
