<?php
  var_dump($_POST);
 ?>
<table id="demo-foo-addrow" class="table m-t-30 table-hover contact-list" data-page-size="10">
    <thead>
        <tr>
            <th></th>
            <th>Name</th>
            <th width="15%">Price</th>
            <th>QTY</th>
            <th>SUB</th>
            <th>date</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
      <?php
        include "connect.php";
        $from=$_POST['from'];
        $until=$_POST['until'];

        $p=mysqli_query($con, "select orders.id_order, item.nama_item, item.price, orders.qty, orders.kode_item, item.kode_item, orders.dt from orders,item where item.kode_item=orders.kode_item and orders.dt between '$from' and  '$until' order by orders.id_order desc");
         while ($r=mysqli_fetch_array($p)) {
       ?>
        <tr id="row<?php echo $r['id_order'];?>">
            <td>  <a href="javascript:void(0)" id="delete_button<?php echo $r['id_order'];?>" onclick="delete_row('<?php echo $r['id_order'];?>');"><i class="icon-trash"></i></a></td>
            <td id="nama_item<?php echo $r['id_order'];?>"> <?php echo "$r[nama_item]"; ?></td>
            <td id="satuan<?php echo $r['id_order'];?>" align="right"><?php echo "".number_format($r['price']).""; ?></td>
            <td id="qty<?php echo $r['id_order'];?>"><?php echo "$r[qty]"; ?></td>
            <td id="id_suplier<?php echo $r['id_order'];?>" align="right"><?php echo "".number_format($r['price']*$r['qty']).""; ?></td>
            <td id="price<?php echo $r['id_order'];?>"><?php echo "".tanggal_indo($r['dt']).""; ?></td>

            <td>
               <a href="javascript:void(0)" id="edit_button<?php echo $r['id_order'];?>"  onclick="edit_item('<?php echo $r['id_order'];?>');"> <i class="icon-pencil text-info"></i>  </a>
                <input type='button' class="btn btn-success" id="save_button<?php echo $r['id_order'];?>" value="save" onclick="save_row('<?php echo $r['id_order'];?>');" style="display:none;">


            </td>
        </tr>
        <?php
          }
          ?>
    </tbody>

</table>
