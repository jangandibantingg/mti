
<div class="row">
  <div class="col-lg-12">

             <div class="card">
               <div class="card-header" align="right">
                 <?php include 'view/form.post.php'; ?>
               </div>
                 <div class="card-body">

                  
                   <div class="row">
                         <div class="col-lg-3 col-md-6 m-b-30 text-center"> <small> Data Log</small>
                             <h2><i class="ti-arrow-up text-info"></i> <?php echo "".number_format(subdata($con,'datalog',$from,$until)).""; ?></h2>
                             <div id="sparklinedash"></div>
                         </div>
                         <div class="col-lg-3 col-md-6 m-b-30 text-center"> <small> Complete Transfer</small>
                             <h2><i class="ti-arrow-up text-success"></i> <?php echo "".number_format(subdata($con,'Complete',$from,$until)).""; ?></h2>
                             <div id="sparklinedash2"></div>
                         </div>
                         <div class="col-lg-3 col-md-6 m-b-30 text-center"> <small> Cancelled Transfer</small>
                             <h2><i class="ti-arrow-up text-primary"></i> <?php echo "".number_format(subdata($con,'Cancelled',$from,$until)).""; ?></h2>
                             <div id="sparklinedash3"></div>
                         </div>
                         <div class="col-lg-3 col-md-6 m-b-30 text-center"> <small> Aborted Transfer</small>
                             <h2><i class="ti-arrow-down text-danger"></i> <?php echo "".number_format(subdata($con,'Aborted',$from,$until)).""; ?></h2>
                             <div id="sparklinedash4"></div>
                         </div>
                     </div>
                     <!-- <h4 class="card-title">Extra Area Chart</h4> -->
                     <ul class="list-inline font-12 text-center">
                                    <li><i class="fa fa-circle text-success"></i> Complete Transfer</li>
                                    <li><i class="fa fa-circle text-primary"></i> Cancelled Transfer</li>
                                    <li><i class="fa fa-circle text-danger"></i> Aborted Transfer</li>
                                </ul>
                     <div id="morris-bar-chart-dashboard"></div>
                 </div>
             </div>
         </div>







</div>
<div class="row">

                    <?php
                        $p=mysqli_query($con, "SELECT * from ima_station ");

                          while ($r=mysqli_fetch_array($p)) {

                     ?>

                    <div class="col-md-4">
                        <div class="card text-center">
                            <div class="card-body">
                                <h4 class="card-title"><?php echo "$r[nama_station]"; ?></h4>
                                <small class="card-text font-weight-light ">Total Pengiriman <?php echo number_format(totaltransfer($con, $r['id_station'],$from,$until)); ?></small><br>
                                <small class="card-text font-weight-light">Total Penerimaan <?php echo number_format(totalpenerimaan($con, $r['nama_station'],$from,$until)); ?></small><br>
                                <a href="<?php echo "./?page=pt-namestation&id=$r[id_station]&from=$from&until=$until"; ?>" class="btn btn-info">Details</a>
                            </div>
                        </div>
                    </div>
                  <?php } ?>
</div>
                <!-- End Row -->
