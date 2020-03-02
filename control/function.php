<?php



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

function getFileList($dir)
{
		// array to hold return value
		$retval = [];

		// add trailing slash if missing
		if (substr($dir, -1) != "/")
		{
				$dir .= "/";
		}

		// open pointer to directory and read list of files
		$d = @dir($dir) or die("getFileList: Failed opening directory {$dir} for reading");
		while (false !== ($entry = $d->read()))
		{
				// skip hidden files
				if ($entry{0} == ".") continue;
				if (is_dir("{$dir}{$entry}"))
				{
						$retval[] = ['name' => "{$entry}/"

						];
				}
				elseif (is_readable("{$dir}{$entry}"))
				{
						$retval[] = ['name' => "{$entry}"

						];
				}
		}
		$d->close();

		return $retval;
}

// cek data status per station_penerima===============================================================================
function sublog($con,$filename){
	$a=mysqli_num_rows(mysqli_query($con, "SELECT filename from ima_data where filename='$filename'"));
	return $a+0;
}

// cek data status per station_penerima===============================================================================
function totaltransfer($con,$id_station,$from,$until){
	$a=mysqli_fetch_array(mysqli_query($con, "SELECT count(id_station) as total from ima_data where id_station='$id_station' and tanggal between '$from' and '$until'"));
	$total=$a['total'];
	return $total;
}
function totalpenerimaan($con,$nama_station,$from,$until){
	$a=mysqli_fetch_array(mysqli_query($con, "SELECT count(station_penerima) as total from ima_data where station_penerima='$nama_station' and tanggal between '$from' and '$until'  "));
	$total=$a['total'];
	return $total;
}
function totalpenerimaanstation($con,$pengirim,$penerima,$from,$until){
$a=mysqli_fetch_array(mysqli_query($con, "SELECT count(station_penerima) as total from ima_data where station_penerima='$penerima' and station_pengiriman='$pengirim' and tanggal between '$from' and '$until'  "));
$total=$a['total'];
return $total;
}
// cari jumlah log station and status


// cek data status per station_penerima===============================================================================
function cekstatus($con,$status,$id_station, $from, $until){

	if ($status == 'data') {
		$a=mysqli_fetch_array(mysqli_query($con, "SELECT count(id_station) as total from ima_data where id_station='$id_station' and tanggal between '$from' and '$until'  "));
		$total=$a['total']+0;
	}else{
		$a=mysqli_fetch_array(mysqli_query($con, "SELECT count(id_station) as total from ima_data where id_station='$id_station' and status='$status' and tanggal between '$from' and '$until' "));
		$total=$a['total'];
	}
	return $total;
}

// cek data status per station_penerima===============================================================================
function status_station($con, $status, $id_station, $station_penerima,$from, $until){
	$a=mysqli_fetch_array(mysqli_query($con, "select count(id_station) as total from ima_data where id_station='$id_station' and status='$status' and station_penerima='$station_penerima' and tanggal between '$from' and '$until'"));
	$total=$a['total']+0;
	return "$total";
}


function subdata($con,$status){
	if ($status=='datalog') {
		  $a=mysqli_fetch_array(mysqli_query($con, "select count(id_station) as total from ima_data "));
		  $total=$a['total'];
	}else {
			$a=mysqli_fetch_array(mysqli_query($con, "select count(id_station) as total from ima_data where status='$status' "));
			$total=$a['total'];
	}
		  return $total;
}

//  cari nama station
function namastation($con, $id_station){
	$a=mysqli_fetch_array(mysqli_query($con, "select nama_station from ima_station where id_station='$id_station' "));
	$return=$a['nama_station'];
	return $return;
}

// cek kolom odbc_tableprivileges
function cekcolom($con, $table,$search, $colom, $variable){
 $a=mysqli_fetch_array(mysqli_query($con, "select $search as search, $colom as colom from $table where $colom='$variable'  "));
 $return="$table $colom $variable";
 return  $a['search'];
}



// server side ==========================================================================================================================================================
	function ss_cekstatus($status,$id_station){
		include 'connect.php';
		if ($status == 'data') {
			$a=mysqli_fetch_array(mysqli_query($con, "select count(id_station) as total from ima_data where id_station='$id_station'"));
			$total=$a['total']+0;
		}else{
			$a=mysqli_fetch_array(mysqli_query($con, "select count(id_station) as total from ima_data where id_station='$id_station' and status='$status'"));
			$total=$a['total'];
		}
		return $total;
	}
	//





 ?>
