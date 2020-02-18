function delete_row(id)
{
 $.ajax
 ({
  type:'post',
  url:'control/modify.list-invoice.php ',
  data:{
   delete_row:'delete_row',
   row_id:id,
  },
  success:function(response) {
   if(response=="success")
   {
    var row=document.getElementById("row"+id);
    row.parentNode.removeChild(row);
   }
  }
 });
}
