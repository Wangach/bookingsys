<?php 
include 'db.php';
if (isset($_POST['reg'])) {
	//Get The Data From the Forms
	$nameOfCustomer = mysqli_real_escape_string($connection, $_POST['jina']);
	$phoneOfCustomer = mysqli_real_escape_string($connection, $_POST['simu']);
	$passOfCustomer = mysqli_real_escape_string($connection, $_POST['siri']);


	//Exsecute Query
	$ins = "INSERT INTO users (id, name, phone, password) VALUES ('', '$nameOfCustomer', '$phoneOfCustomer', '$passOfCustomer')";
	$exec = mysqli_query($connection, $ins);


	if (!$exec) {
		$output = "An Error Has Occured!".mysqli_error($connection);
		echo json_encode($output);
	}else{
		$output = "Data Has Been Inserted Successfully!";
		echo json_encode($output);
	}
}
 ?>