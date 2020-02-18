<?php
error_reporting(0);
session_start();
if(isset($_POST["product_id"]))
{
     $order_table = '';
     $message = '';
     if($_POST["action"] == "add")
     {
          if(isset($_SESSION["shopping_cart"]))
          {
               $is_available = 0;
               foreach($_SESSION["shopping_cart"] as $keys => $values)
               {
                    if($_SESSION["shopping_cart"][$keys]['product_id'] == $_POST["product_id"])
                    {
                         $is_available++;
                         $_SESSION["shopping_cart"][$keys]['product_quantity'] = $_SESSION["shopping_cart"][$keys]['product_quantity'] + $_POST["product_quantity"];
                    }
               }
               if($is_available < 1)
               {
                    $item_array = array(
                         'product_id'               =>     $_POST["product_id"],
                         'product_name'               =>     $_POST["product_name"],
                         'product_page'               =>     $_POST["product_page"],
                         'product_id_menu'               =>     $_POST["product_id_menu"],
                         'product_price'               =>     $_POST["product_price"],
                         'product_quantity'          =>     $_POST["product_quantity"]
                    );
                    $_SESSION["shopping_cart"][] = $item_array;
               }
          }
          else
          {
               $item_array = array(
                    'product_id'               =>     $_POST["product_id"],
                    'product_id_menu'               =>     $_POST["product_id_menu"],
                    'product_page'               =>     $_POST["product_page"],
                    'product_name'               =>     $_POST["product_name"],
                    'product_price'               =>     $_POST["product_price"],
                    'product_quantity'          =>     $_POST["product_quantity"]
               );
               $_SESSION["shopping_cart"][] = $item_array;
          }
     }
     if($_POST["action"] == "remove")
     {
          foreach($_SESSION["shopping_cart"] as $keys => $values)
          {
               if($values["product_id"] == $_POST["product_id"])
               {
                    unset($_SESSION["shopping_cart"][$keys]);
                    // $message = '<script>$.notify("produk berhasil dihapus", "info");</script>';

               }
          }
     }

     if($_POST["action"] == "quantity_change")
     {
          foreach($_SESSION["shopping_cart"] as $keys => $values)
          {
               if($_SESSION["shopping_cart"][$keys]['product_id'] == $_POST["product_id"])
               {
                    $_SESSION["shopping_cart"][$keys]['product_quantity'] = $_POST["quantity"];
               }
          }
          // $message = '<script>$.notify("produk berhasil diupdate", "info");</script>';

     }

     $order_table .= '
          '.$message.'
          <table class="table-responsive">

          ';
     if(!empty($_SESSION["shopping_cart"]))
     {
          $total = 0;
          foreach($_SESSION["shopping_cart"] as $keys => $values)
          {
               $order_table .= '
                    <tr>
                         <td><b>'.$values["product_name"].'</b><br>
                                <small class="font-weight-light">'.$values["product_price"].'</small>
                         </td>

                         <td><input type="number" name="quantity[]" id="quantity'.$values["product_id"].'" value="'.$values["product_quantity"].'" class="form-control quantity" data-product_id="'.$values["product_id"].'" /></td>


                         <td align="right" class="font-weight-bold"> '.number_format($values["product_quantity"] * $values["product_price"]).'</td>
                         <td align="right"><button name="delete" class="btn btn-outline-danger btn-xs delete" id="'.$values["product_id"].'"><i class="fa fa-trash"></i></button></td>
                    </tr>
               ';
               $total = $total + ($values["product_quantity"] * $values["product_price"]);
          }

          $order_table .= '
          <tr>
            <td colspan="4">&nbsp;</td>
          </tr>

          <td colspan="4"  align="right">

           <form method="post" action="control/simpan-belanja.php?act=pembelian">
             <input type="submit" name="place_order" class="btn btn-info" value="Place Order Rp '.number_format($total).'" />
           </form>


         </td>
               <tr>
                 <td colspan="4">&nbsp;</td>
               </tr>



          </table>

          ';


}
     $output = array(
          'order_table'         =>     $order_table,
          'cart_item'           =>     count($_SESSION["shopping_cart"])
     );
     echo json_encode($output);
}
 ?>
