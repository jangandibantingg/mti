<div class="row page-titles">
    <div class="col-md-5 align-self-center ">
      <?php if ($page == 'beranda'){
            // echo "<span class='font-weight-bold'> beranda</span>";
            echo '<a target="_blank" href="./print/beranda.php?id='.$_GET['id'].'&from='.$from.'&until='.$until.'" class="btn btn-info"><i class="ti-printer"></i> Grafik </a>  &nbsp; ';

            echo '<a target="_blank" href="./print/beranda_table.php?id='.$_GET['id'].'&from='.$from.'&until='.$until.'" class="btn btn-info"><i class="ti-printer"></i> Table </a>';
          }elseif($page == 'pt-namestation'){
            echo "<span class='font-weight-bold'> ".namastation($con, $_GET['id'])."  </span> <small>Station Pengiriman </small>";
          }elseif($page == 'pt-station'){
              echo "<span class='font-weight-bold'> Station </span> </small>";
          }



        ?>


    </div>
    <div class="col-md-7 align-self-center text-right">
        <div class="d-flex justify-content-end align-items-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)"><i class="ti-calendar"></i> <?php echo "".tanggal_indo($date).""; ?></a></li>
                <li class="breadcrumb-item active"><?php echo "$page.aspx"; ?> </li>
            </ol>
            <!-- &nbsp; <a href="./penjualan.aspx" class="btn btn-outline-info"><i class="ti-receipt"></i> Jual</a>
            &nbsp; <a href="./pembelian.aspx" class="btn btn-outline-info"><i class="ti-shopping-cart"></i> Beli </a>
          &nbsp; <a href="./invoice.aspx" class="btn btn-outline-info"><i class="ti-printer"></i> Invoice </a> -->
        </div>
    </div>
</div>
