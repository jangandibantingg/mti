<?php
// error_reporting(0);
include '../control/connect.php';
include '../control/function.php';


$table ='ima_station';

$primaryKey = 'id_station';

$columns = array(
    array( 'db' => 'id_station', 'dt' => 0 ),
    array( 'db' => 'nama_station',
           'dt' => 1,
           'formatter' => function( $d, $row ) {
                  return '<a href=./?page=pt-namestation&id='.$row[0].'>'.$d.'</a>';
              }
          ),
    array(
            'db'         => 'id_station',
            'dt'         => 2,
            'formatter' => function( $d, $row ) {
             return ss_cekstatus('data',$d);
        }
      ),
      array(
              'db'         => 'id_station',
              'dt'         => 3,
              'formatter' => function( $d, $row ) {
               return ss_cekstatus('Aborted',$d);
          }
        ),
        array(
                'db'         => 'id_station',
                'dt'         => 4,
                'formatter' => function( $d, $row ) {
                 return ss_cekstatus('Cancelled',$d);
            }
          ),
          array(
                  'db'         => 'id_station',
                  'dt'         => 5,
                  'formatter' => function( $d, $row ) {
                   return ss_cekstatus('Complete',$d);
              }
            )

);



/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
 * If you just want to use the basic configuration for DataTables with PHP
 * server-side, there is no need to edit below this line.
 */

require( 'ssp.class.php' );

echo json_encode(
   SSP::simple( $_GET, $sql_details, $table, $primaryKey, $columns )
)

?>
