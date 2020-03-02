<?php echo "$_GET[from]"; ?>

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
                                  <tbody>

                                  </tbody>

                              </table>
                              </small>
                        </div>

                      </div>



                </div>
<script type="text/javascript">
$(document).ready(function() {
  $('#example').DataTable( {
      "responsive": true,
      "processing": true,
      "serverSide": true,
      "ajax": "server_side/datalog.php?start="
  } );

  $.fn.dataTable.ext.errMode = 'none';
} );
</script>
