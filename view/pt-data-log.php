

                    <div class="col-md-12">


                          <!--  -->
                          <div class="card">
                            <div class="card-header" align="right">

                              <?php include 'view/form.post.php'; ?>
                            </div>
                            <div class="card-body">
                              <small>
                              <table id="example" class="table display no-wrap">
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
                                  <tfoot>
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

                                  </tfoot>

                              </table>
                              </small>
                        </div>

                      </div>



                </div>
<script type="text/javascript">
$(document).ready(function() {
  $('#example').DataTable( {
      "responsive": true,
      "processing": false,
      "serverSide": true,
      "ajax": "server_side/datalog.php"
  } );

  $.fn.dataTable.ext.errMode = 'none';
} );
</script>
