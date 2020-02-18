
function edit_item(id)
{
            // var name=document.getElementById("nama_item"+id).innerHTML;
            // var satuan=document.getElementById("satuan"+id).innerHTML;
            var qty=document.getElementById("qty"+id).innerHTML;
            var sub=document.getElementById("sub"+id).innerHTML;
            var price=document.getElementById("price"+id).innerHTML;


            // document.getElementById("nama_item"+id).innerHTML="<input class='form-control' type='text' id='name_val"+id+"' value='"+name+"'>";
            // document.getElementById("satuan"+id).innerHTML="<select class='form-control' id='name_satuan"+id+"''><option value='"+satuan+"'>"+satuan+"</option><option value='pcs'>pcs</option><option value='lusin'>lusin</option><option value='dus'>dus</option><option value='pack'>Pack</option><option value='gram'>gram</option></select>";
            document.getElementById("qty"+id).innerHTML="<input class='form-control' type='text' id='name_qty"+id+"' value='"+qty+"'>";
            // document.getElementById("sub"+id).innerHTML="<input class='form-control' type='text' id='name_sub"+id+"' value='"+sub+"'>";
            document.getElementById("price"+id).innerHTML="<input class='form-control' type='text' id='name_price"+id+"' value='"+price+"' readonly>";



 document.getElementById("edit_button"+id).style.display="none";
 document.getElementById("save_button"+id).style.display="block";
}


function save_row(id)
{
  // var name=document.getElementById("name_val"+id).value;
  // var satuan=document.getElementById("name_satuan"+id).value;
  var qty=document.getElementById("name_qty"+id).value;
  var price=document.getElementById("name_price"+id).value;
  var sub=price*qty;





 $.ajax
 ({
  type:'post',
  url:'control/modify.pembelian.php',
  data:{
   edit_row:'edit_item',
   // name:name,
   // satuan:satuan,
   qty  :qty,
   price:price,
   sub:sub,
   row_id:id


  },
  success:function(response) {
   if(response=="success")
   {
     // document.getElementById("nama_item"+id).innerHTML=name;
     // document.getElementById("satuan"+id).innerHTML=satuan;
     document.getElementById("qty"+id).innerHTML=qty;
     document.getElementById("sub"+id).innerHTML=sub;
     document.getElementById("price"+id).innerHTML=price;



    document.getElementById("edit_button"+id).style.display="block";
    document.getElementById("save_button"+id).style.display="none";

   }
  }
 });
}

function checklist(id)
{
  var name=document.getElementById("nama_item"+id).innerHTML;
  var suplier=document.getElementById("suplier"+id).innerHTML;
  var satuan=document.getElementById("satuan"+id).innerHTML;
  var qty=document.getElementById("qty"+id).innerHTML;
  var sub=document.getElementById("sub"+id).innerHTML;
  var price=document.getElementById("price"+id).innerHTML;
  var checklist="<span class='font-weight-bold text-success'>Paid</span>";
  var action_edit="<span class='font-weight-bold text-info'> - </span>";
 $.ajax
 ({
  type:'post',
  url:'control/modify.pembelian.php',
  data:{
   checklist:'checklist',
   name:name,
   suplier:suplier,
   satuan:satuan,
   qty  :qty,
   price:price,
   checklist:checklist,
   action_edit:action_edit,
   sub:sub,
   row_id:id


  },
  success:function(response) {
   if(response=="success")
   {

     document.getElementById("checklist"+id).innerHTML=checklist;
     document.getElementById("action_edit"+id).innerHTML=action_edit;
     // document.getElementById("checklist_btn"+id).style.display='none';

   }
  }
 });
}

function delete_row(id)
{
 $.ajax
 ({
  type:'post',
  url:'control/modify.pembelian.php',
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
