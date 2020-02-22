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

function sublog($con,$filename){
	$a=mysqli_num_rows(mysqli_query($con, "select filename from ima_data where filename='$filename'"));
	return $a+0;
}

function totaltransfer($con,$id_station){
	$a=mysqli_fetch_array(mysqli_query($con, "select count(id_station) as total from ima_data where id_station='$id_station' "));
	$total=$a['total'];
	return $total;
}

 ?>
