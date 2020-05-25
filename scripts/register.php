<?php 
include 'db.php';
$output = '';
	//Get The Data From the Forms
	$customerName = mysqli_real_escape_string($connect, $_POST['jina']);
	$customerPhone = mysqli_real_escape_string($connect, $_POST['simu']);
	$customerPassword = mysqli_real_escape_string($connect, $_POST['pass1']);


	//Exsecute Query
	$ins = "INSERT INTO users (name, phone, password) VALUES ('$customerName', '$customerPhone', '$customerPassword')";
	$exec = mysqli_query($connect, $ins);


	if (!$exec) {
		$output = "An Error Has Occured!".mysqli_error($connect);
		echo $output;
	}else{
		$output = "Thank You For Registering With Us, ".$customerName. '!';
		echo $output;
	}
 ?>