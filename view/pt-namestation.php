<?php
  $from=$_GET['from'];
  $until=$_GET['until'];
  $p=mysqli_query($con, "SELECT count(station_penerima) as total, station_pengiriman,station_penerima, id_station from ima_data where id_station='$_GET[id]' and tanggal between '$from' and '$until' group by station_penerima  ");

  $q=mysqli_fetch_array(mysqli_query($con, "select nama_station from ima_station where id_station='$_GET[id]'"));
 ?>


<div class="row">


                    <div class="col-md-12">

                          <!--  -->
                          <div class="card-group">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="d-flex no-block align-items-center">
                                        <div>
                                            <h3><i class="icon-screen-desktop"></i></h3>
                                            <small class="text-muted">TOTAL LOG</small>
                                        </div>
                                        <div class="ml-auto">
                                            <h2 class="counter text-info"><?php echo number_format(cekstatus($con,'data',$_GET['id'],$from,$until)); ?></h2>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="progress">
                                        <div class="progress-bar bg-info" role="progressbar" style="width: 100%; height: 6px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <!-- Column -->
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="d-flex no-block align-items-center">
                                        <div>
                                            <h3><i class="icon-note"></i></h3>
                                            <small class="text-muted">PENGIRIMAN</small>
                                        </div>
                                        <div class="ml-auto">
                                            <h2 class="counter text-success"><?php echo number_format(cekstatus($con,'Complete',$_GET['id'],$from,$until)); ?></h2>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="progress">
                                        <div class="progress-bar bg-success" role="progressbar" style="width: 100%; height: 6px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="d-flex no-block align-items-center">
                                        <div>
                                            <h3><i class="icon-note"></i></h3>
                                            <small class="text-muted">PENERIMAAN</small>
                                        </div>
                                        <div class="ml-auto">
                                            <h2 class="counter text-cyan">
                                              <?php echo number_format(totalpenerimaan($con,$q['nama_station'],$from,$until)); ?>
                                            </h2>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="progress">
                                        <div class="progress-bar bg-cyan" role="progressbar" style="width: 100%; height: 6px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="d-flex no-block align-items-center">
                                        <div>
                                            <h3><i class="icon-doc"></i></h3>
                                            <small class="text-muted">COMPLETE </small>
                                        </div>
                                        <div class="ml-auto">
                                            <h2 class="counter text-success"><?php echo number_format(cekstatus($con,'Complete',$_GET['id'],$from,$until)); ?></h2>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="progress">
                                        <div class="progress-bar bg-success" role="progressbar" style="width: 100%; height: 6px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="d-flex no-block align-items-center">
                                        <div>
                                            <h3><i class="icon-doc"></i></h3>
                                            <small class="text-muted">CANCELLED </small>
                                        </div>
                                        <div class="ml-auto">
                                            <h2 class="counter text-primary"><?php echo number_format(cekstatus($con,'Cancelled',$_GET['id'],$from,$until)); ?></h2>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="progress">
                                        <div class="progress-bar bg-primary" role="progressbar" style="width: 100%; height: 6px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <!-- Column -->
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="d-flex no-block align-items-center">
                                        <div>
                                            <h3><i class="icon-bag"></i></h3>
                                            <small class="text-muted">ABORTED </small>
                                        </div>
                                        <div class="ml-auto">
                                            <h2 class="counter text-danger"><?php echo number_format(cekstatus($con,'Aborted',$_GET['id'],$from,$until)); ?></h2>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="progress">
                                        <div class="progress-bar bg-danger" role="progressbar" style="width: 100%; height: 6px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                  </div>
                </div>
                <!-- ==================================================================================== -->

                    <div class="col-md-12">

                       <div class="card ">
                         <div class="card-header">
                            <span class="card-title font-weight-bold">Total Pengiriman dan penerimaan  </span>
                         </div>
                           <div class="card-body">

                               <div id="morris-bar-chart"></div>

                           </div>
                         </div>
                       </div>
                         <!-- <div class="col-md-6">
                       <div class="card ">
                         <div class="card-header">
                            <span class="card-title font-weight-bold">Total Pengiriman  </span>
                         </div>
                           <div class="card-body">

                               <div id="morris-donut-chart"></div>
                           </div>
                       </div>
                   </div> -->

                   <!-- ==================================================================================== -->
                          <!--  -->
                        <div class="col-md-12 ">
                          <hr>
                          <H4 class="text-center font-weight-normal"> HASIL LAPORAN DATA STATION PENGIRIM DAN PENERIMAAN  PEMELIHARAAN PTS RSKD</h4>
                            <h5 class="text-center font-weight-bold"><?php echo "".namastation($con, $_GET['id']).""; ?></h5>

                            <?php
                            if (!empty($_GET)) {
                              echo '<H5 class="text-center font-weight-normal"> '.tanggal_indo($from).' / '.tanggal_indo($until).' </h5>';
                            }else{
                              echo '<H5 class="text-center font-weight-normal"> '.tanggal_indo($date).' </h5>';
                            }
                             ?>
                             <p class="text-center">
                               <a target="_blank" href="./print/nama-station.php?<?php echo "id=$_GET[id]&from=$from&until=$until"; ?>" class="btn btn-info "><i class="ti-printer"></i> Grapik</a>
                               <a target="_blank" href="./print/nama-station-table.php?<?php echo "id=$_GET[id]&from=$from&until=$until"; ?>" class="btn btn-info "><i class="ti-printer"></i> Pengiriman & Penerimaan</a>
                               <a target="_blank" href="./print/nama-station-table-pengiriman.php?<?php echo "id=$_GET[id]&from=$from&until=$until"; ?>" class="btn megna-theme text-light "><i class="ti-printer"></i> Table Pengiriman</a>
                               <a target="_blank" href="./print/nama-station-table-penerimaan.php?<?php echo "id=$_GET[id]&from=$from&until=$until"; ?>" class="btn btn-danger "><i class="ti-printer"></i> Table Penerimaan</a>
                               <a target="_blank" href="./print/excel-nama-station.php?<?php echo "id=$_GET[id]&from=$from&until=$until"; ?>" class="btn btn-success "><i class="mdi mdi-file-excel"></i> Export to Excel</a>
                             </p>
                          <div class="card">
                            <div class="card-header" align="right">
                              <?php include 'view/form.post.php'; ?>
                            </div>
                            <div class="card-body">
                              <small class="table-responsive m-t-40">
                              <table id="config-table"
                                        class="display nowrap table table-hover table-striped table-bordered"
                                        cellspacing="0" width="100%">
                                <thead>
                                    <tr >


                                        <th>ID</th>
                                        <th>Station pengiriman</th>
                                        <th>Total</th>
                                        <th>Station Penerimaan</th>
                                        <th>Total</th>
                                        <th>Complete</th>
                                        <th>Canceled</th>
                                        <th>Aborted</th>


                                    </tr>
                                </thead>
                                  <tbody>
                                    <?php

                                       while ($r=mysqli_fetch_array($p)) {
                                        $station_penerima=$r['station_penerima'];
                                     ?>
                                     <?php

                                          echo "<tr>


                                           <td>$r[id_station]</td>
                                           <td>$r[station_pengiriman] <i class='ti-arrow-right'></i> $station_penerima</td>
                                           <td align='right'>".number_format($r['total'])."</td>
                                           <td><a href='./?page=pt-namestation&id=".cekcolom($con, 'ima_station','id_station','nama_station',$station_penerima,$from,$until)."&from=$from&until=$until'>$station_penerima</a> <i class='ti-arrow-right'></i> $r[station_pengiriman]</td>
                                           <td align='right'>".number_format(totalpenerimaanstation($con,$station_penerima,$r['station_pengiriman'],$from,$until))."</td>
                                           <td align='right'>".number_format(status_station($con,'Complete',$r['id_station'],$station_penerima,$from,$until ))."</td>
                                           <td align='right'>".number_format(status_station($con,'Cancelled',$r['id_station'],$station_penerima,$from,$until ))."</td>
                                           <td align='right'>".number_format(status_station($con,'Aborted',$r['id_station'],$station_penerima,$from,$until ))."</td>


                                           </tr>";

                                        }
                                        ?>


                                  </tbody>

                              </table>

                              </small>
                        </div>
                        <!--  -->





                      </div>

                      <!--  -->






                      <!--  -->



                    </div>
                  </div>

                  <!-- <script type="text/javascript">
                  $(document).ready(function() {
                    $('#name-station').DataTable( {
                        "responsive": true,
                        "processing": true,
                        "serverSide": true,
                        "ajax": "server_side/name_station.php?id=<?php echo "$_GET[id]"; ?>",
                        dom: 'Bfrtip',
                        buttons: [
                            'copy', 'csv', 'excel', 'pdf', 'print'
                        ]
                    } );

                    // $.fn.dataTable.ext.errMode = 'none';
                  } );
                  </script> -->
