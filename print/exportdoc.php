<!DOCTYPE html>
<html>
<head>
	<title>Ekspor PHP ke MSWORD</title>
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
	<style type="text/css">
		body{
			width: 1200px;
			margin: auto;
			font-family: 'Roboto', sans-serif;
		}

		input{
			border: none;
			padding: 10px 20px;
			background-color: green;
			color: #ffffff;
			box-shadow: 10px 10px 10px grey;
			cursor: pointer;
		}

		input:hover{
			color: black;
			transition: 250ms;
		}

	</style>
</head>
<body>

	<h2>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</h2>
	<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.</p>

	<form name="doc_test" action="<?php echo ($_SERVER['PHP_SELF']);?>" method="post">
		<input type="submit" name="submit_doc" value="Ekspor ke MS WORD">
	</form>

	<?php
		if(isset($_POST['submit_doc'])) {
			header("Content-Type: application/vnd.msword");
			header("Expires: 0");
			header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
			header("content-disposition: attachment;filename=hasilekspor.doc");
		}
	?>

</body>
</html>
