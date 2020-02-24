
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
         <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title"> <i class="ti-receipt"></i> Total Transfer</h4>
                                <div id="morris-donut-chart"></div>
                            </div>
                        </div>
                    </div>

          

             <!--  -->



</div>
