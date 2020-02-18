function edit_row(id)
{
  var date=document.getElementById("date"+id).innerHTML;
  var keterangan=document.getElementById("keterangan"+id).innerHTML;
  var kredit=document.getElementById("kredit"+id).innerHTML;



  document.getElementById("date"+id).innerHTML="<input type='date' class='form-control' id='date_value"+id+"' value='"+date+"'>";
  document.getElementById("keterangan"+id).innerHTML="<input type='text' class='form-control' id='keterangan_value"+id+"' value='"+keterangan+"'>";
  document.getElementById("kredit"+id).innerHTML="<input type='text' class='form-control' id='kredit_value"+id+"' value='"+kredit+"'>";


 document.getElementById("edit_button"+id).style.display="none";
 document.getElementById("save_button"+id).style.display="block";
}


function save_row(id)
{
  var date=document.getElementById("date_value"+id).value;
  var keterangan=document.getElementById("keterangan_value"+id).value;
  var kredit=document.getElementById("kredit_value"+id).value;


 $.ajax
 ({
  type:'post',
  url:'control/modify.pengeluaran.php',
  data:{
   edit_row:'edit_row',
   date:date,
   keterangan:keterangan,
   kredit:kredit,
   row_id:id
  },
  success:function(response) {
   if(response=="success")
   {
     document.getElementById("date"+id).innerHTML=date;
     document.getElementById("kredit"+id).innerHTML=kredit;
    document.getElementById("keterangan"+id).innerHTML=keterangan;


    document.getElementById("edit_button"+id).style.display="block";
    document.getElementById("save_button"+id).style.display="none";
   }
  }
 });
}

function delete_row(id)
{
 $.ajax
 ({
  type:'post',
  url:'control/modify.pengeluaran.php',
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
