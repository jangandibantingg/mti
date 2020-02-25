

                    <div class="col-md-12">


                          <!--  -->
                          <div class="card">
                            <div class="card-header" align="right" >
                              <span class="font-weight-bold">Data Staion</span>
                              <!-- <?php include 'view/form.post.php'; ?> -->
                            </div>
                            <div class="card-body">
                              <small>
                              <table id="data-station" class="table display no-wrap">
                                <thead>
                                    <tr >


                                        <th>ID</th>
                                        <th>Station</th>
                                        <th>Total Transfer</th>
                                        <th>Aborted</th>
                                        <th>Cancelled</th>
                                        <th>Complete</th>


                                    </tr>
                                </thead>
                                  <tbody>

                                  </tbody>

                              </table>
                              </small>
                        </div>

                      </div>



                          </div>


                          <script type="text/javascript">
                          $(document).ready(function() {
                            $('#data-station').DataTable( {
                                "responsive": true,
                                "processing": true,
                                "serverSide": true,
                                "ajax": "server_side/data_station.php",
                                dom: 'Bfrtip',
                                buttons: [
                                    'copy', 'csv', 'excel', 'pdf', 'print'
                                ]
                            } );

                            // $.fn.dataTable.ext.errMode = 'none';
                          } );
                          </script>
