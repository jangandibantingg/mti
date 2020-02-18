<?php
// make with love </> M AANG SYAIFUN NAJA
include 'connect.php';
// tanggal indo
function tanggal_indo($tanggal)
{
	$bulan = array (1 =>   'Januari',
				'Februari',
				'Maret',
				'April',
				'Mei',
				'Juni',
				'Juli',
				'Agustus',
				'September',
				'Oktober',
				'November',
				'Desember'
			);
	$split = explode('-', $tanggal);
	return $split[2] . ' ' . $bulan[ (int)$split[1] ] . ' ' . $split[0];
}
//hitung posingan

function transaksi($con, $jenis, $from, $until, $clear, $gerai){
  $a=mysqli_query($con, "SELECT * FROM orders where clear='$clear' and transaksi='$jenis' and dt between '$from' and '$until' and gerai='$gerai'" );
  while ($r=mysqli_fetch_array($a)) {
    $total=$r['qty']*$r['price'];
    $subtotal=$subtotal+$total;
  }
  // $sql="SELECT * FROM orders where clear='$clear' and transaksi='$jenis' and dt between '$from' and '$until' ";
 return $subtotal;
}

// cek saldo awal
function saldo_awal($con,$today,$gerai){
  $a=mysqli_fetch_array(mysqli_query($con, "SELECT saldo_awal FROM saldo where date='$today' and status='open' and gerai='$gerai'" ));
  $data=$a['saldo_awal'];
  return $data;
}

// cek saldo kasir
function current_saldo($con,$today,$saldo_awal,$pengeluran,$gerai){
  $a=mysqli_fetch_array(mysqli_query($con, "SELECT sum(amount) as amount FROM inv where metode='cash' and date='$today' and operator='open' and gerai='$gerai' " ));
  $data=$a['amount']+$saldo_awal-$pengeluran;
  return $data;
}

//cek operator
function cekoperator($con,$today,$gerai){
$a=mysqli_fetch_array(mysqli_query($con, "SELECT count(saldo_awal) as saldo_awal FROM saldo where date='$today' and status='open' and gerai='$gerai' "));
$data=$a['saldo_awal'];
return $data;
}
//cek pengeluaran kasir
function pengeluaran($con,$today,$gerai){
  $a=mysqli_fetch_array(mysqli_query($con, "SELECT sum(kredit) as kredit FROM arus_khas where dt='$today' and operator='open' and orders='N' and gerai='$gerai'" ));
  $data=$a['kredit']+0;
  return $data;
}
//cek pengeluaran harian
function pengeluarantoday($con,$today,$gerai){
  $a=mysqli_fetch_array(mysqli_query($con, "SELECT sum(kredit) as kredit FROM arus_khas where dt='$today' and orders='N' and gerai='$gerai'" ));
  $data=$a['kredit']+0;
  return $data;
}

// cek saldo virtual kasir
function saldo_virtual($con,$today,$gerai){
  $a=mysqli_fetch_array(mysqli_query($con, "SELECT sum(amount) as amount FROM inv where metode !='cash' and date='$today' and operator='open' and gerai='$gerai' " ));
  $data=$a['amount']+0;
  return $data;
}

// cek saldo virtual
function saldo_virtual_today($con,$today,$gerai){
  $a=mysqli_fetch_array(mysqli_query($con, "SELECT sum(amount) as amount FROM inv where metode !='cash' and date='$today'and gerai='$gerai' " ));
  $data=$a['amount']+0;
  return $data;
}
// cek saldo virtual
function penjualantoday($con,$today,$gerai){
  $a=mysqli_fetch_array(mysqli_query($con, "SELECT sum(amount) as amount FROM inv where date='$today' and gerai='$gerai' " ));
  $data=$a['amount'];
  return $data;
}

// cek jumlah transaksi tiap hari
function transactiontoday($con,$today,$gerai){
  $a=mysqli_fetch_array(mysqli_query($con, "SELECT count(amount) as amount FROM inv where date='$today' and gerai='$gerai' " ));
  $data=$a['amount'];
  return $data;
}
// cek incom tiap bulan
function sumIncome($con, $month, $gerai){
  $a=mysqli_fetch_array(mysqli_query($con, "SELECT sum(amount) as amount FROM inv where MONTH(date)='$month' and gerai='$gerai'" ));
  $data=$a['amount'];
  return $data;
}
// cek pengeluaran tiap bulan
function sumPengeluaran($con, $month, $gerai){
  $a=mysqli_fetch_array(mysqli_query($con, "SELECT sum(kredit) as kredit FROM arus_khas where MONTH(dt)='$month' and gerai='$gerai'" ));
  $data=$a['kredit'];
  return $data;
}

// cek income tiap bulan
function sumPengeluarantoday($con, $date, $gerai){
  $a=mysqli_fetch_array(mysqli_query($con, "SELECT sum(kredit) as kredit FROM arus_khas where dt='$date' and gerai='$gerai'" ));
  $data=$a['kredit'];
  return $data;
}
// cek operational
function operationalcost($penjualan,$operationalcost){
  $data=number_format($penjualan/$operationalcost*100);
  return $data;
}
//  cek targetsales
function targetsales($penjualan,$targetsales){
  $data=number_format($penjualan/$operationalcost*100);
  return $data;
}
// cek laba kotor
function grossprofit($penjualantoday,$hpp){
	$data=$penjualantoday-$hpp;
	return $data;
}
// cek hpp
function hpp($con,$date,$gerai){
		$j=mysqli_query($con, "select menu.id_menu, orders.qty, orders.price, menu.hpp, orders.id_menu, orders.gerai from orders,menu where menu.id_menu=orders.id_menu and orders.dt='$date' and orders.gerai='$gerai'");
		while ($r=mysqli_fetch_array($j)) {
			$data=$r['qty']*$r['hpp'];
			$subdata=$subdata+$data;
		}
		return $subdata;
}
// cek profit perday
function profittoday($grosprosfit,$operational){
	$data=$grosprosfit-$operational;
	if($data < 0 ){
		$profit = 0;
	}else{
		$profit = $data;
	}
	return $profit;
}
// cek operational

//biaya operational
function operasional($con,$gerai,$biaya ){
	$p=mysqli_query($con, "select * from operational where gerai='$gerai' order by nama_operational asc");

	while ($r=mysqli_fetch_array($p)) {
	$jw=$r['jangka_waktu'];
	if ($jw == 'hari') {
		$bh=$r['amount'];
		$bb=$r['amount']*30;
		$bt=$bb*12;
	}elseif($jw == 'bulan') {
		$bh=$r['amount']/30;
		$bb=$r['amount'];
		$bt=$bb*12;
	}else {
		$bb=$r['amount']/12;
		$bh=$bb/30;
		$bt=$bb*12;
	}
	//
				if ($biaya == 'hari') {
						$return = $return + $bh;
				}elseif ($biaya == 'bulan') {
					$return = $return + $bb;
				}elseif($biaya == 'tahun'){
					$return = $return + $bt;
				}
	}
	return $return;
}
// stok masuk
function stok_masuk($con,$item,$gerai){
	$a=mysqli_fetch_array(mysqli_query($con, "SELECT sum(qty) as stok_masuk from orders where kode_item='$item' and transaksi='pembelian' and gerai='$gerai' and clear='Y' "));
	$data=$a['stok_masuk'];
	return $data;
}
// stok masuk
function stok_keluar($con,$item,$satuan,$gerai){
	$a=mysqli_fetch_array(mysqli_query($con, "SELECT sum(orders.qty) as stok_keluar , hpp.qty as takaran, hpp.kode_item from orders,hpp where hpp.id_menu=orders.id_menu and orders.transaksi='penjualan' and hpp.kode_item='$item' and orders.gerai='$gerai' "));
		if($satuan == 'kg' || $satuan == 'lt' ){
			$data=$a['stok_keluar']*$a['takaran'];
		}else{
			$data=$a['stok_keluar']*$a['takaran'];
		}

	return $data;
}
 // hargatakaran
 function takaranharga($harga,$berat,$satuan,$takaran,$satuantakaran){
	 if ($satuan == $satuantakaran){
		 $data = ($takaran/$berat) * $harga;
	 }elseif ($satuan != $satuantakaran || $satuantakaran=='ml' || $satuantakaran=='gr'  ) {
		 if ($satuan == 'kg' && $satuantakaran == 'gr' || $satuan == 'lt' && $satuantakaran == 'ml') {
		 	$data = $takaran / ($berat*1000) * $harga;
		 }

	 }

	 return $data;
 }
 // total bahan Baku
 function totalbahanbaku($con,$id_menu,$gerai){
	 $p=mysqli_query($con,"SELECT hpp.id_hpp, hpp.kode_item, hpp.qty as takaran, item.satuan, item.kode_item, item.nama_item, item.qty as berat,hpp.satuan as satuantakaran, item.price from item,hpp where item.kode_item=hpp.kode_item and item.gerai='$gerai' and hpp.id_menu='$_GET[id]'");
	 while ($r=mysqli_fetch_array($p)) {
		 $harga =takaranharga($r['price'],$r['berat'],$r['satuan'],$r['takaran'],$r['satuantakaran']);
		 $data	= $data + $harga;
	}
	return $data;
}
// convertsatuan
function convertsatuan($berat,$satuan,$takaran,$stok){
	if($satuan == 'kg' || $satuan == 'lt' ){
		$data=($berat*1000)*$stok;
	}else{
		$data=$berat*$stok;
	}
	return $data;
}

function convert_item($berat,$satuan,$beratstok,$takaranstok){
	if($satuan == 'kg' || $satuan == 'lt' ){
		$data=$beratstok/1000/$berat;
	}else{
		$data=$beratstok/$berat;
	}
	return $data;
}
function item_invoice($con,$invoice,$gerai){
	$code="select orders.id_menu, orders.qty as jumlah, orders.invoice,menu.price, menu.id_menu, menu.name from orders,menu where orders.invoice='$invoice' and orders.gerai='$gerai' and menu.id_menu=orders.id_menu order by id_order desc";
	$p=mysqli_query($con,"$code");
	while ($r=mysqli_fetch_array($p)) {

		$data	.= "<span class='font-weight-light'><i class='ti-arrow-right'></i>  <b>x$r[jumlah]</b> $r[name] ".number_format($r['price'])."</span> <br>  ";
 }
 return $data;
}

function cekstatusgerai($con,$date,$gerai){
	$a=mysqli_num_rows(mysqli_query($con, "select saldo_awal from saldo where date='$date' and gerai='$gerai' "));
	if($a == 0 ){
		$data = "tutup";
	}else{
		$data = "open";
	}
	return $data;
}

 ?>
