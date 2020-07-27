

                    <div class="col-md-12">
                      <h3 class="text-center font-weight-bold"> PT MITRA TEKNOLOGI IMA</h3>
                      <H4 class="text-center font-weight-normal"> REKAPITULASI HASIL LAPORAN PEMELIHARAAN PTS RSKD</h4>

                        <?php
                        if (!empty($_POST)) {
                          echo '<H5 class="text-center font-weight-normal"> '.tanggal_indo($from).' / '.tanggal_indo($until).' </h5>';
                        }else{
                          echo '<H5 class="text-center font-weight-normal"> '.tanggal_indo($date).' </h5>';
                        }
                         ?>
                          <!--  -->
                          <p class="text-center">
                            <a target="_blank" href="./print/data-station.php?<?php echo "from=$from&until=$until"; ?>" class="btn btn-info "><i class="ti-printer"></i> Cetak</a>
                            <a target="_blank" href="./print/excel-data-station.php?<?php echo "from=$from&until=$until"; ?>" class="btn btn-success "><i class="mdi mdi-file-excel"></i> Export to Excel</a>
                          </p>

                          <br>
                          <div class="card">
                            <div class="card-header" align="right">
                              <?php include 'view/form.post.php'; ?>
                            </div>
                            <div class="card-body">
                              <small>
                              <table id="config-table" class="table display no-wrap" >
                                <thead>
                                    <tr >


                                        <th>ID</th>
                                        <th>Station</th>
                                        <th >Total Transfer</th>
                                        <!-- <th>Aborted</th>
                                        <th>Cancelled</th>
                                        <th>Complete</th> -->


                                    </tr>
                                </thead>
                                  <tbody>
                                    <?php
                                          $p=mysqli_query($con, "SELECT * from ima_station order by nama_station asc ");
                                          while ($r=mysqli_fetch_array($p)) {
                                        echo "
                                        <tr>
                                           <td>$r[id_station]</td>
                                           <td><b><a href='./?page=pt-namestation&id=$r[id_station]&from=$from&until=$until'>$r[nama_station]</a></b></td>
                                           <td>".cekstatus($con,'data', $r['id_station'], $from, $until)."</td>
                                  
                                       </tr>";
                                     }
                                     ?>
                                  </tbody>

                              </table>
                              </small>
                        </div>

                      </div>



                          </div>


                          <!-- <script type="text/javascript">
                          $(document).ready(function() {
                            $('#data-station').DataTable( {
                                "responsive": true,
                                "processing": true,
                                "serverSide": true,
                                "paging" : true,
                                "search" : true,
                                "ajax": "server_side/data_station.php"


                            } );

                            // $.fn.dataTable.ext.errMode = 'none';
                          } );
                          </script> -->
