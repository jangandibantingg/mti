<?php
include '../control/connect.php';
include '../control/function.php';

// DB table to use
$table ='ima_data';
$id=$_GET['id'];
// Table's primary key
$primaryKey = 'id_data';

// Array of database columns which should be read and sent back to DataTables.
// The `db` parameter represents the column name in the database, while the `dt`
// parameter represents the DataTables column identifier. In this case simple
// indexes
$columns = array(
    array( 'db' => 'transfer', 'dt' => 0 ),
    array( 'db' => 'id_station',  'dt' => 1 ),
    array( 'db' => 'station_pengiriman',   'dt' => 2 ),
    array( 'db' => 'station_penerima',     'dt' => 3 ),
    array( 'db' => 'log_penerimaan',     'dt' => 4 ),
    array( 'db' => 'log_penerima',     'dt' => 5 ),
    array( 'db' => 'tanggal',     'dt' => 6 ),
    array( 'db' => 'status',     'dt' => 7 )

);




/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
 * If you just want to use the basic configuration for DataTables with PHP
 * server-side, there is no need to edit below this line.
 */

require( 'ssp.class.php' );

echo json_encode(
   SSP::complex( $_GET, $sql_details, $table, $primaryKey, $columns, null, "id_station='$id'" )
)

?>
