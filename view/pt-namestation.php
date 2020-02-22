<script src="ajax/modify.pembelian.js"></script>

                    <div class="col-md-12">


                          <!--  -->
                          <div class="card">
                            <div class="card-header" align="right">

                              <?php include 'view/form.post.php'; ?>
                            </div>
                            <div class="card-body">
                              <small>
                              <table id="config-table" class="table display no-wrap">
                                <thead>
                                    <tr >

                                        <th>Transfer</th>
                                        <th>ID</th>
                                        <th>Station Penerimaan</th>
                                        <th>Station Penerima</th>
                                        <th>Log Penerimaan</th>
                                        <th>Log Penerima</th>
                                        <th>Tanggal</th>
                                        <th>Status</th>


                                    </tr>
                                </thead>
                                  <tbody>
                                    <?php
                                      $_SESSION['from-pembelian'] = $_POST['from'];
                                      $_SESSION['until-pembelian'] = $_POST['until'];

                                      $from= $_SESSION['from-pembelian'];
                                      $until= $_SESSION['until-pembelian'];
                                      if (empty($_POST)) {
                                        $p=mysqli_query($con, "SELECT * from ima_data where id_station='$_GET[id]'  ");
                                        echo "<p  align='right'><small class='font-weight-bold'>Data log hari ini -- ".date('D, d M Y')."</small></p>";
                                      }else {
                                        $p=mysqli_query($con, "SELECT * from ima_data where id_station='$_GET[id]' and tanggal between '$from' and '$until' ");

                                      }

                                       while ($r=mysqli_fetch_array($p)) {

                                     ?>
                                     <?php

                                          echo "<tr>

                                           <td>$r[transfer]</td>
                                           <td>$r[id_station]</td>
                                           <td>$r[station_penerimaan]</td>
                                           <td>$r[station_penerima]</td>
                                           <td>$r[log_penerimaan]</td>
                                           <td>$r[log_penerima]</td>
                                           <td>$r[tanggal]</td>
                                           <td>$r[status]</td>

                                           </tr>";

                                        }
                                        ?>


                                  </tbody>

                              </table>
                              </small>
                        </div>

                      </div>



                          </div>
