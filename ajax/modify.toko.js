function edit_row(id)
{
  var nama=document.getElementById("nama"+id).innerHTML;
  var email=document.getElementById("email"+id).innerHTML;
  var alamat=document.getElementById("alamat"+id).innerHTML;
  var no_hp=document.getElementById("no_hp"+id).innerHTML;



  document.getElementById("nama"+id).innerHTML="<input type='text' class='form-control' id='nama_val"+id+"' value='"+nama+"'>";
  document.getElementById("email"+id).innerHTML="<input type='text' class='form-control' id='email_val"+id+"' value='"+email+"'>";
  document.getElementById("alamat"+id).innerHTML="<input type='text' class='form-control' id='alamat_val"+id+"' value='"+alamat+"'>";
  document.getElementById("no_hp"+id).innerHTML="<input type='text' class='form-control' id='no_hp_val"+id+"' value='"+no_hp+"'>";


 document.getElementById("edit_button"+id).style.display="none";
 document.getElementById("save_button"+id).style.display="block";
}


function save_row(id)
{
  var nama=document.getElementById("nama_val"+id).value;
  var email=document.getElementById("email_val"+id).value;
  var alamat=document.getElementById("alamat_val"+id).value;
  var no_hp=document.getElementById("no_hp_val"+id).value;


 $.ajax
 ({
  type:'post',
  url:'control/modify.toko.php',
  data:{
   edit_row:'edit_row',
   nama:nama,
   email:email,
   alamat:alamat,
   no_hp:no_hp,
   row_id:id


  },
  success:function(response) {
   if(response=="success")
   {
     document.getElementById("nama"+id).innerHTML=nama;
     document.getElementById("email"+id).innerHTML=email;
     document.getElementById("alamat"+id).innerHTML=alamat;
     document.getElementById("no_hp"+id).innerHTML=no_hp;


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
  url:'control/modify.toko.php',
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
