<?php

//phpinfo();
$Username="root";
$password="root";
$host="localhost";
$database="body";

$con=mysqli_connect($host,$Username,$password);
$selected = mysqli_select_db($con,$database);

?>



