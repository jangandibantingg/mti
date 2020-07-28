

<form class="" action="" method="post">
<table>
  <tbody>
    <?php if ($page == 'pt-data-log'){  ?>
    <tr>
    <td class="co-3"> <input type="date" name="from" class="form-control" value="<?php echo "$from"; ?>" size="10"></td>
    <td class="co-1"> <i class="ti-control-skip-forward"></i> </td>
    <td class="co-3">  <input type="date" name="until" class="form-control" value="<?php echo "$until"; ?>"> </td>
    <td class="co-3">  <input type="text" name="namestation" class="form-control" value="<?php echo "$_POST[namestation]"; ?>" placeholder="Name Station" > </td>
    <td class="co-2"> <button type="submit"  class="btn megna-theme text-light" > Filter</button></td>
  </tr>
  <?php }else {?>
      <tr>
      <td class="co-3"> <input type="date" name="from" class="form-control" value="<?php echo "$from"; ?>" size="10"></td>
      <td class="co-1"> <i class="ti-control-skip-forward"></i> </td>
      <td class="co-3">  <input type="date" name="until" class="form-control" value="<?php echo "$until"; ?>"> </td>
      <td class="co-2"> <button type="submit"  class="btn megna-theme text-light" > Filter</button></td>
    </tr>
<?php } ?>
  </tbody>
</table>

</form>
