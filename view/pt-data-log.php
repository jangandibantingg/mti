

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
                                    <tr>

                                        <th>Transfer</th>
                                        <th>ID</th>
                                        <th>Station pengiriman</th>
                                        <th>Station Penerima</th>
                                        <th>Log Penerimaan</th>
                                        <th>Log Penerima</th>
                                        <th>Tanggal</th>
                                        <th>Status</th>


                                    </tr>
                                </thead>
                                  <tbody>
                                    <?php

                                   if (empty($_POST)) {
                                     $p=mysqli_query($con, "SELECT * from ima_data where tanggal='$date' ");
                                     // $p=mysqli_query($con, "SELECT * from ima_data ");
                                     echo "<p  align='right'><small class='font-weight-bold'>Data log hari ini -- ".date('D, d M Y')."</small></p>";
                                   }else {
                                     $p=mysqli_query($con, "SELECT * from ima_data where tanggal between '$from' and '$until' ");
                                     // echo "SELECT * from ima_data where tanggal between '$from' and '$until'";
                                   }

                                    while ($r=mysqli_fetch_array($p)) {
                                     ?>
                                     <tr>
                                       <td><?php echo "$r[transfer]"; ?></td>
                                       <td><?php echo "$r[id_station]"; ?></td>
                                       <td><?php echo "$r[station_pengiriman]"; ?></td>
                                       <td><?php echo "$r[station_penerima]"; ?></td>
                                       <td><?php echo "$r[log_penerimaan]"; ?></td>
                                       <td><?php echo "$r[log_penerima]"; ?></td>
                                       <td><?php echo "$r[tanggal]"; ?></td>
                                       <td><?php echo "$r[status]"; ?></td>

                                     </tr>



                                   <?php } ?>
                                  </tbody>

                              </table>
                              </small>
                        </div>

                      </div>



                </div>
<!-- <script type="text/javascript">
$(document).ready(function() {
  $('#example').DataTable( {
      "responsive": true,
      "processing": true,
      "serverSide": true,
      "ajax": "server_side/datalog.php?start="
  } );

  $.fn.dataTable.ext.errMode = 'none';
} );
</script> -->
