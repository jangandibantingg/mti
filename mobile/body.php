
<!DOCTYPE HTML>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, viewport-fit=cover" />
<title><?php echo "$page"; ?></title>
<link rel="stylesheet" type="text/css" href="library/mobile/styles/style.css">
<link rel="stylesheet" type="text/css" href="library/mobile/styles/framework.css">
<link href="https://fonts.googleapis.com/css?family=IBM+Plex+Sans:300,300i,400,400i,500,500i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="library/mobile/fonts/css/fontawesome-all.min.css">
<!-- Don't forget to update PWA version (must be same) in pwa.js & manifest.json -->
<link rel="manifest" href="library/mobile/_manifest.json" data-pwa-version="set_by_pwa.js">
<link rel="apple-touch-icon" sizes="180x180" href="library/mobile/app/icons/icon-192x192.png">
</head>

<body class="theme-light" data-highlight="aqua">

<div id="page">

    <div id="page-preloader">
        <div class="loader-main"><div class="preload-spinner border-highlight"></div></div>
    </div>
<?php if ($page == 'home' || $page == '' || $page == 'beranda') { ?>
	<div class="header header-fixed header-logo-app">
    <a href="#" class="header-title"><?php echo "$web[title]"; ?></a>
		<a href="#" class="header-icon header-icon-1"><i class="fas fa-book"></i></a>
		<a href="#" class="header-icon header-icon-2" data-toggle-theme><i class="fa fa-moon"></i></a>
	</div>
<?php } ?>
    <div class="footer-menu footer-5-icons footer-menu-center-icon">
        <a href="#" class=""><i class="fa fa-piggy-bank"></i><span>Gross profit	</span></a>
        <a href="#" data-menu="action-transaksi"><i class="fa fa-receipt"></i><span>Transaksi</span></a>
        <a href="./" class="active-nav"><i class="far fa-list-alt"></i><span>Home</span></a>
        <a href="#"  data-menu="action-pengeluaran" ><i class="fa fa-wallet"></i><span>Pengeluaran</span></a>
        <a href="menu.aspx"><i class="fa fa-bars"></i><span>Menu</span></a>
        <div class="clear"></div>
    </div>


    <?php
    if (file_exists("mobile/$page.php")) {

          require "mobile/$page.php";
      }elseif($page == '' || $page ==  'beranda' ){
         require "mobile/home.php";
      }else {

        if ($member['level'] == 'akun') {
          echo "<script type='text/javascript'> window.location.href = './penjualan.aspx' </script>";
        }
        require "mobile/home.php";
      }


    ?>

    <div class="menu-hider"></div>
</div>
<!--  -->
<div id="action-transaksi"
         class="menu-box menu-box-detached round-medium"
         data-menu-type="menu-box-bottom"
         data-menu-height="411"
         data-menu-effect="menu-parallax">

        <div class="page-title has-subtitle">
            <div class="page-title-left">
                <a href="#">Transaksi</a>
                <span class="color-highlight">History Transaksi Penjualan Hari ini</span>
            </div>
            <div class="page-title-right">
                <a href="#" class="close-menu"><i class="fa fa-times-circle font-20 color-red2-dark"></i></a>
            </div>
        </div>

        <div class="divider bottom-25"></div>

        <div class="link-list link-list-1 link-list-icon-bg bottom-40">

          <?php   $p=mysqli_query($con, "SELECT time(dt) as dt, invoice, amount, paid from inv where date='$date' order by id_inv desc ");
            $no=1;
             while ($r=mysqli_fetch_array($p)) { ?>
            <a href="#" >
               <i class="fa fa-receipt color-highlight"></i>
                <span  class="font-15"><?php echo "$r[invoice]"; ?></span>
                <em class="color-highlight font-15 font-weight-bold">Rp. <?php echo "".number_format($r['amount']).""; ?></em>
            </a>
          <?php } ?>

            <div class="divider"></div>

            <a href="#" >
            <i class="fa fa-calculator color-highlight"></i>
                <span  class="font-20">Total Penjualan</span>
                <em class="color-highlight font-20 font-weight-bold">Rp. <?php echo "".number_format(penjualantoday($con, $date)).""; ?></em>

            </a>

            <div class="divider"></div>

            <!-- <a href="#" class="button button-15 button-m button-round-medium shadow-huge bg-highlight top-30 bottom-30">View in Cart page</a> -->
        </div>
    </div>
 <!--  -->

 <div id="action-pengeluaran"
          class="menu-box menu-box-detached round-medium"
          data-menu-type="menu-box-bottom"
          data-menu-height="411"
          data-menu-effect="menu-parallax">

         <div class="page-title has-subtitle">
             <div class="page-title-left">
                 <a href="#">Pengeluaran</a>
                 <span class="color-highlight">Pengeluaran Hari ini</span>
             </div>
             <div class="page-title-right">
                 <a href="#" class="close-menu"><i class="fa fa-times-circle font-20 color-red2-dark"></i></a>
             </div>
         </div>

         <div class="divider bottom-25"></div>

         <div class="link-list link-list-1 link-list-icon-bg bottom-40">

           <?php   $p=mysqli_query($con," SELECT time(dtime) as dtime, kredit, keterangan, id_arus_khas from arus_khas where dt='$date' order by id_arus_khas desc");
             $no=1;
              while ($r=mysqli_fetch_array($p)) { ?>
             <a href="#" >
                <i class="fa fa-receipt color-highlight"></i>
                 <span  class="font-15"><?php echo "$r[keterangan]"; ?></span>
                 <em class="color-highlight font-15 font-weight-bold">Rp. <?php echo "".number_format($r['kredit']).""; ?></em>
             </a>
           <?php } ?>

             <div class="divider"></div>

             <a href="#" >
             <i class="fa fa-calculator color-highlight"></i>
                 <span  class="font-20">Total Pengeluaran</span>
                 <em class="color-highlight font-20 font-weight-bold">Rp. <?php echo "".number_format(pengeluaran($con, $date)).""; ?></em>

             </a>

             <div class="divider"></div>

             <!-- <a href="#" class="button button-15 button-m button-round-medium shadow-huge bg-highlight top-30 bottom-30">View in Cart page</a> -->
         </div>
     </div>

<script type="text/javascript" src="library/mobile/scripts/jquery.js"></script>
<script type="text/javascript" src="library/mobile/scripts/plugins.js"></script>
<script type="text/javascript" src="library/mobile/scripts/custom.js" ></script>
</body>
