
$("#submitform").click( function() {

	 $.post( $("#form").attr("action"),
	         $("#form :input").serializeArray(),
			 function(info) {

			   $("#info").empty();
			   $("#info").html(info);
				clear();
			 });

	$("#form").submit( function() {
	   return false;
	});
});

// function clear() {
//
// 	$("#loginform :input").each( function() {
// 	      $(this).val("");
// 	});
//
// }
