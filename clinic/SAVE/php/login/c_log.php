<?php
$con= mysqli_connect("localhost","root","1234","clinic") or die("Error: " . mysqli_error($con));
mysqli_query($con, "SET NAMES 'utf8' "); 
?>