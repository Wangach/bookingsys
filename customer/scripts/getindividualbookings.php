<?php 
include 'database.php';
//Perform A Search in the orders table for that specific day
$ask = "SELECT * FROM orders WHERE booker = '$user'";
$axn = mysqli_query($connect, $ask);
$actualNum = mysqli_num_rows($axn);

echo $actualNum;
 ?>