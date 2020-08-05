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






	<!-- <script type="text/javascript">
	window.print();
	window.onfocus=function(){ window.close();}
	</script> -->



	<!-- This morris js -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>
  <link href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css" rel="stylesheet" />



<?php require "../chart/bar-status-station.php"; ?>

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

barColors: ['#48C9B0', '#CD6155'],
xLabelAngle:90,
verticalGrid: true,
padding: 75,
xLabelMargin : 20,
gridTextSize:12,
numLines: 20,
onlyIntegers: true,
gridTextFamily:'Arial Black',
labelTop: true,

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
