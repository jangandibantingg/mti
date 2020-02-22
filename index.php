<?php
error_reporting(0);
require_once "control/db.php";
require_once "control/User.php";
require_once "control/connect.php";
require_once "control/uploadfile.php";
require_once "control/function.php";
require_once "control/get_mobile.php";




if (isset($_GET['page'])) {
  $page=$_GET['page'];
}
$user = new User($db);
$member = $user->getuser($_SESSION['user_session']);
// ==========================================================
$log=mysqli_fetch_array(mysqli_query($con, "select * from ima_log where id_log='1'"));
// ===================================================
// $toko   = $gettoko->getuser($_SESSION['user_session']);
if ($user->isLoggedIn()) {
  setcookie("nama","".$member['nama']."");
  setcookie("email","".$member['email']."");
  $webmaster          ="select * from web_master where gerai='$member[gerai]' ";
  $webquery           =mysqli_query($con, $webmaster);
  $web                =mysqli_fetch_array($webquery);
  $gerai              =$member['gerai'];
  $_SESSION['gerai']  =$gerai;
}

if (!empty($_GET['action']) && $_GET['action'] == 'gantiakun') {
    unset($_COOKIE['email']);
}

if(!$user->isLoggedIn()){
    include 'view/gate.php';
}elseif($member['level'] == 'kasir') {
    include 'cashier/body.php';
}elseif(mobile_detect() == true){
    include 'view/body.php';
}else {
  include 'view/body.php';
}





?>
