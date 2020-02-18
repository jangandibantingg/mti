<?php
$pengeluaran    =pengeluaran($con,$date,$gerai);
$saldo_awal     =saldo_awal($con,$date,$gerai);
$penjualantoday =penjualantoday($con,$date,$gerai);
$hpp            =hpp($con,$date,$gerai);
$grossprofit    =grossprofit($penjualantoday,$hpp);

// operationalcost
if ( ($grossprofit/$web['operationalcost'] * 100) > 100) {
    $operationalcost=100;
}else {
    $operationalcost=number_format($grossprofit/$web['operationalcost'] * 100) ;
}
// targetsales
if ( ($penjualantoday/$web['targetsales'] * 100) > 100) {
    $targetsales=100;
}else {
    $targetsales=number_format($penjualantoday/$web['targetsales'] * 100) ;
}


 ?>
 <p class="text-right"> <small> <i class="icon-notebook"></i> <b>laporan harian tanggal <?php echo "".tanggal_indo($date).""; ?>.</b> </small> </p>

 <div class="card-group">
                    <div class="card">
                        <div class="card-body ">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="d-flex no-block align-items-center">
                                        <div>
                                            <h3><i class="ti-receipt"></i></h3>

                                        </div>
                                        <div class="ml-auto">
                                            <span class="counter font-weight-bold ">Rp. <?php echo number_format($penjualantoday); ?></span>
                                            <p class="text-muted font-weight-light">Penjualan</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="progress">
                                        <div class="progress-bar megna-theme" role="progressbar" style="width: 100%; height: 6px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <!-- Column -->
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="d-flex no-block align-items-center">
                                        <div>
                                            <h3><i class="icon-wallet"></i></h3>

                                        </div>
                                        <div class="ml-auto">
                                             <span class="counter font-weight-bold"> <?php echo "".number_format(transactiontoday($con,$date,$gerai)).""; ?></span>
                                            <p class="text-muted font-weight-light">Transaksi</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="progress">
                                        <div class="progress-bar megna-theme" role="progressbar" style="width: 100%; height: 6px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>


<p class="text-right"> <small> <i class="icon-screen-desktop"></i> <b>Dashboard <?php echo "".date('M Y').""; ?>.</b> <button type="button" id="print" class="btn megna-theme text-light"name="button"> <i class="ti-printer"></i> </button> </small> </p>
<?php include 'view/chart-sales-summary.php'; ?>
