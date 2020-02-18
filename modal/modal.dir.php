
<div id="add-item" class="modal fade in " tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">


    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">

                <span class="modal-title font-weight-bold" id="myModalLabel">Add New Item</span>
              </div>

            <div class="modal-body">
              <form class="form-horizontal mt-4" id="loginform" action="control/ima-folder-log.php" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                        <small>update directory folder </small>
                        <input type="text" name="namefile" class="form-control" value="" placeholder="C:\Users\ima\maret"  webkitdirectory directory multiple>
                        </div>

                         <!-- <div class="form-group">

                              <small>folder log</small>
                              <div class="input-group">
                                  <div class="input-group-prepend">
                                      <span class="input-group-text">folder</span>
                                  </div>
                                  <div class="custom-file">
                                      <input type="text" name="namefile" class="custom-file-input"  webkitdirectory multiple>
                                      <label class="custom-file-label" for="inputGroupFile01">pilih file</label>
                                  </div>
                              </div>
                          </div> -->

                           <div class="form-group">
                               <div class="input-group">
                                <button type="button" id="submit"  class="btn btn-danger">Submit</button>
                               </div>
                           </div>

              </form>
              <div id="info">

              </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>
</div>
