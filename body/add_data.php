<?php
include('connect.php');
$id=$_GET["id"];
$temp=$_GET["temp"];
$heartrate=$_GET["heartrate"];
$SQL = "INSERT INTO vitals (id,temp,heartrate) VALUES ($id,$temp,$heartrate)";     

    // Execute SQL statement
    mysqli_query($con,$SQL);
?>