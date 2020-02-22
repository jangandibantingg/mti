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
    <title><?php echo "$web[title] $page"; ?></title>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.7.5/css/bootstrap-select.min.css">
    <link href="library/material/dist/css/style.min.css" rel="stylesheet">
    <link href="library/material/dist/css/pages/floating-label.css" rel="stylesheet">
    <link href="library/assets/node_modules/bootstrap-datepicker/bootstrap-datepicker.min.css" rel="stylesheet" type="text/css" />
    <link href="library/assets/node_modules/select2/dist/css/select2.min.css" rel="stylesheet" type="text/css" />
   <!--This page css - Morris CSS -->
    <link href="library/assets/node_modules/morrisjs/morris.css" rel="stylesheet">
   <!-- page css -->
    <link href="library/material/dist/css/pages/tab-page.css" rel="stylesheet">


</head>

<body class="skin skin-megna fixed-layout">


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

        <?php if ($page != 'penjualan') {?>
        <footer class="footer">
            © 2019  <i class="fa fa-code"></i> <a href="https://github.com/jangandibantingg" target="_blank"> <b> <i class="icon-cup"></i> CODER Coffee</b> </a>
        </footer>
      <?php } ?>

    </div>
    <script src="library/assets/node_modules/jquery/jquery-3.2.1.min.js"></script>

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
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.7.5/js/bootstrap-select.min.js"></script> -->

    <!-- Sweet-Alert  -->
    <script src="library/assets/node_modules/sweetalert2/dist/sweetalert2.all.min.js"></script>
    <script src="library/assets/node_modules/sweetalert2/sweet-alert.init.js"></script>

    <!-- Daterange picker plugins css -->
    <link href="library/assets/node_modules/timepicker/bootstrap-timepicker.min.css" rel="stylesheet">
    <link href="library/assets/node_modules/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
    <!-- jam  -->
    <script>
      var myVar = setInterval(myTimer, 1000);

      function myTimer() {
        var d = new Date();
        var t = d.toLocaleTimeString();
        document.getElementById("timer").innerHTML = t;
      }
    </script>


    <?php if ($page != 'penjualan' ) {?>



    <!-- This is data table -->
   <script src="library/assets/node_modules/datatables.net/js/jquery.dataTables.min.js"></script>
   <script src="library/assets/node_modules/datatables.net-bs4/js/dataTables.responsive.min.js"></script>

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
                if (currentOrder[0] === 2 && cuarrentOrder[1] === 'asc') {
                    table.order([2, 'desc']).draw();
                } else {
                    table.order([2, 'asc']).draw();
                }
            });
            // responsive table
            $('#config-table').DataTable({
                responsive: true
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

  <?php } ?>

  <?php if ($page== 'khas' || $page == 'beranda') { ?>

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
<?php } ?>
</body>

</html>
