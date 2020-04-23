<?php 
$connect = mysqli_connect("localhost", "root", "", "bookingsys");
$output = "";
if (!$connect) {
	$output = "Sorry There Has Been An Error Connecting to The Database ". mysqli_error($connect). "!";
	echo $output;
}
 ?>