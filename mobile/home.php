<div class="page-content header-clear">

    <div class="page-title has-subtitle">
        <div class="page-title-left">
            <a href="#" class="font-22">Rp. <?php echo "".number_format(sumIncome($con, date('m'))).""; ?></a>
            <span class="color-highlight">Penjualan bulan <?php echo "".date('M Y').""; ?></span>
        </div>
        <div class="page-title-right">
            <a href="#"><h2><i class="fa fa-university color-highlight"></i></h2></a>
            <a href="#"><h2><i class="fa fa-receipt color-highlight"></i></h2></a>
            <a href="#"><h2><i class="fa fa-chart-line color-highlight round-circle shadow-huge"></i></h2></a>
        </div>
    </div>



         <div class="divider divider-margins"></div>
    <a href="#" data-height="100" class="caption caption-margins round-small shadow-huge bottom-20">
        <div class="caption-bottom left-15 bottom-15">
            <h1 class="color-white font-40">Rp. <?php echo "".number_format(penjualantoday($con,$date)).""; ?></h1>

            <p class="color-white under-heading opacity-70 bottom-0 font-15">Penjualan Hari Ini</p>
        </div>
        <div class="caption-top top-15 right-15">
            <!-- <span  class="button button-xxs float-right bg-blue2-dark round-small color-highlight">ADD FUNDS</span> -->
        </div>
        <div class="caption-overlay bg-black opacity-70"></div>
        <div class="caption-bg bg-21"></div>
    </a>

    <div class="content">
        <div class="tab-controls tab-animated tabs-medium tabs-rounded"
             data-tab-items="2"
             data-tab-active="bg-highlight">
            <a href="#" class="shadow-large font-12" data-tab-active data-tab="tab-1"> <i class="far fa-list-alt"></i> Details </a>
            <a href="#" class="shadow-large font-12" data-tab="tab-2"> <i class="fa fa-print"></i> Kasir </a>
        </div>
        <div class="clear bottom-15"></div>
        <div class="tab-content" id="tab-1">
            <div class="link-list link-list-1 link-list-icon-bg bottom-40">
                <a href="#">
                    <i class="fa fa-wallet color-highlight"></i>
                    <span  class="font-15">Pengeluaran</span>
                    <hr>
                    <!-- <strong>Belanja hari ini</strong> -->
                    <em class="color-highlight font-15 font-weight-bold">Rp. <?php echo "".number_format(pengeluaran($con,$date)).""; ?></em>
                </a>
                <a href="#">
                    <i class="fa fa-calculator color-highlight"></i>
                    <span  class="font-15">HPP</span>
                    <!-- <strong>Bahan Pokok Penjualan</strong> -->
                    <em class="color-highlight font-15 font-weight-bold">Rp. <?php echo "".number_format(hpp($con,$date)).""; ?></em>

                </a>

                <a href="#">
                    <i class="fa fa-burn color-highlight"></i>
                    <span  class="font-15">Operational</span>
                    <!-- <strong>Operational Dalam Sehari</strong> -->
                    <em class="color-highlight font-15 font-weight-bold">Rp. <?php echo "".number_format(operational($con,$date,$web['operationalcost'])).""; ?></em>

                </a>
                <a href="#">
                    <i class="fa fa-wallet color-highlight"></i>
                    <span  class="font-15">Gross Profit</span>
                    <!-- <strong>Laba kotor hari ini</strong> -->
                    <em class="color-highlight font-15 font-weight-bold">Rp. <?php echo "".number_format(grossprofit(penjualantoday($con,$date),hpp($con, $date))).""; ?></em>
                </a>
                <a href="#">
                    <i class="fa fa-donate color-highlight"></i>
                    <span  class="font-15">NET Profit</span>
                    <!-- <strong>Laba bersih hari ini</strong> -->
                    <em class="color-highlight font-15 font-weight-bold">Rp. <?php echo "".number_format(profittoday(penjualantoday($con,$date), $web['operationalcost'])).""; ?></em>
                </a>
            </div>
        </div>
        <div class="tab-content" id="tab-2">
          <div class="link-list link-list-1 link-list-icon-bg bottom-40">
              <a href="#">
                  <i class="fa fa-wallet color-highlight"></i>
                  <span  class="font-15">Saldo Awal</span>
                  <!-- <strong>Saldo awal pembukaan kasir</strong> -->
                  <em class="color-highlight font-15 font-weight-bold">Rp. <?php echo "".number_format(saldo_awal($con,$date)).""; ?></em>
              </a>
              <a href="#">
                  <i class="fa fa-shopping-bag color-highlight"></i>
                  <span  class="font-15">Pengeluaran Kasir</span>
                  <!-- <strong>Belanja ambil dari uang kasir</strong> -->
                  <em class="color-highlight font-15 font-weight-bold">Rp. <?php echo "".number_format(pengeluaran($con,$date)).""; ?></em>

              </a>

              <a href="#">
                  <i class="far fa-money-bill-alt color-highlight"></i>
                  <span  class="font-15">Current Saldo</span>
                  <!-- <strong>Saldo Kasir</strong> -->
                  <em class="color-highlight font-15 font-weight-bold">Rp. <?php echo "".number_format(current_saldo($con,$date,saldo_awal($con,$date),pengeluaran($con,$date))).""; ?></em>

              </a>
              <a href="#">
                  <i class="fa fa-receipt color-highlight"></i>
                  <span  class="font-15">Transaksi</span>
                  <!-- <strong>Jumlah Transaksi hari ini</strong> -->
                  <em class="color-highlight font-15 font-weight-bold"><?php echo "".number_format(transactiontoday($con,$date)).""; ?></em>
              </a>

          </div>


        </div>
    </div>

</div>
