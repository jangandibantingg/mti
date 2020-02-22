<script src="ajax/modify.pembelian.js"></script>

                    <div class="col-md-12">


                          <!--  -->
                          <div class="card">
                            <div class="card-header" >
                              Data Station
                              <!-- <?php include 'view/form.post.php'; ?> -->
                            </div>
                            <div class="card-body">
                              <small>
                              <table id="config-table" class="table display no-wrap">
                                <thead>
                                    <tr >


                                        <th>ID</th>
                                        <th>Station</th>
                                        <th>Total Transfer</th>


                                    </tr>
                                </thead>
                                  <tbody>
                                    <?php
                                        $p=mysqli_query($con, "SELECT * from ima_station ");

                                          while ($r=mysqli_fetch_array($p)) {

                                     ?>
                                     <?php

                                          echo "<tr>

                                           <td>$r[id_station]</td>
                                           <td><b><a href='./?page=pt-namestation&id=$r[id_station]'>$r[nama_station]</a></b></td>
                                           <td>".totaltransfer($con, $r['id_station'])."</td>

                                           </tr>";

                                        }
                                        ?>


                                  </tbody>

                              </table>
                              </small>
                        </div>

                      </div>



                          </div>
