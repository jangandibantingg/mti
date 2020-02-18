<div id="edit-item" class="modal fade in " tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">


    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">

                <span class="modal-title font-weight-bold" id="myModalLabel">Edit Item</span>
              </div>

            <div class="modal-body">
              <div class="" id="info">

              </div>
                <form id="loginform" class="floating-labels m-t-40" method="post" Action="modify.item.html" >
                    <div class="form-group">
                        <div class="col-md-12 m-b-20">
                            <input type="text"  name="namabarang" value="<?php echo "$r[nama_item]"; ?>" class="form-control" placeholder="Nama barang">
                            <span class="bar"></span>
                            <label for="input1"><small>Nama Item </small></label>
                             </div>
                        <div class="col-md-12 m-b-20">
                            <input type="text" name="qty"  value="<?php echo "$r[qty]"; ?>" class="form-control" placeholder="Berat">
                            <span class="bar"></span>
                            <label for="input1"><small>Qty</small></label>
                        </div>
                          <div class="col-md-12 m-b-20">
                            <select class="form-control" name="satuan">
                              <option  value="<?php echo "$r[satuan]"; ?>"><?php echo "$r[satuan]"; ?></option>
                              <option value="">_____________________</option>
                              <option value="pcs">pcs</option>
                              <option value="lusin">lusin</option>
                              <!-- <option value="ctn">Ctn (carton)</option> -->
                              <option value="pack">Pack</option>
                              <option value="gr">gr</option>
                              <option value="kg">kg</option>
                              <option value="ml">ml</option>
                              <option value="lt">lt</option>
                            </select>
                            <span class="bar"></span>
                            <label for="input1"><small>Satuan</small></label>
                          </div>
                        <div class="col-md-12 m-b-20">
                          <select class="form-control" name="suplier">
                              <option  value="<?php echo "$r[id_suplier]"; ?>"><?php echo "$r[nama_suplier]"; ?></option>
                              <option value="">_____________________</option>
                              <?php
                              $p=mysqli_query($con, "select * from suplier where status='active' and gerai='$gerai' order by nama_suplier asc");
                              while ($q=mysqli_fetch_array($p)) {
                                echo "<option value='$q[id_suplier]'>$q[nama_suplier]</option>";
                              }

                               ?>
                          </select>
                          <span class="bar"></span>
                          <label for="input1"><small>Suplier </small></label>
                         </div>
                         <div class="col-md-12 m-b-20">
                             <input type="text" name="stok_awal"  value="<?php echo "$r[stok_awal]"; ?>" class="form-control" placeholder="Stok Awal">
                             <span class="bar"></span>
                             <label for="input1"><small>Stok Awal</small></label>
                          </div>
                        <div class="col-md-12 m-b-20">
                            <input type="number" name="price"  value="<?php echo "$r[price]"; ?>"  class="form-control" placeholder="Price">
                            <span class="bar"></span>
                            <label for="input1"><small>Harga Per item </small></label>
                        </div>
                            <div class="col-md-12 m-b-20">
                            <input type="number" name="limit_stok"  value="<?php echo "$r[limit_stok]"; ?>" class="form-control" placeholder="Limit Stok">
                            <span class="bar"></span>
                            <label for="input1"><small>Limit Stok </small></label>
                            <input type="hidden" name="edit_row"  value="<?php echo "$_GET[edit_row]"; ?>" >
                            <input type="hidden" name="gerai"  value="<?php echo "$gerai"; ?>" >
                            </div>


                    </div>

            </div>
            <div class="modal-footer">
                <input id="submit" class="btn megna-theme text-light" value="SUBMIT">

                <a href="<?php echo "$_GET[page].aspx"; ?>" class="btn btn-default waves-effect" >Cancel</a>
            </div>
          </form>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
