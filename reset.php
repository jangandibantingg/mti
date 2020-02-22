<?php

include 'control/connect.php';

mysqli_query($con, "TRUNCATE TABLE ima_file");
mysqli_query($con, "TRUNCATE TABLE ima_data");
mysqli_query($con, "TRUNCATE TABLE ima_station");


echo "<script type='text/javascript'> window.location.href = './pt-settings.aspx' </script>";


 ?>
