
<div class="row">
  <div class="col-lg-12">
             <div class="card">
                 <div class="card-body">
                   <div class="row">
                         <div class="col-lg-3 col-md-6 m-b-30 text-center"> <small> Data Log</small>
                             <h2><i class="ti-arrow-up text-info"></i> <?php echo "".number_format(subdata($con,'datalog')).""; ?></h2>
                             <div id="sparklinedash"></div>
                         </div>
                         <div class="col-lg-3 col-md-6 m-b-30 text-center"> <small> Complete Transfer</small>
                             <h2><i class="ti-arrow-up text-success"></i> <?php echo "".number_format(subdata($con,'Complete')).""; ?></h2>
                             <div id="sparklinedash2"></div>
                         </div>
                         <div class="col-lg-3 col-md-6 m-b-30 text-center"> <small> Cancelled Transfer</small>
                             <h2><i class="ti-arrow-up text-primary"></i> <?php echo "".number_format(subdata($con,'Cancelled')).""; ?></h2>
                             <div id="sparklinedash3"></div>
                         </div>
                         <div class="col-lg-3 col-md-6 m-b-30 text-center"> <small> Aborted Transfer</small>
                             <h2><i class="ti-arrow-down text-danger"></i> <?php echo "".number_format(subdata($con,'Aborted')).""; ?></h2>
                             <div id="sparklinedash4"></div>
                         </div>
                     </div>
                     <!-- <h4 class="card-title">Extra Area Chart</h4> -->
                     <ul class="list-inline font-12 text-center">
                                    <li><i class="fa fa-circle text-success"></i> Complete Transfer</li>
                                    <li><i class="fa fa-circle text-primary"></i> Cancelled Transfer</li>
                                    <li><i class="fa fa-circle text-danger"></i> Aborted Transfer</li>
                                </ul>
                     <div id="extra-area-chart"></div>
                 </div>
             </div>
         </div>







</div>
<div class="row">
                    <div class="col-12 m-t-30">
                        <h4 class="m-b-0"> <i class="ti-location-pin"></i> station </h4>
                      <hr>
                        <!-- <p class="text-muted m-t-0 font-12">You can quickly change the text alignment<code>.text-center .text-right</code>.</p> -->
                    </div>
                    <?php
                        $p=mysqli_query($con, "SELECT * from ima_station ");

                          while ($r=mysqli_fetch_array($p)) {

                     ?>

                    <div class="col-md-4">
                        <div class="card text-center">
                            <div class="card-body">
                                <h4 class="card-title"><?php echo "$r[nama_station]"; ?></h4>
                                <small class="card-text font-weight-light ">Total Pengiriman <?php echo number_format(totaltransfer($con, $r['id_station'])); ?></small><br>
                                <small class="card-text font-weight-light">Total Penerimaan <?php echo number_format(totalpenerimaan($con, $r['nama_station'])); ?></small><br>
                                <a href="<?php echo "./?page=pt-namestation&id=$r[id_station]"; ?>" class="btn btn-info">Details</a>
                            </div>
                        </div>
                    </div>
                  <?php } ?>
</div>
                <!-- End Row -->
