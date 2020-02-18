<?php
include 'connect.php';

if(isset($_POST['edit_row']))
{
  mysqli_query($con, "UPDATE item set nama_item = '$_POST[namabarang]',
                                      qty       = '$_POST[qty]',
                                      satuan    = '$_POST[satuan]',
                                      id_suplier= '$_POST[suplier]',
                                      stok_awal = '$_POST[stok_awal]',
                                      price     = '$_POST[price]',
                                      limit_stok= '$_POST[limit_stok]'
                                where kode_item ='$_POST[edit_row]' and gerai='$_POST[gerai]'");
                                echo "<script>window.location.href='./data-item.aspx'</script>";
}

if(isset($_POST['delete_row']))
{
 $row_no=$_POST['row_id'];
 mysqli_query($con,"update item set active='N' where kode_item='$row_no'");
 echo "success";
 exit();
}

if(isset($_POST['insert_row']))
{
 $name=$_POST['name_val'];
 $age=$_POST['age_val'];
 mysqli_query($con,"insert into user_detail values('','$name','$age')");
 echo mysql_insert_id();
 exit();
}
?>
