<?php
// error_reporting(0);
// include '../control/connect.php';
// include '../control/function.php';



// $h1=mktime(0, 0, 0, date("m"), date("d")-1, date("Y"));
// $h2=mktime(0, 0, 0, date("m"), date("d")-2, date("Y"));
// $h3=mktime(0, 0, 0, date("m"), date("d")-3, date("Y"));
// $h4=mktime(0, 0, 0, date("m"), date("d")-4, date("Y"));
// $h5=mktime(0, 0, 0, date("m"), date("d")-5, date("Y"));
// $h6=mktime(0, 0, 0, date("m"), date("d")-6, date("Y"));
// $h7=mktime(0, 0, 0, date("m"), date("d")-7, date("Y"));
//
// $period1=tanggal_indo(date('d M', $h1));
// $period2=tanggal_indo(date('d M', $h2));
// $period3=tanggal_indo(date('d M', $h3));
// $period4=tanggal_indo(date('d M', $h4));
// $period5=tanggal_indo(date('d M', $h5));
// $period6=tanggal_indo(date('d M', $h6));
// $period7=tanggal_indo(date('d M', $h7));
//
// $sales1=penjualantoday($con,date('Y-m-d', $h1));
// $sales2=penjualantoday($con,date('Y-m-d', $h2));
// $sales3=penjualantoday($con,date('Y-m-d', $h3));
// $sales4=penjualantoday($con,date('Y-m-d', $h4));
// $sales5=penjualantoday($con,date('Y-m-d', $h5));
// $sales6=penjualantoday($con,date('Y-m-d', $h6));
// $sales7=penjualantoday($con,date('Y-m-d', $h7));
//


$sales_summary=array();

for ($i=6; $i >= 1 ; $i--) {
  $h=mktime(0, 0, 0, date("m"), date("d")-$i, date("Y"));
  $Period=date('d M', $h);
  $dateperiod=date('Y-m-d', $h);
  $Sales=0+penjualantoday($con,date('Y-m-d', $h),$gerai);
  $operationalchart=floor(operasional($con,$gerai,'hari')); 
  $titikaman=0+hpp($con,$dateperiod,$gerai)+$operationalchart;
  // $cekstatusgerai=cekstatusgerai($con,$date,$gerai);
  if ($Sales != 0 ) {
      array_push($sales_summary, array('period' => $Period, 'Sales' => $Sales, 'titik aman' => $titikaman));
  }else{
    continue;
  }


}

// echo json_encode($sales_summary);
//
// $obj7->period=$period7;//text
// $obj7->Sales=$sales7+0;
// array_push($sales_summary,$obj7);
//
//
// $obj6->period=$period6;//text
// $obj6->Sales=$sales6+0;
// array_push($sales_summary,$obj6);
//
//
//
// $obj5->period=$period5+0;//text
// $obj5->Sales=$sales5+0;
// array_push($sales_summary,$obj5);
//
//
//
// $obj4->period=$period4;//text
// $obj4->Sales=$sales4+0;
// array_push($sales_summary,$obj4);
//
// $obj3->period=$period3;//text
// $obj3->Sales=$sales3+0;
// array_push($sales_summary,$obj3);
//
// $obj2->period=$period2;//text
// $obj2->Sales=$sales2+0;
// array_push($sales_summary,$obj2);
//
// $obj1->period=$period1;//text
// $obj1->Sales=$sales1+0;
// array_push($sales_summary,$obj1);












 ?>
<!-- <?php echo json_encode($sales_summary);?> -->
