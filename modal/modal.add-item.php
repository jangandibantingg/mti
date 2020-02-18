<div id="add-item" class="modal fade in " tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">


    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">

                <span class="modal-title font-weight-bold" id="myModalLabel">Add New Item</span>
              </div>

            <div class="modal-body">
                <form class="form-horizontal form-material" method="post" Action="" >
                    <div class="form-group">
                        <div class="col-md-12 m-b-20">
                          
                            <input type="text"  name="namabarang" class="form-control" placeholder="Nama barang"> </div>

                        <div class="col-md-12 m-b-20">
                            <input type="text" name="qty" class="form-control" placeholder="Berat">
                          </div>
                          <div class="col-md-12 m-b-20">
                            <select class="form-control" name="satuan">
                              <option value="">Pilih Satuan</option>
                              <option value="pcs">pcs</option>
                              <option value="lusin">lusin</option>
                              <!-- <option value="ctn">Ctn (carton)</option> -->
                              <option value="pack">Pack</option>
                              <option value="gr">gr</option>
                              <option value="kg">kg</option>
                              <option value="ml">ml</option>
                              <option value="lt">lt</option>
                            </select>
                          </div>
                        <div class="col-md-12 m-b-20">
                          <select class="form-control" name="suplier">
                              <option value="">Pilih Suplier</option>
                              <?php
                              $p=mysqli_query($con, "select * from suplier where status='active' and gerai='$gerai' order by nama_suplier asc");
                              while ($r=mysqli_fetch_array($p)) {
                                echo "<option value='$r[id_suplier]'>$r[nama_suplier]</option>";
                              }

                               ?>
                          </select>
                         </div>
                         <div class="col-md-12 m-b-20">
                             <input type="text" name="stok_awal" class="form-control" placeholder="Stok Awal">
                           </div>
                        <div class="col-md-12 m-b-20">
                            <input type="number" name="price" class="form-control" placeholder="Price"> </div>
                            <div class="col-md-12 m-b-20">
                                <input type="number" name="limit_stok" class="form-control" placeholder="Limit Stok"> </div>


                    </div>

            </div>
            <div class="modal-footer">
                <input type="submit" class="btn megna-theme text-light" value="SUBMIT">

                <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Cancel</button>
            </div>
          </form>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
