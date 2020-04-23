<?php 
include 'database.php';

	$pn = mysqli_real_escape_string($connect, $_POST['playstation']);
	$getps = "SELECT * FROM consoles WHERE psname = '$pn'";
	$ens = mysqli_query($connect, $getps);

	//Get The Specific row
	if (mysqli_num_rows($ens) > 0) {
		while ($row = mysqli_fetch_assoc($ens)) {
			#echo the hours
			echo $row['pshours']. "<br>";
		}
	}
 ?>