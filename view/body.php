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
    <style media="screen">
      #morris-bar-chart-dashboard{
        height:800px;
      }
      #morris-bar-chart{
        height:800px;
      }
    </style>

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
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
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
<script src="ajax/datatables.js"></script>



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
        <!-- <?php require "chart/donute-total-transfer.php"; ?> -->
        <script type="text/javascript">
$(function () {


  (function() {
  var $, MyMorris;

  MyMorris = window.MyMorris = {};
  $ = jQuery;

  MyMorris = Object.create(Morris);

  MyMorris.Bar.prototype.defaults["labelTop"] = false;

  MyMorris.Bar.prototype.drawLabelTop = function(xPos, yPos, text) {
    var label;
    return label = this.raphael.text(xPos, yPos, text).attr('font-size', this.options.gridTextSize).attr('font-family', this.options.gridTextFamily).attr('font-weight', this.options.gridTextWeight).attr('fill', this.options.gridTextColor);
  };

  MyMorris.Bar.prototype.drawSeries = function() {
    var barWidth, bottom, groupWidth, idx, lastTop, left, leftPadding, numBars, row, sidx, size, spaceLeft, top, ypos, zeroPos;
    groupWidth = this.width / this.options.data.length;
    numBars = this.options.stacked ? 1 : this.options.ykeys.length;
    barWidth = (groupWidth * this.options.barSizeRatio - this.options.barGap * (numBars - 1)) / numBars;
    if (this.options.barSize) {
      barWidth = Math.min(barWidth, this.options.barSize);
    }
    spaceLeft = groupWidth - barWidth * numBars - this.options.barGap * (numBars - 1);
    leftPadding = spaceLeft / 2;
    zeroPos = this.ymin <= 0 && this.ymax >= 0 ? this.transY(0) : null;
    return this.bars = (function() {
      var _i, _len, _ref, _results;
      _ref = this.data;
      _results = [];
      for (idx = _i = 0, _len = _ref.length; _i < _len; idx = ++_i) {
        row = _ref[idx];
        lastTop = 0;
        _results.push((function() {
          var _j, _len1, _ref1, _results1;
          _ref1 = row._y;
          _results1 = [];
          for (sidx = _j = 0, _len1 = _ref1.length; _j < _len1; sidx = ++_j) {
            ypos = _ref1[sidx];
            if (ypos !== null) {
              if (zeroPos) {
                top = Math.min(ypos, zeroPos);
                bottom = Math.max(ypos, zeroPos);
              } else {
                top = ypos;
                bottom = this.bottom;
              }
              left = this.left + idx * groupWidth + leftPadding;
              if (!this.options.stacked) {
                left += sidx * (barWidth + this.options.barGap);
              }
              size = bottom - top;
              if (this.options.verticalGridCondition && this.options.verticalGridCondition(row.x)) {
                this.drawBar(this.left + idx * groupWidth, this.top, groupWidth, Math.abs(this.top - this.bottom), this.options.verticalGridColor, this.options.verticalGridOpacity, this.options.barRadius, row.y[sidx]);
              }
              if (this.options.stacked) {
                top -= lastTop;
              }
              this.drawBar(left, top, barWidth, size, this.colorFor(row, sidx, 'bar'), this.options.barOpacity, this.options.barRadius);
              _results1.push(lastTop += size);

              if (this.options.labelTop && !this.options.stacked) {
                label = this.drawLabelTop((left + (barWidth / 2)), top - 10, row.y[sidx]);
                textBox = label.getBBox();
                _results.push(textBox);
              }
            } else {
              _results1.push(null);
            }
          }
          return _results1;
        }).call(this));
      }
      return _results;
    }).call(this);
  };
  }).call(this);


            // Morris bar chart
 Morris.Bar({
     element: 'morris-bar-chart',
     data: <?php echo json_encode($arr_station); ?>,
     xkey: 'y',
     ykeys: ['Total Pengiriman','Total Penerimaan'],
     labels: ['Total Pengiriman','Penerimaan'],
     barColors: ['#48C9B0', '#CD6155'],
     hideHover: 'auto',
     gridLineColor: '#eef0f2',


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
     gridTextFamily:'Arial Black',
     labelTop: true,
 });


 //

 // Extra chart
     Morris.Bar({
         element: 'morris-bar-chart-dashboard',
         data:  <?php echo json_encode($arr_dashboard); ?>,
         lineColors: ['#F2F4F4', '#C0392B'],
         ykeys:  ['Total Pengiriman','Total Penerimaan'],
         labels:  ['Total Pengiriman','Total Penerimaan'],
         barRatio: 2,
         barColors: ['#48C9B0', '#CD6155'],
         hideHover: 'auto',
         gridLineColor: '#7063ec',
         xkey: 'station',
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
         gridTextFamily:'Arial Black',
         labelTop: true,


     });
     // donat



 });
        </script>
<?php } ?>
</body>

</html>
