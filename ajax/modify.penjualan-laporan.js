function edit_row(id)
{
  var kredit=document.getElementById("kredit"+id).innerHTML;
  var keterangan=document.getElementById("keterangan"+id).innerHTML;


 document.getElementById("kredit"+id).innerHTML="<input class='form-control' type='text' id='kredit_val"+id+"' value='"+kredit+"'>";
 document.getElementById("keterangan"+id).innerHTML="<input class='form-control' type='text' id='keterangan_val"+id+"' value='"+keterangan+"'>";


 document.getElementById("edit_row"+id).style.display="none";
 document.getElementById("save_row"+id).style.display="block";
}
// edit penjualan
function edit_penjualan(id)
{
  var metode=document.getElementById("metode"+id).innerHTML;
  document.getElementById("metode"+id).innerHTML="<select class='form-control'  id='metode_val"+id+"' ><option value='"+metode+"'>"+metode+"</option><option value='cash'>Cash</option><option value='edc-bri'>edc-bri</option></select>";
 document.getElementById("edit_penjualan"+id).style.display="none";
 document.getElementById("save_penjualan"+id).style.display="block";
}
// edit saldo
function edit_saldo(id)
{
  var saldo_awal=document.getElementById("saldo_awal"+id).innerHTML;
  var saldo_akhir=document.getElementById("saldo_akhir"+id).innerHTML;


 document.getElementById("saldo_awal"+id).innerHTML="<input class='form-control' type='text' id='saldo_awal_var"+id+"' value='"+saldo_awal+"'>";
 document.getElementById("saldo_akhir"+id).innerHTML="<input class='form-control' type='text' id='saldo_akhir_val"+id+"' value='"+saldo_akhir+"'>";


 document.getElementById("edit_saldo"+id).style.display="none";
 document.getElementById("save_saldo"+id).style.display="block";
}

// save saldo

function save_saldo(id)
{
  var saldo_awal=document.getElementById("saldo_awal_var"+id).value;
  var saldo_akhir=document.getElementById("saldo_akhir_val"+id).value;


 $.ajax
 ({
  type:'post',
  url:'control/modify.penjualan-laporan.php',
  data:{
   edit_saldo:'edit_saldo',
   saldo_awal:saldo_awal,
   saldo_akhir:saldo_akhir,
   row_id:id


  },
  success:function(response) {
   if(response=="success")
   {
     document.getElementById("saldo_awal"+id).innerHTML=saldo_awal;
     document.getElementById("saldo_akhir"+id).innerHTML=saldo_akhir;
     document.getElementById("edit_saldo"+id).style.display="block";
     document.getElementById("save_saldo"+id).style.display="none";
   }
  }
 });
}

// save penjualan
function save_penjualan(id)
{
  var metode=document.getElementById("metode_val"+id).value;



 $.ajax
 ({
  type:'post',
  url:'control/modify.penjualan-laporan.php',
  data:{
   edit_penjualan:'edit_penjualan',
   metode:metode,
   row_id:id


  },
  success:function(response) {
   if(response=="success")
   {
     document.getElementById("metode"+id).innerHTML=metode;
     document.getElementById("edit_penjualan"+id).style.display="block";
     document.getElementById("save_penjualan"+id).style.display="none";
   }
  }
 });
}


function save_row(id)
{
  var kredit=document.getElementById("kredit_val"+id).value;
  var keterangan=document.getElementById("keterangan_val"+id).value;


 $.ajax
 ({
  type:'post',
  url:'control/modify.penjualan-laporan.php',
  data:{
   edit_row:'edit_row',
   kredit:kredit,
   keterangan:keterangan,
   row_id:id


  },
  success:function(response) {
   if(response=="success")
   {
     document.getElementById("keterangan"+id).innerHTML=keterangan;
     document.getElementById("kredit"+id).innerHTML=kredit;
     document.getElementById("edit_row"+id).style.display="block";
     document.getElementById("save_row"+id).style.display="none";
   }
  }
 });
}


function delete_row(id)
{
 $.ajax
 ({
  type:'post',
  url:'control/modify.penjualan-laporan.php',
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
//
function delete_menu(id)
{
 $.ajax
 ({
  type:'post',
  url:'control/modify.menu.php',
  data:{
   delete_menu:'delete_menu',
   row_id:id,
  },
  success:function(response) {
   if(response=="success")
   {
    var row=document.getElementById("rowmenu"+id);
    row.parentNode.removeChild(row);
   }
  }
 });
}

function insert_row()
{
 var name=document.getElementById("new_name").value;
 var age=document.getElementById("new_age").value;

 $.ajax
 ({
  type:'post',
  url:'modify_records.php',
  data:{
   insert_row:'insert_row',
   name_val:name,
   age_val:age
  },
  success:function(response) {
   if(response!="")
   {
    var id=response;
    var table=document.getElementById("user_table");
    var table_len=(table.rows.length)-1;
    var row = table.insertRow(table_len).outerHTML="<tr id='row"+id+"'><td id='name_val"+id+"'>"+name+"</td><td id='age_val"+id+"'>"+age+"</td><td><input type='button' class='edit_button' id='edit_button"+id+"' value='edit' onclick='edit_row("+id+");'/><input type='button' class='save_button' id='save_button"+id+"' value='save' onclick='save_row("+id+");'/><input type='button' class='delete_button' id='delete_button"+id+"' value='delete' onclick='delete_row("+id+");'/></td></tr>";

    document.getElementById("new_name").value="";
    document.getElementById("new_age").value="";
   }
  }
 });
}
