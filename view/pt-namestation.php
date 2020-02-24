<?php
  $p=mysqli_query($con, "SELECT count(station_penerima) as totaltransfer, station_pengiriman,station_penerima, id_station from ima_data where id_station='$_GET[id]' group by station_penerima  ");
 ?>

<script src="ajax/modify.pembelian.js"></script>

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
                                            <h2 class="counter text-info"><?php echo number_format(cekstatus($con,'data',$_GET['id'])); ?></h2>
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
                                            <small class="text-muted">COMPLETE TRANSFER</small>
                                        </div>
                                        <div class="ml-auto">
                                            <h2 class="counter text-success"><?php echo number_format(cekstatus($con,'Complete',$_GET['id'])); ?></h2>
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
                    <!-- Column -->
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="d-flex no-block align-items-center">
                                        <div>
                                            <h3><i class="icon-doc"></i></h3>
                                            <small class="text-muted">CANCELLED TRANSFER</small>
                                        </div>
                                        <div class="ml-auto">
                                            <h2 class="counter text-primary"><?php echo number_format(cekstatus($con,'Cancelled',$_GET['id'])); ?></h2>
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
                                            <small class="text-muted">ABORTED TRANSFER</small>
                                        </div>
                                        <div class="ml-auto">
                                            <h2 class="counter text-danger"><?php echo number_format(cekstatus($con,'Aborted',$_GET['id'])); ?></h2>
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


                          <!--  -->
                          <div class="card">
                            <div class="card-header" align="right">
                              <span class="font-weight-bold">Data Pengiriman</span>
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
                                        <th>Station Penerima</th>
                                        <th>Total Transfer</th>
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
                                           <td>$r[station_pengiriman]</td>
                                           <td><a href='./?page=pt-namestation&id=".cekcolom($con, 'ima_station','id_station','nama_station',$station_penerima)."'>$station_penerima</a></td>
                                           <td align='right'>".number_format($r['totaltransfer'])."</td>
                                           <td align='right'>".number_format(status_station($con,'Complete',$r['id_station'],$station_penerima ))."</td>
                                           <td align='right'>".number_format(status_station($con,'Canceled',$r['id_station'],$station_penerima ))."</td>
                                           <td align='right'>".number_format(status_station($con,'Aborted',$r['id_station'],$station_penerima ))."</td>


                                           </tr>";

                                        }
                                        ?>


                                  </tbody>

                              </table>
                              </small>
                        </div>

                      </div>





                          </div>
